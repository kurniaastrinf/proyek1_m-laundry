<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
        if (Auth::user()->role == 'admin') {
            return redirect('/admin');
        }
    }
    public function register()
    {
        return view('auth.register');
    }
    public function loginRequest(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            $request = Auth::user();
            if ($request->role == 'admin') {
                return redirect('/admin');
            }
            elseif ($request->role == 'pelanggan') {
                return redirect('/pelanggan');
            }
        }
        else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
