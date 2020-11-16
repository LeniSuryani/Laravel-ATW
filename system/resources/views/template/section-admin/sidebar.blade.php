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
                    <!-- tulisan produk di checkRouteActive harus sama dengan yg di url -->
                    <a href="{{url('admin/produk')}}" class="{{checkRouteActive('admin/produk')}}">
                        <i class="fas fa-tshirt"></i>
                        <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/kategori')}}" class="{{checkRouteActive('admin/kategori')}}">
                        <i class="fab fa-delicious"></i>
                        <span>Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/promo')}}" class="{{checkRouteActive('admin/promo')}}">
                        <i class="fas fa-tag"></i>
                        <span>Diskon</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/user')}}" class="{{checkRouteActive('admin/user')}}">
                        <i class="fas fa-user"></i>
                        <span>User</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>