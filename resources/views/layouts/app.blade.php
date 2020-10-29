<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HesabDary {{$title ?? null}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('distribution/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('distribution/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('distribution/css/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('distribution/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('distribution/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('distribution/img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>

<div class="page">
    <!-- Main Navbar-->

    @include('layouts.header')

    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('layouts.sidebar')

        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">Dashboard</h2>
                </div>
            </header>

            <!-- Dashboard Counts Section-->
            @yield('content')

            <!-- Page Footer-->
            @include('layouts.footer')
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="{{ asset('distribution/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('distribution/vendor/popper.js/umd/popper.min.js') }}"> </script>
<script src="{{ asset('distribution/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('distribution/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
<script src="{{ asset('distribution/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('distribution/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('distribution/js/charts-home.js') }}"></script>
<!-- Main File-->
<script src="{{ asset('distribution/js/front.js') }}"></script>
</body>
</html>