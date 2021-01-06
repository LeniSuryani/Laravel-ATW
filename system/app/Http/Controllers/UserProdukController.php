<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use App\Models\Provinsi;

class UserProdukController extends Controller
{

    function keranjang()
    {
        $data['list_provinsi'] = Provinsi::all();
        $data['list_kategori'] = kategori::all();
        return view('keranjang', $data);
    }
    // menampilkan seluruh data
    function index()
    {
        $data['list_kategori'] = kategori::all();
        $dataa['list_produk'] = produk::paginate(4);
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

    function filterNama()
    {
        $data['list_kategori'] = kategori::all();
        // filter where group
        $nama = request('nama');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        return view('Userproduk.index', $data);
    }
    function filterHarga()
    {
        $data['list_kategori'] = kategori::all();
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        return view('Userproduk.index', $data);
    }
    function filterSize()
    {
        $data['list_kategori'] = kategori::all();
        $size = explode(",", request('size'));
        $data['list_produk'] = Produk::whereIn('size', $size)->get();
        return view('Userproduk.index', $data);
    }
    function filterColor()
    {
        $data['list_kategori'] = kategori::all();
        $data['color'] = $color = request('color');
        $data['list_produk'] = Produk::where('color', $color)->get();
        // $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->whereBetween('harga', [$harga_min, $harga_max])->whereIn('size', $size)->where('color', $color)->get();
        $data['size'] = request('size');

        return view('Userproduk.index', $data);
    }
}
