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
                    <h3>{{$kategori->nama}}</h3>
                    <hr>
                    <p>
                        Supplier: {{($kategori->pemasok)}}
                    </p>
                    <br>
                    <p>
                        {!! nl2br($kategori->deskripsi) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection