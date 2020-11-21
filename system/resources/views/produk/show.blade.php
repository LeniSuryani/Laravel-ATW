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
                        Harga: Rp.{{number_format($produk->harga)}} <br>
                        Warna: {{($produk->color)}} <br>
                        Size: {{($produk->size)}} <br>
                        Stok: {{($produk->stok)}} <br>
                        Berat: {{($produk->berat)}} gr

                        <br><br>
                        <!-- $produk = merujuk pada model produk, ->seller = merujuk pada function yg ada pada mode produk -->
                        Seller: {{($produk->seller->nama)}} <!-- hubungan nya dengan model produk -->
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