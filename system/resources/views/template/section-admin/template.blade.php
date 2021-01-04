@include('template.section-admin.head')

<body>
    <section id="container">
        <!--header start-->
        @include('template.section-admin.header')
        <!--header end-->
        <!--sidebar start-->
        @include('template.section-admin.sidebar')
        <!--sidebar end-->

        <!--main content start-->

        <section id="main-content">
            <section class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @include('template.utils.notif')
                        </div>
                    </div>
                </div>
                @yield('content')
            </section>
            <!-- footer -->
            @include('template.section-admin.footer')
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <!-- foot -->
    @include('template.section-admin.foot')


    @stack('script')
</body>

</html>