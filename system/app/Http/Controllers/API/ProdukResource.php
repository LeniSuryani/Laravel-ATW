<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $list_produk = Produk::all();
        // return $list_produk->toJson();

        return Produk::all();
    }


    public function store()
    {
        if (request('nama') && request('harga') && request('size') && request('color') && request('berat') && request('deskripsi')) {

            $produk = new produk;
            $produk->nama = request('nama');
            $produk->harga = request('harga');
            $produk->size = request('size');
            $produk->color = request('color');
            $produk->berat = request('berat');
            $produk->deskripsi = request('deskripsi');
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "field ada yang kosong"
            ]);
        }
    }


    public function show($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }


    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->nama = request('nama') ?? $produk->nama;
            $produk->harga = request('harga') ?? $produk->harga;
            $produk->size = request('size') ?? $produk->size;
            $produk->color = request('color') ?? $produk->color;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }


    public function destroy($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return collect([
                'status' => 200,
                'data' => 'Produk berhasil dihapus'
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }
}
