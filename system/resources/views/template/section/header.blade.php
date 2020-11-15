<!-- untuk membuat link sidebar/ link navbar nya bisa dinamis -->
@php

function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active';
}
@endphp


<div class="top-header-content">
    <header class="tophny-header">
        <div class="container-fluid">
            <div class="top-right-strip row">
                <!--/left-->
                <div class="top-hny-left-content col-lg-6 pl-lg-0">
                    <h6>Diskon dari 30% - 50% diberbagai koleksi</h6>
                </div>
                <!--//left-->
                <!--/right-->

                <!--/register-->
                <ul class="top-hnt-right-content col-lg-6">

                    <li class="button-log usernhy">
                        <a class="btn-open" href="#">
                            <span class="fa fa-user" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="transmitvcart galssescart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <a href="{{url('/template.registrasi')}}" name="submit" value="" style="font-weight: lighter; font-size:small;  background: rgb(248, 161, 0); padding:8px; border-radius:10px">
                                Register
                            </a>

                        </form>
                    </li>
                </ul>
                <!--//akhir register-->
                <!--//login-->
                <div class="overlay-login text-left">
                    <button type="button" class="overlay-close1">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <div class="wrap">
                        <h5 class="text-center mb-4">LOGIN SEBAGAI ADMIN </h5>
                        <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                            <!--/login-form-->
                            <form action="#" method="post">
                                <div class="form-group">
                                    <p class="login-texthny mb-2">Email </p>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                    <small id="emailHelp" class="form-text text-muted"> Data anda aman bersama kami </small>

                                </div>
                                <div class="form-group">
                                    <p class="login-texthny mb-2">Password</p>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                                </div>
                                <div class="form-check mb-2">
                                    <div class="userhny-check">
                                        <label class="check-remember container">
                                            <input type="checkbox" class="form-check"> <span class="checkmark"></span>
                                            <p class="privacy-policy">Remember me</p>
                                        </label>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <a href="{{url('/template.admin')}}" class="submit-login-ku btn mb-4">Sign In</a>

                            </form>
                            <!--//login-form-->
                        </div>
                        <!---->
                    </div>
                </div>
                <!-- akhir login -->


            </div>
        </div>
        <!--/nav-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid serarc-fluid">
                <a class="navbar-brand" href="index.html">
                    LEN<span class="lohny">S</span>tore</a>
                <!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
                <!--/search-right-->
                <div class="search-right">

                    <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                        <span class="search-text">Cari disini</span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">

                            <form action="#" method="post" class="search-box">
                                <input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
                                <button type="submit" class="btn">Search</button>
                            </form>

                        </div>
                        <a class="close" href="#">×</a>
                    </div>
                    <!-- /search popup -->
                </div>
                <!--//search-right-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa fa-bars"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{checkRouteActive('/template')}}">
                            <a class="nav-link" href="{{ url('/template') }}" class="{{checkRouteActive('template')}}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($list_kategori as $kategori)
                                <a class="dropdown-item" href="#">{{$kategori->nama}}</a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item {{checkRouteActive('/template.product')}}">
                            <a class="nav-link" href="{{ url('/userproduk') }}" class="{{checkRouteActive('userproduk')}}">
                                Product
                            </a>
                        </li>
                        <li class="nav-item {{checkRouteActive('template.discount')}}">
                            <a class="nav-link" href="{{ url('/template.discount') }}" class="{{checkRouteActive('template.discount')}}">
                                Discount
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!--//nav-->
    </header>
</div>