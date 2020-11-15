@extends('template.section-admin.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                    Edit Data Produk
                </div>
                <div class="card-body">
                    <!-- mengarah ke routes/web -->
                    <form action="{{url('kategori', $kategori->id)}}" method="post">
                        <!-- syntac keamanan dari laravel-->
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" value="{{$kategori->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Supplier</label>
                            <input type="text" name="pemasok" id="" class="form-control" value="{{$kategori->pemasok}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="" cols="10" rows="2">
                            {{$kategori->deskripsi}}
                            </textarea>
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save mr-2"></i>Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection