<?php

namespace App\Http\Livewire\Pelanggan\Info;

use App\Models\UserProfile;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
class Akun extends Component
{
    use WithFileUploads;
    public $nama_depan;
    public $nama_belakang;
    public $alamat;
    public $no_hp;
    public $saldo;
    public $avatar;
    public $p;
    protected $rules = [
        'nama_depan' => 'required|max:50',
        'nama_belakang' => 'max:50',
        'alamat' => 'required',
        'no_hp' => 'required|max:13',
        'saldo' => 'required'
    ];
    public function updatedPhoto()
    {
        $this->validate([
            'avatar' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048'
        ]);
    }
    public function setProfile()
    {
        $this->reset([
            'nama_depan',
            'nama_belakang',
            'no_hp',
            'alamat',
            'avatar',
        ]);
        $this->saldo = 0;
        if (Auth::user()->user_profile) {
            $this->nama_depan = Auth::user()->user_profile->nama_depan;
            if (Auth::user()->user_profile->nama_belakang) {
                $this->nama_belakang = Auth::user()->user_profile->nama_belakang;
            }
            $this->no_hp = Auth::user()->user_profile->no_hp;
            $this->alamat = Auth::user()->user_profile->alamat;
            $this->saldo = Auth::user()->user_profile->saldo;
        }

    }
    public function updateAkun()
    {
        $this->validate();
        if (!Auth::user()->user_profile) {
            UserProfile::create([
                'user_id' => Auth::user()->id,
                'nama_depan' => $this->nama_depan,
                'nama_belakang' => $this->nama_belakang,
                'alamat' => $this->alamat,
                'no_hp' => $this->no_hp,
                'avatar' => Auth::user()->username . $this->avatar->getClientOriginalExtension(),
                'saldo' => $this->saldo,
            ]);
            if ($this->avatar) {
                $this->avatar->storeAs('avatar', Auth::user()->username . $this->avatar->getClientOriginalExtension());
            }
        }
        else {
            UserProfile::where('user_id', Auth::user()->id)->update([
                'nama_depan' => $this->nama_depan,
                'nama_belakang' => $this->nama_belakang,
                'alamat' => $this->alamat,
                'no_hp' => $this->no_hp,
                'saldo' => $this->saldo,
            ]);
            if ($this->avatar) {
                UserProfile::where('user_id', Auth::user()->id)->update([
                    'avatar' => Auth::user()->username .".". $this->avatar->getClientOriginalExtension(),
                ]);
                $this->avatar->storeAs('avatar', Auth::user()->username .".". $this->avatar->getClientOriginalExtension());
            }
        }
        return redirect('/pelanggan/akun');
        $this->setProfile();
    }

    public function mount()
    {
        $this->setProfile();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.pelanggan.info.akun');
    }
}
