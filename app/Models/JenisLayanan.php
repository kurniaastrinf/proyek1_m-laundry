<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    use HasFactory;
    protected $table = 'jenis_layanan';
    protected $fillable = [
        'nama_layanan',
        'keterangan',
        'paket',
    ];
    public function layanan()
    {
        return $this->hasMany(Layanan::class, 'id_jenis_layanan', 'id');
    }
}
