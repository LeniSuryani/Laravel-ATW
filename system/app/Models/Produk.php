<?php

namespace App\Models;

class Produk extends Model
{
    protected $table = 'produk';


    // untuk menampilkan data di show produk
    function seller()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
