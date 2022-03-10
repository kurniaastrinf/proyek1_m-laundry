<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $username;
    public $password;
    public $email;
    public $confirm_password;
    public User $user;
    protected $rules = [
        'username' => 'required|max:100|unique:users',
        'email' => 'required|max:100|email|unique:users',
        'password' => 'required|max:100',
        'confirm_password' => 'required|max:100',
    ];
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
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        if ($this->password != $this->confirm_password) {
            session()->flash('message', "The confirm password field doesn't match");
        }
    }
    public function userIsExist()
    {
        if (User::where('username', $this->username)->first()) {
            return true;
        }
        if (User::where('email', $this->email)->first()) {
            return true;
        }
        return false;
    }
    public function requestRegister()
    {
        $this->validate();
        if (!$this->userIsExist()) {
            User::create([
                'username' => $this->username,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'role' => 'pelanggan',
            ]);
            return redirect('/login');
        }
        $this->reset([
            'username',
            'email',
            'password',
            'confirm_password'
        ]);
    }
    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth')->section('auth_form');
    }
}
