<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="index.html" class="logo">
            LENSTORE
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <h4 class="text-uppercase" style="color:floralwhite;  text-indent: 30px;  letter-spacing: 4px; word-spacing: 4px; font-weight:300; margin-top:4px; ">
                SELAMAT DATANG
                @if(Auth::check())
                {{request()->user()->nama}}
                @elseif(Auth::guard('pembeli')->check())
                {{Auth::guard('pembeli')->user()->nama}}
                @elseif(Auth::guard('penjual')->check())
                {{Auth::guard('penjual')->user()->nama}}
                @else
                silahkan login
                @endif
            </h4>
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="{{url('public')}}/assets/images/bunga.jpg">
                    <span class="username text-uppercase">

                        @if(Auth::check())
                        {{request()->user()->nama}}
                        @elseif(Auth::guard('pembeli')->check())
                        {{Auth::guard('pembeli')->user()->nama}}
                        @elseif(Auth::guard('penjual')->check())
                        {{Auth::guard('penjual')->user()->nama}}
                        @else
                        silahkan login
                        @endif
                    </span>
                    <!-- <b class="caret"></b> -->
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                    <li><a href="{{url('setting')}}"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="{{url('logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
</header>