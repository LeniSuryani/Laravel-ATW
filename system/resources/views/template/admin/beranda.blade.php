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
                <!-- card-->
                <div class="market-updates">
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-2">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-eye"> </i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Produk</h4>
                                <h3>13,500</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-1">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Kategori</h4>
                                <h3>1,250</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-3">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-usd"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Diskon</h4>
                                <h3>1,500</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-4">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Master Data</h4>
                                <h3>1,500</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- akhir card-->

                <div class="agil-info-calendar">
                    <!-- calendar -->
                    <div class="col-md-6 agile-calendar">
                        <div class="calendar-widget">
                            <div class="panel-heading ui-sortable-handle">
                                <span class="panel-icon">
                                    <i class="fa fa-calendar-o"></i>
                                </span>
                                <span class="panel-title">Kalender Kami</span>
                            </div>
                            <!-- grids -->
                            <div class="agile-calendar-grid">
                                <div class="page">

                                    <div class="w3l-calendar-left">
                                        <div class="calendar-heading">

                                        </div>
                                        <div class="monthly" id="mycalendar"></div>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //calendar -->
                    <div class="clearfix"> </div>
                </div>
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