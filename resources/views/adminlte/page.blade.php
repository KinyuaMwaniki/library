<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'WizERP') }}</title>

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    @include('adminlte.partials.css')

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('adminlte.partials.sidebar')

            @include('adminlte.partials.topnav')

            
            <div id="app" class="right_col" role="main">
                @if (Session::has('message'))
                    <p class="alert alert-info alert-clearfix">{{ Session::get('message') }}</p>
                @endif
                @if(Session::has('error'))
                    <p class="alert alert-danger alert-clearfix">{{ Session::get('error') }}</p>
                @endif
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

    @include('adminlte.partials.scripts')

    @yield('scripts')

</body>

</html>
