<?php

namespace App\Http\Livewire\Pelanggan;

use App\Models\JemputKirim;
use App\Models\JenisLayanan;
use Livewire\Component;
use App\Models\Layanan;
use App\Models\LayananUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Livewire\WithPagination;

class Dashboard extends Component
{

    use WithPagination;

    public $berat_orderan;
    public $currentLayanan;
    public $id_layanan;
    public $penjemputan;
    public $btn_toogle = "+";
    public $variable_b;
    public $success;

    public $long, $lat, $alamat, $nama_lengkap, $tanggal, $jam;
    protected $rules = [
        'berat_orderan' => 'required',
        'id_layanan' => 'required',
    ];
    public $id_jenis_layanan;
    public $currentJenisLayanan;
    public function hydrate()
    {
        # code...
    }
    public function setPenjemputan()
    {
        $this->penjemputan =! $this->penjemputan;
        if ($this->penjemputan == true) {
            $this->btn_toogle = "- Opsi Penjemputan";
        }
        else {
            $this->btn_toogle = "+";
        }
        $this->reset([
            'alamat',
            'nama_lengkap',
            'tanggal',
            'jam'
        ]);
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->currentLayanan = Layanan::find($this->id_layanan);
        if ($this->berat_orderan < 1) {
            $this->berat_orderan = 1;
        }
    }
    public function pesanLaundry($id)
    {
        $this->validate();
        if (!$this->berat_orderan) {
            $this->emit('closeModal');
        }
        $pesanan = LayananUser::create([
            'id_user' => Auth::user()->id,
            'id_layanan' => $id,
            'status' => 'belum dibayar',
            'tgl_pemesanan' => Carbon::now(),
            'berat_orderan' => $this->berat_orderan,
            'harga' => $this->berat_orderan * Layanan::find($id)->biaya_perkilo,
        ]);
        if ($this->penjemputan && $this->nama_lengkap && $this->alamat && $this->tanggal && $this->jam) {
            JemputKirim::create([
                'id_layanan_user' => $pesanan->id,
                'metode' => 'Jemput',
                'nama_lengkap' => $this->nama_lengkap,
                'alamat' => $this->alamat,
                'tanggal' => $this->tanggal,
                'jam' => $this->jam,
                'status' => 'Belum Dijemput'
            ]);
        }
        $this->reset([
            'berat_orderan',
            'id_layanan',
            'currentLayanan',
            'alamat',
            'nama_lengkap',
            'tanggal',
            'jam'
        ]);
        $this->emit('closeModal');
        $this->success = "Pesanan berhasil dibuat";
        // $this->emit('successPesan');
    }
    public function setCurrentLayanan($id)
    {
        $this->currentLayanan = Layanan::find($id);
    }
    public function getJenisLayanan($id_jenis_layanan)
    {
        if (!Auth::user()->user_profile) {
            return redirect('/pelanggan/info');
        }
        $this->id_jenis_layanan = $id_jenis_layanan;
        $this->fill(['currentJenisLayanan' => JenisLayanan::find($id_jenis_layanan)]);
    }
    public function render()
    {

        return view('livewire.pelanggan.dashboard', [
            'jenis_layanan' => JenisLayanan::all()
        ])->extends('layouts.pelanggan')->section('content');
    }
}
