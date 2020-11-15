<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

class UserKategoriController extends Controller
{

    // menampilkan seluruh data
    function showBeranda()
    {
        $data['list_kategori'] = kategori::all();
        return view('template.base', $data); //mengarahkan ke folder view yg mana si file nya
    }

    // menampilkan satu data/detail data
    function show(kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('kategori.show', $data);
    }
}
