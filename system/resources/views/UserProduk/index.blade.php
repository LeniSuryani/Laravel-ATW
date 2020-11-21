@include('template.section.head')

<body>

    <!--w3l-banner-slider-main-->
    <section class="w3l-banner-slider-main inner-pagehny">
        <div class="breadcrumb-infhny">
            <div class="top-header-content">
                <!-- header -->
                @include('/template.section.header')
                <!-- akhir header -->

                <div class="breadcrumb-contentnhy">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <h2 class="hny-title text-center">KOLEKSI <span class="lohny">PRODUCT</span> PILIHAN KAMI </h2>
                            <p class="text-center" style="color: azure;">
                                Fashion Wanita | Fashion Pria | jewellery | Sendal Sepatu
                            </p>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <!-- //w3l-banner-slider-main -->


    <!-- product wanita -->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">

                <div class="row" style="display: flex; flex-wrap:nowrap">
                    <!-- produk-->
                    <div class="col-lg-9 ecom-products-grids row ">
                        @foreach($list_produk as $produk)
                        <div class="col-lg-3 col-6 product-incfhny ">
                            <div class="product-grid2 transmitv">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-1.jpg">
                                        <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-11.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="{{url('userproduk', $produk->id)}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Women Maroon Top">
                                            <input type="hidden" name="amount" value="899.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">

                                    <h3 class="title"><a href="#">{{$produk->nama}} </a></h3>
                                    <span class="price"><del>$899.99 </del>{{$produk->harga}}</span>

                                </div>

                            </div>

                        </div>
                        @endforeach
                    </div>
                    <!-- akhir produk-->
                    <!-- filter -->
                    <div class="filter col-lg-3">
                        <form action="{{url('userproduk/filter')}}" method="post">
                            @csrf
                            <p>Filter Produk</p>
                            <hr>
                            <div class="nama">
                                <h6>Nama</h6>
                                <input type="text" class="form-control form-control-sm" name="nama" value="{{$nama ?? ""}}" required>
                            </div>
                            <hr>
                            <div class="harga">
                                <h6>price range</h6>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Min</label>
                                        <input type="text" class="form-control form-control-sm" name="harga_min" value="{{$harga_min ?? ""}}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault02">Max</label>
                                        <input type="text" class="form-control form-control-sm" name="harga_max" value="{{$harga_max ?? ""}}" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="ukuran">
                                <h6>size</h6>
                                <input type="text" class="form-control form-control-sm" name="size" value="{{$size ?? ""}}" required>
                            </div>
                            <hr>
                            <div class="warna">
                                <h6>Color</h6>
                                <input type="text" class="form-control form-control-sm" name="color" value="{{$color ?? ""}}" required>
                            </div>

                            <button class="btn-sm btn btn-dark float-right mt-4"> <i class="fa fa-search"></i> Cari Data</button>
                        </form>
                    </div>
                    <!-- akhir filter -->
                </div>
            </div>
        </div>
    </section>
    <!-- //products-->


    <!-- bulat2 -->
    <section class="w3l-grids-hny-2">
        <!-- /content-6-section -->
        <div class="grids-hny-2-mian py-5">
            <div class="container py-lg-5">

                <h3 class="hny-title mb-0 text-center"><span>PRODUCT</span> lainnya</h3>
                <p class="mb-4 text-center">Handpicked Favourites just for you</p>
                <div class="welcome-grids row mt-5">
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                        <div class="boxhny13">
                            <a href="#URL">
                                <img src="{{url('public')}}/assets/images/grid1.jpg" class="img-fluid" alt="" />
                                <div class="boxhny-content">
                                    <h3 class="title">Product
                                </div>
                            </a>
                        </div>
                        <h4><a href="#URL">Tas</a></h4>

                    </div>

                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                        <div class="boxhny13">
                            <a href="#URL">
                                <img src="{{url('public')}}/assets/images/grid3.jpg" class="img-fluid" alt="" />
                                <div class="boxhny-content">
                                    <h3 class="title">Product</h3>
                                </div>
                            </a>
                        </div>
                        <h4><a href="#URL">
                                Jam Tangan</a></h4>


                    </div>
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                        <div class="boxhny13">
                            <a href="#URL">
                                <img src="{{url('public')}}/assets/images/grid2.jpg" class="img-fluid" alt="" />
                                <div class="boxhny-content">
                                    <h3 class="title">Product</h3>
                                </div>
                            </a>
                        </div>
                        <h4><a href="#URL">Sepatu</a></h4>


                    </div>
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                        <div class="boxhny13">
                            <a href="#URL">
                                <img src="{{url('public')}}/assets/images/grid4.jpg" class="img-fluid" alt="" />
                                <div class="boxhny-content">
                                    <h3 class="title">Product</h3>
                                </div>
                            </a>
                        </div>
                        <h4><a href="#URL">Jas</a></h4>

                    </div>
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                        <div class="boxhny13">
                            <a href="#URL">
                                <img src="{{url('public')}}/assets/images/grid5.jpg" class="img-fluid" alt="" />
                                <div class="boxhny-content">
                                    <h3 class="title">Product</h3>
                                </div>
                            </a>
                        </div>
                        <h4><a href="#URL">
                                Aksesoris</a></h4>


                    </div>
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                        <div class="boxhny13">
                            <a href="#URL">
                                <img src="{{url('public')}}/assets/images/grid6.jpg" class="img-fluid" alt="" />
                                <div class="boxhny-content">
                                    <h3 class="title">Product</h3>
                                </div>
                            </a>
                        </div>
                        <h4><a href="#URL">
                                Parfum</a></h4>


                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- footer -->
    @include('/template.section.footer')


</body>

@include('template/section.foot')