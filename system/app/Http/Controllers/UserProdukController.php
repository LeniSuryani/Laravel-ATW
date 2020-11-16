<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;

class UserProdukController extends Controller
{

    // menampilkan seluruh data
    function index()
    {
        $data['list_kategori'] = kategori::all();
        $dataa['list_produk'] = produk::all();
        return view('UserProduk.index', $data, $dataa); //mengarahkan ke folder view yg mana si file nya
    }

    // menampilkan satu data/detail data
    function show(produk $userproduk)
    {
        $data['list_kategori'] = kategori::all();
        $dataa['produk'] = $userproduk;
        return view('UserProduk.show', $data, $dataa);
    }

    function promo()
    {
        $data['list_kategori'] = kategori::all();
        $dataa['list_produk'] = produk::all();
        return view('template.discount', $data, $dataa); //mengarahkan ke folder view yg mana si file nya
    }
}
