<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananUser extends Model
{
    use HasFactory;
    protected $table = 'layanan_user';
    protected $fillable = [
        'id_user',
        'id_layanan',
        'status',
        'tgl_pemesanan',
        'berat_orderan',
        'harga'
    ];
    public function jemput_kirim()
    {
        return $this->hasMany(JemputKirim::class, 'id_layanan_user', 'id');
    }
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }
    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'id_layanan_user', 'id');
    }

}
