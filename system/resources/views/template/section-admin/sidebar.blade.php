<!-- untuk membuat link sidebar/ link navbar nya bisa dinamis -->
@php

function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active';
}
@endphp

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{url('/template.admin')}}" class="{{checkRouteActive('template.admin')}}">
                        <i class="fa fa-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/template.admin.produk')}}" class="{{checkRouteActive('template.admin.produk')}}">
                        <i class="fas fa-tshirt"></i>
                        <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/template.admin.kategori')}}" class="{{checkRouteActive('template.admin.kategori')}}">
                        <i class="fab fa-delicious"></i>
                        <span>Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/template.admin.promo')}}" class="{{checkRouteActive('template.admin.promo')}}">
                        <i class="fas fa-tags"></i>
                        <span>Promo</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>