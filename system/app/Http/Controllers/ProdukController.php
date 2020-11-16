<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{

    // menampilkan seluruh data
    function index()
    {
        $data['list_produk'] = produk::all();
        return view('produk.index', $data); //mengarahkan ke folder view yg mana si file nya
    }
    // menampilkan form untuk input data baru
    function create()
    {
        return view('produk.create');
    }
    // proses menyimpan data ke database
    function store()
    {
        // produk ini sama dengan model
        $produk = new produk;
        // // kiri= nama (database), kanan= nama(codingan view)
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->stok = request('stok');

        $produk->save();
        // ->with('success',) ini merupakan alert
        return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    // menampilkan satu data/detail data
    function show(produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.show', $data);
    }
    // menampilkan form edit/update
    function edit(produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.edit', $data);
    }
    //proses mengupdate
    function update(produk $produk)
    {
        // // kiri= nama (database), kanan= nama(codingan view)
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');

        $produk->save();

        return redirect('admin/produk')->with('warning', 'Data Berhasil Diubah');
    }
    // proses menghapus
    function destroy(produk $produk)
    {
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
    }
}
