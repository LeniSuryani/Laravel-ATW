@extends('template.section-admin.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                    Edit Data User
                </div>
                <div class="card-body">
                    <!-- mengarah ke routes/web -->
                    <form action="{{url('admin/user', $user->id)}}" method="post">
                        <!-- syntac keamanan dari laravel-->
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" value="{{$user->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" name="email" id="" class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">No-Handphone</label>
                            <input type="text" name="no_hp" id="" class="form-control" value="{{$user->detail->no_hp}}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Username</label>
                                    <input type="text" name="username" id="" class="form-control" value="{{$user->username}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" name="password" id="" class="form-control" value="">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-dark float-right"><i class="fa fa-save mr-2"></i>Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection