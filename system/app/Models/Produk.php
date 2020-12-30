<?php

namespace App\Models;

class Produk extends Model
{
    protected $table = 'produk';
    protected $casts = [
        'created_at' => 'datetime',
        'berat' => 'decimal:2'
    ];


    // untuk menampilkan data di show produk
    function seller()
    {
        return $this->belongsTo(User::class, 'id_user'); //id_user adalah foreign key nya, 
    }

    function getHargaAttribute()
    {
        return "Rp. " . number_format($this->attributes['harga']);
    }
    function getTanggalProduksiAttribute()
    {
        $tanggal = $this->created_at;
        return strftime("%d %b %Y", strtotime($this->created_at));
    }
}
