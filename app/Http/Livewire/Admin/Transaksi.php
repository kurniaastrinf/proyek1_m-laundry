<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Transaksi extends Component
{
    public function render()
    {
        return view('livewire.admin.transaksi')->extends('layouts.admin')->section('content');
    }
}
