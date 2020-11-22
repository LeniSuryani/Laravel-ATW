<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
// use App\Models\Produk;

class KategoriController extends Controller
{

    // menampilkan seluruh data
    function index()
    {

        $data['list_kategori'] = kategori::all();
        return view('kategori.index', $data); //mengarahkan ke folder view yg mana si file nya
    }
    // menampilkan form untuk input data baru
    function create()
    {
        return view('kategori.create');
    }
    // proses menyimpan data ke database
    function store()
    {
        // produk ini sama dengan model
        $kategori = new kategori;
        // // kiri= nama (database), kanan= nama(codingan view)
        $kategori->nama = request('nama');
        $kategori->pemasok = request('pemasok');
        $kategori->deskripsi = request('deskripsi');

        $kategori->save();
        // ->with('success',) ini merupakan alert
        return redirect('admin/kategori')->with('success', 'Data Berhasil Ditambahkan');
    }
    // menampilkan satu data/detail data
    function show(kategori $kategori)
    {
        // show yg lama
        $data['kategori'] = $kategori;
        return view('kategori.show', $data);
    }
    // menampilkan form edit/update
    function edit(kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('kategori.edit', $data);
    }
    //proses mengupdate
    function update(kategori $kategori)
    {
        // // kiri= nama (database), kanan= nama(codingan view)
        $kategori->nama = request('nama');
        $kategori->pemasok = request('pemasok');
        $kategori->deskripsi = request('deskripsi');

        $kategori->save();

        return redirect('admin/kategori')->with('warning', 'Data Berhasil Diubah');
    }
    // proses menghapus
    function destroy(kategori $kategori)
    {
        $kategori->delete();
        return redirect('admin/kategori')->with('danger', 'Data Berhasil Dihapus');
    }
}
