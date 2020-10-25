@extends('template.section-admin.template')

@section('content')
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

<!-- diagram -->
<div class="col-md-6 chart_agile_left">
    <div class="chart_agile_top">
        <div class="chart_agile_bottom">
            <div id="graph1"></div>
            <script>
                var nReloads = 0;

                function data(offset) {
                    var ret = [];
                    for (var x = 0; x <= 360; x += 10) {
                        var v = (offset + x) % 360;
                        ret.push({
                            x: x,
                            y: Math.sin(Math.PI * v / 180).toFixed(4),
                            z: Math.cos(Math.PI * v / 180).toFixed(4)
                        });
                    }
                    return ret;
                }
                var graph = Morris.Line({
                    element: 'graph1',
                    data: data(0),
                    xkey: 'x',
                    ykeys: ['y', 'z'],
                    labels: ['sin()', 'cos()'],
                    parseTime: false,
                    ymin: -1.0,
                    ymax: 1.0,
                    hideHover: true
                });

                function update() {
                    nReloads++;
                    graph.setData(data(5 * nReloads));
                    $('#reloadStatus').text(nReloads + ' reloads');
                }
                setInterval(update, 100);
            </script>

        </div>
    </div>
</div>
<!-- akhir diagram -->

<!-- kalender -->
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
@endsection