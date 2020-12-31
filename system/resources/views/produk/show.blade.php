@extends('template.section-admin.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h3>{{$produk->nama}}</h3>
                    <hr>
                    <p>
                        {{$produk->harga}} |
                        Warna: {{($produk->color)}} |
                        Size: {{($produk->size)}}|
                        Stok: {{($produk->stok)}} <br>
                        Berat: {{($produk->berat)}} gr
                        <!-- Tanggal Produksi : {{$produk->tanggal_produksi}} -->
                        Tanggal Produksi : {{$produk->created_at->diffForHumans()}} <!-- hubungannya sama model produk yg bagian casts -->

                        <br><br>
                        <!-- $produk = merujuk pada model produk, ->seller = merujuk pada function yg ada pada mode produk -->
                        Seller: {{($produk->seller->nama)}} <!-- hubungan nya dengan model produk -->
                    </p>
                    <br>
                    <p>
                        <!-- <img src="{{url('public')}}/$produk->foto" alt=""> -->
                        <img src="{{url('public', $produk->foto )}}" alt="">
                    </p>
                    <br>
                    <p>
                        {!! nl2br($produk->deskripsi) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection