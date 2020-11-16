@extends('template.section-admin.template')

@section('content')
<section class="w3l-ecommerce-main">
    <!-- /products-->
    <div class="ecom-contenthny ">
        <div class="container py-lg-1">
            <h3 class="hny-title mb-0 text-center"><span style="color:purple;">Kategori</span> <span style="color: white;">yang dimemiliki</span></h3>
            <p class="text-center my-4">
                <a href="{{url('admin/kategori/create')}}" class="btn btn-dark"> <i class="fa fa-plus mr-2"></i> Tambah Data Kategori</a>
            </p>
            <!-- /row-->
            <div class="row mt-lg-1 d-flex flex-wrap justify-content-center">
                @foreach($list_kategori as $kategori)
                <div class="col-lg-3 col-6 product-incfhny mt-4 center mb-5">
                    <div class="product-grid2 text-center">

                        <h3 class="title" style="color: white; font-weight:bolder">{{$kategori->nama}}</h3>

                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/grid6.jpg">
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="{{url('admin/kategori', $kategori->id)}}" class="btn btn-dark"> <i class="fa fa-info"></i></a> </a>
                            <a href="{{url('admin/kategori', $kategori->id)}}/edit" class="btn btn-warning"> <i class="fa fa-pencil"></i></a> </a>
                            @include('template.utils.delete', ['url' => url('admin/kategori', $kategori->id)])
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection