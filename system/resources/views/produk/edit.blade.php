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
                    <form action="{{url('admin/produk', $produk->id)}}" method="post">
                        <!-- syntac keamanan dari laravel-->
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" value="{{$produk->nama}}">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga</label>
                                    <input type="text" name="harga" id="" class="form-control" value="{{$produk->harga}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Size</label>
                                    <input type="text" name="size" id="" class="form-control" value="{{$produk->size}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Color</label>
                                    <input type="text" name="color" id="" class="form-control" value="{{$produk->color}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Berat</label>
                                    <input type="text" name="berat" id="" class="form-control" value="{{$produk->berat}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Stok</label>
                                    <input type="text" name="stok" id="" class="form-control" value="{{$produk->stok}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="" cols="10" rows="4">
                            {{$produk->deskripsi}}
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