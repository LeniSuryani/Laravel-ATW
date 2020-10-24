@include('template.section.head')

<body>

    <!--w3l-banner-slider-main-->
    <section class="w3l-banner-slider-main inner-pagehny">
        <div class="breadcrumb-infhny">

            <div class="top-header-content">
                @include('template.section.header')
                <div class="breadcrumb-contentnhy">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <h2 class="hny-title text-center">KOLEKSI <span class="lohny">PRODUCT</span> PILIHAN KAMI </h2>
                            <p class="text-center" style="color: azure;">
                                Fashion Wanita | Fashion Pria | jewellery | Sendal Sepatu
                            </p>
                            <ol class="breadcrumb mb-0">
                                <li><a href="{{url('./template')}}">Home</a>
                                    <span class="fa fa-angle-double-right"></span></li>
                                <li><a href="{{url('./template.product')}}">Product</a>
                                    <span class="fa fa-angle-double-right"></span></li>
                                <li>Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <!-- //w3l-banner-slider-main -->

    <section class="w3l-content-w-photo-6">
        <!-- /specification-6-->
        <div class="content-photo-6-mian py-5">
            <div class="container py-lg-5">
                <div class="align-photo-6-inf-cols row">


                    <div class="photo-6-inf-left col-lg-6">

                        <!-- carousel -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-innerstyle=">
                                <div class="carousel-item active">
                                    <img src="{{url('public')}}/assets/images/cart1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('public')}}/assets/images/cart2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('public')}}/assets/images/cart3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- akhir carousel -->
                    </div>
                    <div class="photo-6-inf-right col-lg-6">
                        <h3 class="hny-title text-left">17seven Original <br> <span class="text-strong">Crewneck 0013-BASIC BLK</span></h3>
                        <ul style="font-size: large; margin-left: 20px;">
                            <li>Lengan panjang</li>
                            <li>Regular Fit</li>
                            <li>Bahan Fleace</li>
                            <li>Bahan Sejuk</li>
                            <li>Warna Yellow</li>
                            <li>Polos bergaris</li>
                        </ul>
                        <br>
                        <br>
                        <div class="product-content ">
                            <h3 class="title "><a href="#">Yellow T-Shirt</a></h3>
                            <span class="price "><del>$575.00</del>$299.99</span>
                        </div>
                        <a href="#" class="read-more btn">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- bulat2 -->
    <section class="w3l-grids-hny-2">
        <!-- /content-6-section -->
        <div class="grids-hny-2-mian py-5">
            <div class="container py-lg-5">

                <h3 class="hny-title mb-0 text-center"><span>PRODUCT</span> LAINNYA</h3>
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
                        <h4><a href="#URL">Hand Bags</a></h4>

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
                                Watches</a></h4>


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
                        <h4><a href="#URL">Shoes</a></h4>


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
                        <h4><a href="#URL">Suits</a></h4>

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
                                Accessories</a></h4>


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
                                Fragrances</a></h4>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    @include('template.section.footer')


</body>
@include('template.section.foot')