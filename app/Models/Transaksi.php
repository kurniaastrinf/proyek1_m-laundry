<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'id_layanan_user',
        'total_harga',
        'metode_transaksi',
        'tgl_transaksi',
        'status_transaksi',
        'bukti_transaksi'
    ];
    public function layanan_user()
    {
        return $this->belongsTo(LayananUser::class, 'id_layanan_user', 'id');
    }
}
