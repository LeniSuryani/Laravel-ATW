@include('template.section.head')

<body>

    <!--w3l-banner-slider-main-->
    <section class="w3l-banner-slider-main inner-pagehny">
        <div class="breadcrumb-infhny">

            <div class="top-header-content">
                @include('template/section.header')
                <div class="breadcrumb-contentnhy">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <h2 class="hny-title text-center"><span class="lohny">DISCOUNT</span> HANYA MINGGU INI <br> <span class="lohny">30% - 50%</span> </h2>

                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <!-- //w3l-banner-slider-main -->

    <!-- diskon cowo -->
    <section class="w3l-content-w-photo-6">
        <!-- /specification-6-->
        <div class="content-photo-6-mian py-5">
            <div class="container py-lg-5">
                <div class="align-photo-6-inf-cols row">

                    <div class="photo-6-inf-right col-lg-6">
                        <h3 class="hny-title text-left">Jas Pria disemua brand <span>diskon 30% </span></h3>
                        <p> Berlaku dalam satu minggu terhitung pada tanggal 24 oktober 2020</p>
                        <a href="#" class="read-more btn">
                            Belanja Sekarang
                        </a>
                    </div>
                    <div class="photo-6-inf-left col-lg-6">
                        <img src="{{url('public')}}/assets/images/1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video -->
    <section class="w3l-video-6">
        <!-- /video-6-->
        <div class="video-66-info">
            <div class="container-fluid">
                <div class="video-grids-info row">
                    <div class="video-gd-right col-lg-8">
                        <div class="video-inner text-center">
                            <!--popup-->
                            <a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
                                <span class="fa fa-play" aria-hidden="true"></span>
                            </a>
                            <div id="small-dialog" class="mfp-hide">
                                <div class="search-top notify-popup">
                                    <iframe src="https://player.vimeo.com/video/246139491" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!--//popup-->
                        </div>
                    </div>
                    <div class="video-gd-left col-lg-4 p-lg-5 p-4">
                        <div class="p-xl-4 p-0 video-wrap">
                            <h3 class="hny-title text-left">Tas Wanita dari semua brand <span>diskon 30% </span>
                            </h3>
                            <p> Berlaku dalam satu minggu terhitung pada tanggal 25 oktober 2020</p>
                            <a href="#" class="read-more btn">
                                Belanja Sekarang
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- diskon cewe -->
    <section class="w3l-content-w-photo-6">
        <!-- /specification-6-->
        <div class="content-photo-6-mian py-5">
            <div class="container py-lg-5">
                <div class="align-photo-6-inf-cols row">
                    <div class="photo-6-inf-left col-lg-6">
                        <img src="{{url('public')}}/assets/images/bg3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="photo-6-inf-right col-lg-6">
                        <h3 class="hny-title text-left">tas dan sepatu wanita <span>diskon 50%</span></h3>
                        <p> Berlaku dalam satu minggu terhitung pada tanggal 25 oktober 2020</p>
                        <a href="#" class="read-more btn">
                            Belanja Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-content-w-photo-6">
        <!-- /specification-6-->
        <div class="content-photo-6-mian py-5">
            <div class="container py-lg-5">
                <div class="align-photo-6-inf-cols row">
                    <div class="photo-6-inf-left col-lg-6">
                        <img src="{{url('public')}}/assets/images2/b1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="photo-6-inf-right col-lg-6">
                        <h3 class="hny-title text-left"> T-Shirt Wanita<span> diskon 40%</span></h3>
                        <p> Berlaku dalam satu minggu terhitung pada tanggal 25 oktober 2020</p>
                        <a href="#" class="read-more btn">
                            Belanja Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    @include('/template.section.footer')


</body>
@include('template/section.foot')