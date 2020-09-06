<?php
$nav = [
    [
        'name' => 'Отзывы',
        'url' => '/',
    ]
];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}"/>

        <!-- Bootstrap CSS darkly-->
        <!--link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.css"-->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap_4_slate.css') }}">
        <!--link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css"-->
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        @stack('styles')

        <link rel="stylesheet" href="{{ asset('css/modal-busy.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- JavaScript files-->
        <script src="{{ asset('js/jquery.js') }}"></script>
    </head>
    <body>

    @include('parts/header', ['nav' => $nav])

    @include('parts/modal_busy')

    <div class="container" id="app">

        <div class="page-header" id="banner">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6">
                    @include('parts/flash-message')
                </div>
            </div>
            @yield('content')
        </div>


        <footer id="footer">
        </footer>
    </div>


    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>


    @stack('scripts')

    <script src="{{ asset('js/modal-busy.js') }}"></script>
    </body>
</html>
