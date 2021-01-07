<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{url('public')}}/assets_admin/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{url('public')}}/assets_admin/css/style.css" rel='stylesheet' type='text/css' />
    <link href="{{url('public')}}/assets_admin/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{url('public')}}/assets_admin/css/font.css" type="text/css" />
    <link href="{{url('public')}}/assets_admin/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{url('public')}}/assets_admin/js/jquery2.0.3.min.js"></script>
</head>

<body>
    <div class="log-w3" style="margin-top: -15px;">
        <div class="w3layouts-main">
            <h2>Register</h2>
            @include('template.utils.notif')
            <div class="card-body">
                <!-- mengarah ke routes/web -->
                <form action="{{url('register')}}" method="post">
                    <!-- syntac keamanan dari laravel-->
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" name="nama" id="" class="form-control ggg">
                    </div>
                    <!-- <div class="form-group ">
                        <label for="" class="control-label">Sebagai</label>
                        <select name="sebagai" class="form-control mt-3" style="padding: 15px; width:100%; background: none; border-color :white; color: white;">
                            <option value="1">PENJUAL</option>
                            <option value="2">PEMBELI</option>
                        </select>
                    </div> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="text" name="username" id="" class="form-control ggg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">No-Handphone</label>
                                <input type="text" name="no_hp" id="" class="form-control ggg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="" name="email" id="" class="form-control ggg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="" name="password" id="" class="form-control ggg">
                            </div>
                        </div>

                    </div>

            </div>
            <div class="clearfix"></div>

            <input style="border-radius: 20px;" type="submit" value="SIGN UP" name="SIGN UP">

            <div style="display: flex; margin-top: 15px; justify-content:center;">
                <a class="btn btn-outline-dark" href="{{url('template')}}"> KEMBALI</a>
                <p style="margin-top: 5px;">|</p>
                <a class="btn btn-outline-dark" href="{{url('login')}}"> LOGIN</a>
            </div>
            </form>
        </div>
    </div>
    <script src="{{url('public')}}/assets_admin/js/bootstrap.js"></script>
    <script src="{{url('public')}}/assets_admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{url('public')}}/assets_admin/js/scripts.js"></script>
    <script src="{{url('public')}}/assets_adminjs/jquery.slimscroll.js"></script>
    <script src="{{url('public')}}/assets_adminjs/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{url('public')}}/assets_adminjs/jquery.scrollTo.js"></script>
</body>

</html>