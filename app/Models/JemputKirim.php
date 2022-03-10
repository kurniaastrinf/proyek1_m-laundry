<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JemputKirim extends Model
{
    use HasFactory;
    protected $table = 'jemput_kirim';
    protected $fillable = [
        'id_layanan_user',
        'metode',
        'nama_lengkap',
        'alamat',
        'tanggal',
        'jam',
        'status',
    ];
    public function layanan_user()
    {
        return $this->belongsTo(LayananUser::class, 'id_layanan_user', 'id');
    }
}
