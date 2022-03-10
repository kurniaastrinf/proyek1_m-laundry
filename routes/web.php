<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/loginRequest', [AuthController::class, 'loginRequest']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'check_role:admin'])->group(function () {
    Route::get('/admin', \App\Http\Livewire\Admin\Dashboard::class)->name('admin');
    Route::get('/admin/pengguna', \App\Http\Livewire\Admin\Pengguna::class)->name('admin.pengguna');
    Route::get('/admin/transaksi', App\Http\Livewire\Admin\Transaksi::class)->name('admin.transaksi');
});
Route::middleware(['auth', 'check_role:pelanggan'])->group(function () {
    Route::get('/pelanggan', \App\Http\Livewire\Pelanggan\Dashboard::class)->name('pelanggan');
    Route::get('/pelanggan/info', \App\Http\Livewire\Pelanggan\Info::class)->name('pelanggan.info.akun');
    Route::get('/pelanggan/akun', \App\Http\Livewire\Pelanggan\Info::class)->name('pelanggan.info.akun');
    Route::get('/pelanggan/pesanan', \App\Http\Livewire\Pelanggan\Info::class)->name('pelanggan.info.pesanan');
    Route::get('/pelanggan/saldo', \App\Http\Livewire\Pelanggan\Info::class)->name('pelanggan.info.saldo');
    Route::get('/pelanggan/transaksi', \App\Http\Livewire\Pelanggan\Info::class)->name('pelanggan.info.transaksi');
});
Route::get('/login', \App\Http\Livewire\Auth\Login::class)->name('login');
Route::get('/register', \App\Http\Livewire\Auth\Register::class)->name('register');

