<?php

namespace App\Models;

use illuminate\Support\Str;

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

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/produk";
            $randomStr = str::random(5);
            $filename = $this->id . "-" . time() . "-"  . $randomStr . "-"  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }
}
