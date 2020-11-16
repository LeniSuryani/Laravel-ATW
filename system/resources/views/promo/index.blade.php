@extends('template.section-admin.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Data Diskon dan Promo
                    <a href="{{url('admin/promo/create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus mr-2"></i> Tambah Data</a>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>NO</th>
                            <th>Aksi</th>
                            <th>Nama Promo</th>
                            <th>Diskon</th>
                        </thead>
                        <tbody>
                            @foreach($list_promo as $promo)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="d-flex nowrap ">
                                    <a href="{{url('admin/promo', $promo->id)}}" class="btn btn-dark"> <i class="fa fa-info"></i></a> </a>
                                    <a href="{{url('admin/promo', $promo->id)}}/edit" class="btn btn-warning"> <i class="fa fa-pencil"></i></a> </a>
                                    @include('template.utils.delete', ['url' => url('admin/promo', $promo->id)])
                                </td>
                                <td>{{$promo->nama}}</td>
                                <td>{{$promo->diskon}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection