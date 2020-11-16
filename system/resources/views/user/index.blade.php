@extends('template.section-admin.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Data Produk
                    <a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus mr-2"></i> Tambah Data</a>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>NO</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>

                        </thead>
                        <tbody>
                            @foreach($list_user as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="d-flex nowrap ">
                                    <a href="{{url('admin/user', $user->id)}}" class="btn btn-dark"> <i class="fa fa-info"></i></a> </a>
                                    <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"> <i class="fa fa-pencil"></i></a> </a>
                                    @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                                </td>
                                <td>{{$user->nama}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
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