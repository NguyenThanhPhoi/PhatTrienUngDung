<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome-free-6.6.0-web/css/all.min.css')}}">
    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .container-fluid {
            padding: 0;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
        }

        .sidebar a, .sidebar .dropdown-menu a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            width: 100%; /* Đảm bảo liên kết chiếm toàn bộ chiều rộng */
        }

        .sidebar a:hover, .sidebar .dropdown-menu a:hover {
            background-color: #495057;
        }

        .dropdown-menu {
            background-color: #343a40;
            border: none;
            width: 100%; /* Đảm bảo dropdown menu chiếm toàn bộ chiều rộng */
        }

        .dropdown-menu li {
            padding-left: 20px;
            width: 100%; /* Đảm bảo các mục trong dropdown chiếm toàn bộ chiều rộng */
        }

        .content {
            margin-left: 250px; /* Phải tương ứng với chiều rộng của sidebar */
            padding: 20px;
        }

        .header, .footer {
            width: 100%;
            background-color: #f8f9fa;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-auto sidebar">
            @include('backend.partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col content">
            <!-- Header -->
            <div class="header">
                @include('backend.partials.header')
            </div>

            <!-- Main Content -->
            <div>
                @yield('content')
            </div>

            <!-- Footer -->
            <div class="footer">
                @include('backend.partials.footer')
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js')}}"></script>

</body>
</html>
