<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    public $success_login = false;
    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function loginRequest()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->username, 'password' => $this->password]) || Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            $request = Auth::user();
            if ($request->role == 'admin') {
                return redirect('/admin');
            }
            else {
                return redirect('/pelanggan');
            }
        }
        session()->flash('message', 'Username atau password salah');
        // return redirect('/login');
    }
    public function mount()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            }
            elseif (Auth::user()->role == 'pelanggan') {
                return redirect('/pelanggan');
            }
        }

    }
    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth')->section('auth_form');
    }
}
