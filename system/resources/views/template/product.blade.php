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
                            <ol class="breadcrumb mb-0">
                                <li><a href="{{ url('/template') }}">Home</a>
                                    <span class="fa fa-angle-double-right"></span></li>
                                <li class="active">Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <!-- //w3l-banner-slider-main -->

    <!-- product jewellery -->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="hny-title mb-0 text-center"><span>JEWELLERY</span> Collection</h3>
                <p class="text-center">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-5 mt-3">


                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/17.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/17.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
                                        <input type="hidden" name="amount" value="299.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Yellow T-Shirt</a></h3>
                                <span class="price"><del>$575.00</del>$299.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/19.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/19.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
                                <span class="price"><del>$775.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/18.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/18.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="White T-Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">White T-Shirt </a></h3>
                                <span class="price"><del>$675.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/kalung.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/kalung.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Blue Sweater">
                                        <input type="hidden" name="amount" value="499.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Blue Sweater</a></h3>
                                <span class="price"><del>$575.00</del>$499.99</span>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- //row-->
            </div>
        </div>
    </section>

    <!-- product pria -->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="hny-title mb-0 text-center">Fashion <span>Pria</span></h3>
                <p class="text-center">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-5 mt-3">


                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-5.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-55.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
                                        <input type="hidden" name="amount" value="299.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Yellow T-Shirt</a></h3>
                                <span class="price"><del>$575.00</del>$299.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-2.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-22.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
                                <span class="price"><del>$775.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-7.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-77.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="White T-Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">White T-Shirt </a></h3>
                                <span class="price"><del>$675.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-8.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-88.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Blue Sweater">
                                        <input type="hidden" name="amount" value="499.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Blue Sweater</a></h3>
                                <span class="price"><del>$575.00</del>$499.99</span>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- //row-->
            </div>
        </div>
    </section>

    <!-- product wanita -->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="hny-title mb-0 text-center"><span>Fashion</span> Wanita</h3>
                <p class="text-center">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-5 mt-3">
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2 transmitv">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-1.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-11.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

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
                                <h3 class="title"><a href="#">Women Maroon Top </a></h3>
                                <span class="price"><del>$975.00</del>$899.99</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-3.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-33.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Dark Blue Top">
                                        <input type="hidden" name="amount" value="799.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Dark Blue Top </a></h3>
                                <span class="price"><del>$875.00</del>$799.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-6.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-66.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Straight Kurta">
                                        <input type="hidden" name="amount" value="699.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Straight Kurta </a></h3>
                                <span class="price"><del>$775.00</del>$699.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-4.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-44.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Women Tunic">
                                        <input type="hidden" name="amount" value="399.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women Tunic </a></h3>
                                <span class="price"><del>$475.00</del>$399.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2 transmitv">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/33.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/33.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

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
                                <h3 class="title"><a href="#">Women Maroon Top </a></h3>
                                <span class="price"><del>$975.00</del>$899.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/41.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/41.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
                                <span class="price"><del>$775.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/42.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/42.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Dark Blue Top">
                                        <input type="hidden" name="amount" value="799.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Dark Blue Top </a></h3>
                                <span class="price"><del>$875.00</del>$799.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/51.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/51.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Women Tunic">
                                        <input type="hidden" name="amount" value="399.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women Tunic </a></h3>
                                <span class="price"><del>$475.00</del>$399.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/30.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/30.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
                                        <input type="hidden" name="amount" value="299.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Yellow T-Shirt</a></h3>
                                <span class="price"><del>$575.00</del>$299.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/27.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/27.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Straight Kurta">
                                        <input type="hidden" name="amount" value="699.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Straight Kurta </a></h3>
                                <span class="price"><del>$775.00</del>$699.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/37.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/37.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="White T-Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">White T-Shirt </a></h3>
                                <span class="price"><del>$675.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images/shop-8.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images/shop-88.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Blue Sweater">
                                        <input type="hidden" name="amount" value="499.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Blue Sweater</a></h3>
                                <span class="price"><del>$575.00</del>$499.99</span>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- //row-->
            </div>
        </div>
    </section>
    <!-- //products-->

    <!-- product sepatu -->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="hny-title mb-0 text-center"> <span>SENDAL</span> DAN <span>SEPATU</span></h3>
                <p class="text-center">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-5 mt-3">
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/c1.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/c1.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
                                        <input type="hidden" name="amount" value="299.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Yellow T-Shirt</a></h3>
                                <span class="price"><del>$575.00</del>$299.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/c2.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/c2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
                                <span class="price"><del>$775.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/c8.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/c8.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="White T-Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">White T-Shirt </a></h3>
                                <span class="price"><del>$675.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/c5.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/c5.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Blue Sweater">
                                        <input type="hidden" name="amount" value="499.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Blue Sweater</a></h3>
                                <span class="price"><del>$575.00</del>$499.99</span>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- //row-->
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-5 mt-3">
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/16.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/16.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
                                        <input type="hidden" name="amount" value="299.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Yellow T-Shirt</a></h3>
                                <span class="price"><del>$575.00</del>$299.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/14.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/14.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
                                <span class="price"><del>$775.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/c7.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/c7.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="White T-Shirt">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">White T-Shirt </a></h3>
                                <span class="price"><del>$675.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="{{url('public')}}/assets/images2/c6.jpg">
                                    <img class="pic-2 img-fluid" src="{{url('public')}}/assets/images2/c6.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="{{ url('/template.detail') }}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="transmitv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Blue Sweater">
                                        <input type="hidden" name="amount" value="499.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Blue Sweater</a></h3>
                                <span class="price"><del>$575.00</del>$499.99</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //row-->
            </div>
        </div>
    </section>

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