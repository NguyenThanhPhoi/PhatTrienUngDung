<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/frontend/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome-free-6.6.0-web/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('image/favicon/Sweet-Home.png')}}" type="image/png">
</head>
<body>
    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')


    <script src="{{ asset('js/frontend/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
</body>
</html>