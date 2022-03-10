<?php

namespace App\Http\Livewire\Pelanggan\Info;

use App\Models\Topup;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Saldo extends Component
{
    use WithFileUploads;
    public $saldo;
    public $no_rek, $tgl_transfer, $jml_transfer, $jam_transfer, $bukti_transfer;
    public $successMsg;
    protected $rules = [
        'no_rek' => 'required',
        'tgl_transfer' => 'required|date',
        'jml_transfer' => 'required',
        'jam_transfer' => 'required',
        'bukti_transfer' => 'required|image'
    ];
    public function mount()
    {
        $this->saldo = 0;
        if (Auth::user()->user_profile) {
            $this->saldo = Auth::user()->user_profile->saldo;
        }
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->saldo = 0;
        if (Auth::user()->user_profile) {
            $this->saldo = Auth::user()->user_profile->saldo;
        }
    }
    public function uploadKonfirmasi()
    {
        $this->validate();
        $topup = Topup::create([
            'id_user' => Auth::user()->id,
            'no_rek' => $this->no_rek,
            'jml_transfer' => $this->jml_transfer,
            'tgl_transfer' => $this->tgl_transfer,
            'jam_transfer' => $this->jam_transfer,
            'status' => 'menunggu konfirmasi',
        ]);
        if ($this->bukti_transfer) {
            $rand = Str::random(20);
            $topup->bukti_transfer = $rand . '.' . $this->bukti_transfer->getClientOriginalExtension();
            $this->bukti_transfer->storeAs('topup', $topup->bukti_transfer);
            $topup->save();
        }
        $this->successMsg = "Konfirmasi topup berhasil di upload";
    }
    public function render()
    {
        return view('livewire.pelanggan.info.saldo');
    }
}
