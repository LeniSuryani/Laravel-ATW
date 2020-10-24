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
                <h1>produk</h1>
            </section>
            <!-- footer -->
            @include('template.section-admin.footer')
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <!-- foot -->
    @include('template.section-admin.foot')
</body>

</html>