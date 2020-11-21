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

    function filter()
    {
        $data['list_kategori'] = kategori::all();
        // filter where group
        $nama = request('nama');
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        // $data['size'] = $size = request('size');
        $size = explode(",", request('size'));
        $data['color'] = $color = request('color');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->whereBetween('harga', [$harga_min, $harga_max])->whereIn('size', $size)->where('color', $color)->get();
        $data['size'] = request('size');

        return view('Userproduk.index', $data);
    }
}
