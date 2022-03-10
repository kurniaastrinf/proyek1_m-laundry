<?php

namespace App\Http\Livewire\Pelanggan\Info;

use App\Models\Layanan;
use App\Models\LayananUser;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Transaksi;

class Pesanan extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $jml_pesanan;
    // public LayananUser $pesanan;
    public $currentPesanan;
    public $saldo;
    public $metode_transaksi;
    public $warning_message;
    public $harga;
    public $bukti_transaksi;
    public $successMsg;
    protected $rules = [
        'metode_transaksi' => 'required',
        'bukti_transaksi' => 'image',
    ];
    public function mount()
    {
        $this->jml_pesanan = LayananUser::where('id_user', Auth::user()->id)->where('status', 'belum dibayar')->count();
        $this->saldo = Auth::user()->user_profile->saldo;

    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        if ($this->metode_transaksi == 'saldo m-laundry' && ($this->saldo < $this->harga)) {
            $this->warning_message = "Saldo anda tidak mencukupi";
        }
        else {
            $this->warning_message = '';
        }
    }
    public function setCurrentPesanan($pesanan)
    {
        $this->currentPesanan = $pesanan;
        $pesanan = LayananUser::find($this->currentPesanan);
        $this->harga = $pesanan->harga;

    }
    public function bayar()
    {
        if (!$this->warning_message) {
            $status_transaksi = 'menunggu konfirmasi';
            $pesanan = LayananUser::find($this->currentPesanan);
            if ($this->metode_transaksi == 'saldo m-laundry') {
                $status_transaksi = 'lunas';
                $user = Auth::user();
                $user->user_profile->saldo = $user->user_profile->saldo - $this->harga;
                $user->user_profile->save();
            }
            if ($pesanan->transaksi) {
               $pesanan->transaksi->metode_transaksi = $this->metode_transaksi;
               $pesanan->transaksi->tgl_transaksi = Carbon::now();
               $pesanan->transaksi->status_transaksi = $status_transaksi;
               $pesanan->transaksi->bukti_transaksi = null;
               $pesanan->transaksi->save();
            }
            else {
                Transaksi::create([
                    'id_layanan_user' => $this->currentPesanan,
                    'total_harga' => $this->harga,
                    'metode_transaksi' => $this->metode_transaksi,
                    'tgl_transaksi' => Carbon::now(),
                    'status_transaksi' => $status_transaksi,
                ]);
            }
            if ($this->bukti_transaksi) {
                $rand = Str::random(30);
                Transaksi::where('id_layanan_user', $this->currentPesanan)->update([
                    'bukti_transaksi' => $rand . '.' . $this->bukti_transaksi->getClientOriginalExtension(),
                ]);
                $this->bukti_transaksi->storeAs('transaksi', $rand . '.' . $this->bukti_transaksi->getClientOriginalExtension());
            }
        }
        $pesanan->status = $status_transaksi;
        $pesanan->save();
        $this->successMsg = "Transaksi berhasil dilakukan";
        $this->emit('closeModal');
        // return redirect('/pelanggan/pesanan');
    }
    public function render()
    {
        return view('livewire.pelanggan.info.pesanan', [
            'pesanan' => LayananUser::where('id_user', Auth::user()->id)->paginate(4)
        ]);
    }
}
