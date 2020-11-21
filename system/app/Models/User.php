<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;
use App\Models\Produk;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    // untuk merelasikan one to one ke user detail
    function detail()
    {
        return $this->hasOne(UserDetail::class, 'id_user');
    }

    // one to many, merelasikan user dengan produk
    function produk()
    {
        return $this->hasMany(Produk::class, 'id_user');
    }
}
