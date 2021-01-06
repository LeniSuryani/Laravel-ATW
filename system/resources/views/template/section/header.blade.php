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

                    <!-- <li class="button-log usernhy">
                        <a class="btn-open" href="#login-ku">
                            <span class="fa fa-user" aria-hidden="true"></span>
                        </a>
                    </li> -->
                    <li class="transmitvcart galssescart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <a href="{{url('login')}}" class="btn btn-outline-warning btn-sm" name="submit">
                                LOGIN
                            </a>
                        </form>
                    </li>
                    <li class="transmitvcart galssescart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <a href="{{url('register')}}" class="btn btn-warning btn-sm" name="submit" value="">
                                DAFTAR
                            </a>

                        </form>
                    </li>
                </ul>
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
                        <li class="nav-item {{checkRouteActive('template')}}">
                            <a class="nav-link" href="{{ url('/template') }}">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                KATEGORI
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($list_kategori as $kategori)
                                <a class="dropdown-item" href="#">{{$kategori->nama}}</a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item {{checkRouteActive('userproduk')}}">
                            <a class="nav-link" href="{{ url('/userproduk') }}">
                                PRODUK
                            </a>
                        </li>
                        <li class="nav-item {{checkRouteActive('keranjang')}}">
                            <a class="nav-link" href="{{ url('/keranjang') }}">
                                <i class="fas fa-bucket"></i> KERANJANG
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!--//nav-->
    </header>
</div>