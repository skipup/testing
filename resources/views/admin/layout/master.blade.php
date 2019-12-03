<?php ini_set('max_execution_time', 0); ?>
<!DOCTYPE html>
<html lang="en">

<style>
    .fa{font-family: 'FontAwesome'!important;}
    @font-face {
        font-family: myanmar-font;
        src: url({{asset('web/font/pds.ttf')}});
    }
    html,body{font-family: myanmar-font!important;}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{asset('web/vendor/font-awesome/css/font-awesome.css')}}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{asset('web/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{asset('web/vendor/animate.css/animate.css')}}">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{asset('web/vendor/whirl/dist/whirl.css')}}">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('web/css/bootstrap.css')}}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{asset('web/css/app.css')}}" id="maincss">
    <style>
        .btn-success{
            background-color:#e59e1f!important;
            border: 0;
        }
    </style>
</head>

<body>

<div class="wrapper">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        <nav class="navbar topnavbar" style="background-color: #c7881d!important;background-image: ">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a class="navbar-brand" href="#/">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/logo.jpg')}}" style="width: 60px;border-radius: 40%" alt="App Logo">
                    </div>
                    <div class="brand-logo-collapsed">
                        <img class="img-fluid" src="{{asset('public/images/logo.jpg')}}" style="width:40px;" alt="App Logo">
                    </div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
                <li class="nav-item">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                        <em class="fa fa-navicon"></em>
                    </a>
                </li>

            </ul>
            <!-- END Left navbar-->
        </nav>
        <!-- END Top Navbar-->
    </header>
    @include('admin.layout.sidebar')
    <!-- Main section-->
    <section class="section-container">
        @yield('content')
    </section>
    <!-- Page footer-->
    <footer class="footer-container">
        <span>&copy; <?php echo date('Y'); ?> - လွှတ်တော်</span>
    </footer>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="{{asset('web/vendor/modernizr/modernizr.custom.js')}}"></script>
<!-- JQUERY-->
<script src="{{asset('web/vendor/jquery/dist/jquery.js')}}"></script>
<!-- BOOTSTRAP-->
<script src="{{asset('web/vendor/popper.js/dist/umd/popper.js')}}"></script>
<script src="{{asset('web/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- STORAGE API-->
<script src="{{asset('web/vendor/js-storage/js.storage.js')}}"></script>
<!-- JQUERY EASING-->
<script src="{{asset('web/vendor/jquery.easing/jquery.easing.js')}}"></script>
<!-- ANIMO-->
<script src="{{asset('web/vendor/animo/animo.js')}}"></script>
<!-- SCREENFULL-->
<script src="{{asset('web/vendor/screenfull/dist/screenfull.js')}}"></script>
<!-- LOCALIZE-->
<script src="{{asset('web/vendor/jquery-localize/dist/jquery.localize.js')}}"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->
<!-- =============== APP SCRIPTS ===============-->
<script src="{{asset('web/js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
@include('admin.layout.message')
@yield('script')
<script>
    $(document).ready(function(){
        $('textarea').summernote({
            height: 300,
            popover: {
                image: [],
                link: [],
                air: []
            }
        });
        $('.note-insert').hide();
          $('.note-view').hide();
    })

</script>
</body>

</html>
