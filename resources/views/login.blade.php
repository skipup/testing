
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Angle - Bootstrap Admin Template</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{asset('web/vendor/font-awesome/css/font-awesome.css')}}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{asset('web/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('web/css/bootstrap.css')}}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('web/css/app.css')}}" id="maincss">
</head>

<body>

<div class="wrapper">
    <div class="block-center mt-4 wd-xl">
        <!-- START card-->
        <div class="card card-flat">
            <div class="card-header  bg-dark">
                <h3 class="text-center text-white">SIGN IN TO CONTINUE</h3>
            </div>
            <div class="card-body">
                <form class="mb-3" id="loginForm" action="{{url('adminn/loginn')}}" method="post">
                    @csrf
                    @if(Session::has('error'))
                        <p class="alert alert-danger">{{Session::get('error')}}</p>
                        @endif
                    <p></p>
                    <div class="form-group">
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0" name="email" id="exampleInputEmail1" type="email" placeholder="Enter email" autocomplete="off" required>
                            <div class="input-group-append">
                                <span class="input-group-text fa fa-envelope text-muted bg-transparent border-left-0"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group with-focus">
                            <input class="form-control border-right-0" name="password" id="exampleInputPassword1" type="password" placeholder="Password" required>
                            <div class="input-group-append">
                                <span class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-block btn-primary mt-3" type="submit">Login</button>
                </form>
                </div>
        </div>
    </div>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="{{asset('web/vendor/modernizr/modernizr.custom.js')}}"></script>
<!-- JQUERY-->
<script src="{{asset('web/vendor/jquery/dist/jquery.js')}}"></script>
<!-- BOOTSTRAP-->
<script src="{{asset('web/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- STORAGE API-->
<script src="{{asset('web/vendor/js-storage/js.storage.js')}}"></script>
<!-- PARSLEY-->
<script src="{{asset('web/vendor/parsleyjs/dist/parsley.js')}}"></script>
<!-- =============== APP SCRIPTS ===============-->
<script src="{{asset('web/js/app.js')}}"></script>
</body>
</html>