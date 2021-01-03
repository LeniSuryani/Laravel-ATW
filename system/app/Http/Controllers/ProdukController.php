<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\kategori;

class ProdukController extends Controller
{

    // menampilkan seluruh data
    function index()
    {
        // untuk menampilin data produk sesuai dengan admin nya masing2 tanpa relasi di model user
        // $id_user = request()->user()->id;
        // $data['list_produk'] = produk::where('id_user', $id_user)->get();

        // dengan relasi di model user
        $userr = request()->user(); //mengambil data id user dari autentikasi
        $data['list_produk'] = $userr->produk; //->produk ini harus sama dengan function yg ada di dlm model user
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
        // dd(request()->all());
        // produk ini sama dengan model
        $produk = new produk;
        // // kiri= nama (database), kanan= nama(codingan view)
        $produk->id_user =  request()->user()->id; //foreign key
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->size = request('size');
        $produk->color = request('color');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->stok = request('stok');
        $produk->save();

        $produk->handleUploadFoto();

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
        $produk->size = request('size');
        $produk->color = request('color');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('warning', 'Data Berhasil Diubah');
    }
    // proses menghapus
    function destroy(produk $produk)
    {
        $produk->handleDelete();
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
    }

    function filter()
    {
        // search nama yg mirip
        // $nama = request('nama');
        // $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        // $data['nama'] = $nama;
        // return view('produk.index', $data);

        // range harga
        // $data['harga_min'] = $harga_min = request('harga_min');
        // $data['harga_max'] = $harga_max = request('harga_max');
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        // return view('produk.index', $data);

        // untuk unlist pada satu stok (where)
        // $data['stok'] = $stok = request('stok');
        // $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        // return view('produk.index', $data);

        // untuk unlist pada banyak stok  (whereIn) contoh inputan(9,8)
        // $stok = explode(",", request('stok'));
        // $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
        // $data['stok'] = request('stok');
        // return view('produk.index', $data);

        // where date
        // $created_at = request('created_at');
        // $data['list_produk'] = Produk::whereDate('created_at', $created_at)->get();
        // $data['list_produk'] = Produk::whereYear('created_at', $created_at)->get();
        // $data['list_produk'] = Produk::whereMonth('created_at', $created_at)->whereYear('created_at', $created_at)->get();
        // $data['list_produk'] = Produk::whereTime('created_at', '14:53:17')->get();
        // $data['created_at'] = request('created_at');
        // return view('produk.index', $data);


        // filter where group
        $nama = request('nama');
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['stok'] = $stok = request('stok');
        $created_at = request('created_at');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->whereBetween('harga', [$harga_min, $harga_max])->where('stok', $stok)->whereYear('created_at', $created_at)->get();
        $data['created_at'] = request('created_at');

        return view('produk.index', $data);
    }
}
