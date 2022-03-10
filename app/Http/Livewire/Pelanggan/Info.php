<?php

namespace App\Http\Livewire\Pelanggan;

use Livewire\Component;
use Illuminate\Support\Facades\Route;
use Livewire\WithPagination;

class Info extends Component
{
    use WithPagination;

    public $component_ = '';
    public function render()
    {
        $this->component_ = Route::currentRouteName();
        return view('livewire.pelanggan.info')->extends('layouts.pelanggan')->section('content');
    }
}
