<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome/css/all.min.css') }}">
    <style>
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .footer-links a {
            color: #000;
            text-decoration: none;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    @include('partials.app.header')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.app.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>