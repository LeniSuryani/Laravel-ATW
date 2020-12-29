@extends('template.section-admin.template')

@section('content')

<div class="container" style="margin-left: -15px">
    <div class="row">
        <div class="col-md-9 ">
            <div class="card">
                <div class="card-header">
                    Data Produk
                    <a href="{{url('admin/produk/create')}}" class="btn btn-dark btn-sm float-right"> <i class="fa fa-plus mr-2"></i> Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table display" id="table_id">
                        <thead>
                            <th>NO</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>stok</th>
                        </thead>
                        <tbody>

                            @foreach($list_produk as $produk)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="d-flex nowrap ">
                                    <a href="{{url('admin/produk', $produk->id)}}" class="btn btn-dark"> <i class="fa fa-info"></i></a> </a>
                                    <a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-warning"> <i class="fa fa-pencil"></i></a> </a>
                                    @include('template.utils.delete', ['url' => url('admin/produk', $produk->id)])
                                </td>
                                <td>{{$produk->nama}}</td>
                                <td>{{$produk->harga}}</td>
                                <td>{{$produk->stok}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=" card col-md-3 filter-admin">
            <div class="card-header">
                Filter Data
            </div>
            <div class="card-body">
                <div class="list d-flex flex-wrap">
                    <form action="{{url('admin/produk/filter')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Produk</label>
                            <input type="text" class="form-control form-control-sm" name="nama" value="{{$nama ?? ""}}">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Harga Min</label>
                                    <input type="text" class="form-control form-control-sm" name="harga_min" value="{{$harga_min ?? ""}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1">Harga Max</label>
                                    <input type="text" class="form-control form-control-sm" name="harga_max" value="{{$harga_max ?? ""}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stok Produk</label>
                            <input type="text" class="form-control form-control-sm" name="stok" value="{{$stok ?? ""}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Created_at</label>
                            <input type="text" class="form-control form-control-sm" name="created_at" value="{{$created_at ?? ""}}">
                        </div>

                        <button class="btn-sm btn btn-dark float-right"> <i class="fa fa-search"></i> Cari Data</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- </form> -->
    </div>
</div>

@endsection