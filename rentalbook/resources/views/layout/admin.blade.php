<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome/css/all.min.css') }}">
    <style>
        /* Inline CSS for custom styles */
        .sidebar {
            width: 200px;
            position: fixed;
            top: 56px; /* Height of the navbar */
            bottom: 0;
            left: 0;
            background-color: #f8f9fa;
            padding: 15px;
        }
        .content {
            margin-left: 220px; /* Width of the sidebar */
            padding: 20px;
        }

        .sidebar a {
            color: rgb(57, 52, 52); /* Màu chữ cho liên kết */
            text-decoration: none; /* Bỏ gạch chân */
        }
        .sidebar li:hover {
            background-color: #495057; /* Màu nền khi hover */
            border-radius: 4px; /* Bo góc */
        }
        .content {
            margin-left: 240px; /* Cập nhật margin cho nội dung */
            padding: 20px;
        }

        html, body {
            height: 100%; /* Đặt chiều cao cho html và body */
            margin: 0; /* Bỏ margin mặc định */
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Đảm bảo chiều cao tối thiểu là 100% viewport */
        }
        footer {
            background-color: #f8f9fa; /* Màu nền cho footer */
            padding: 10px 0; /* Padding cho footer */
            text-align: center; /* Căn giữa nội dung footer */
        }
    </style>
</head>
<body>

    @include('partials.admin.header')
   

    <div class="row">
        @include('partials.admin.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>

    @include('partials.admin.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>