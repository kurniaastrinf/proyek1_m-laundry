<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function user_profile()
    {
        return $this->hasOne(UserProfile::class, 'user_id', 'id');
    }
    public function layanan()
    {
        return $this->belongsToMany(Layanan::class, 'layanan_user', 'id_user', 'id_layanan')->withPivot(['status', 'tgl_pemesanan', 'berat_orderan']);
    }
    public function topup()
    {
        return $this->hasMany(Topup::class, 'id_user', 'id');
    }
}
