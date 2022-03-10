<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    use HasFactory;
    protected $table = 'topup';
    protected $fillable = [
        'id_user',
        'no_rek',
        'jml_transfer',
        'tgl_transfer',
        'jam_transfer',
        'bukti_transfer',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
