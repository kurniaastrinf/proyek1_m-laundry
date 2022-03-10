<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $fillable = [
        'nama_layanan',
        'id_jenis_layanan',
        'biaya_perkilo',
        'lama_pengerjaan'
    ];
    public function user()
    {
        return $this->belongsToMany(User::class, 'layanan_user', 'id_layanan', 'id_user');
    }
    public function jenis_layanan()
    {
        return $this->belongsTo(JenisLayanan::class, 'id_jenis_layanan', 'id');
    }
    public function layanan_user()
    {
        return $this->hasMany(LayananUser::class, 'id_layanan', 'id');
    }
}
