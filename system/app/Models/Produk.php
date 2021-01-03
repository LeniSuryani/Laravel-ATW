<?php

namespace App\Models;

use Illuminate\Support\Str;

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
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/produk";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        $path = public_path($foto);
        if (file_exists($path)) {
            unlink($path);
        }
        return true;
    }
}
