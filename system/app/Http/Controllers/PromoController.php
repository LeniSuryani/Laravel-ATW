<?php

namespace App\Http\Controllers;

use App\Models\Promo;

class PromoController extends Controller
{

    // menampilkan seluruh data
    function index()
    {
        $data['list_promo'] = promo::all();
        return view('promo.index', $data); //mengarahkan ke folder view yg mana si file nya
    }
    // menampilkan form untuk input data baru
    function create()
    {
        return view('promo.create');
    }
    // proses menyimpan data ke database
    function store()
    {
        // produk ini sama dengan model
        $promo = new promo;
        // // kiri= nama (database), kanan= nama(codingan view)
        $promo->nama = request('nama');
        $promo->diskon = request('diskon');
        $promo->deskripsi = request('deskripsi');

        $promo->save();
        // ->with('success',) ini merupakan alert
        return redirect('admin/promo')->with('success', 'Data Berhasil Ditambahkan');
    }
    // menampilkan satu data/detail data
    function show(promo $promo)
    {
        $data['promo'] = $promo;
        return view('promo.show', $data);
    }
    // menampilkan form edit/update
    function edit(promo $promo)
    {
        $data['promo'] = $promo;
        return view('promo.edit', $data);
    }
    //proses mengupdate
    function update(promo $promo)
    {
        // // kiri= nama (database), kanan= nama(codingan view)
        $promo->nama = request('nama');
        $promo->diskon = request('diskon');
        $promo->deskripsi = request('deskripsi');

        $promo->save();
        return redirect('admin/promo')->with('warning', 'Data Berhasil Diubah');
    }
    // proses menghapus
    function destroy(promo $promo)
    {
        $promo->delete();
        return redirect('admin/promo')->with('danger', 'Data Berhasil Dihapus');
    }
}
