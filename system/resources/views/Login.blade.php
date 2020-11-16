<!DOCTYPE html>

<head>
    <title>Login</title>
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
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Login</h2>
            <div class="panel-body">
                @include('template.utils.notif')
                <form action="{{url('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" for="email">Email</label>
                        <input class="ggg" type="text" placeholder="Email" title="Please enter you email" required="" value="" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input class="ggg" type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                    </div>


                    <input style="border-radius: 20px;" type="submit" value="submit" name="login">



                    <div style="display: flex; margin-top: 15px; justify-content:center">
                        <a class="btn btn-outline-dark" href="{{url('template')}}"> KEMBALI</a>
                        <p style="margin-top: 5px;">|</p>
                        <a class="btn btn-outline-dark" href="{{url('register')}}"> DAFTAR</a>
                    </div>

                </form>
            </div>

            <!-- <input style="border-radius: 20px;" type="submit" value="submit" name="register"> -->

            <!-- <p><a href="{{url('/template')}}">Kembali</a></p> -->
        </div>
    </div>
    <script src="{{url('public')}}/assets_admin/js/bootstrap.js"></script>
    <script src="{{url('public')}}/assets_admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{url('public')}}/assets_admin/js/scripts.js"></script>
    <script src="{{url('public')}}/assets_adminjs/jquery.slimscroll.js"></script>
    <script src="{{url('public')}}/assets_adminjs/jquery.nicescroll.js"></script>
    <script src="{{url('public')}}/assets_adminjs/jquery.scrollTo.js"></script>
</body>

</html>