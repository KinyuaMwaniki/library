<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jqvmap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icheck-flat-green.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-progressbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor-bs-drp-daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wizag.css') }}" rel="stylesheet">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('adminlte.partials.sidebar')

            @include('adminlte.partials.topnav')

            <div id="app" class="right_col" role="main">
                @yield('content')
            </div>

            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/nprogress.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/gauge.js') }}"></script>
    <script src="{{ asset('js/bootstrap-progressbar.js') }}"></script>
    <script src="{{ asset('js/icheck.js') }}"></script>
    <script src="{{ asset('js/skycons.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('js/flot.curvedLines.js') }}"></script>
    <script src="{{ asset('js/date.js') }}"></script>
    <script src="{{ asset('js/jqvmap.js') }}"></script>
    <script src="{{ asset('js/jqvmap.world.js') }}"></script>
    <script src="{{ asset('js/jqvmap.sampledata.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ asset('js/gentelella-custom.js') }}"></script>

</body>

</html>
