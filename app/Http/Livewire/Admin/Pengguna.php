<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Pengguna extends Component
{
    public function render()
    {
        return view('livewire.admin.pengguna')->extends('layouts.admin')->section('content');
    }
}
