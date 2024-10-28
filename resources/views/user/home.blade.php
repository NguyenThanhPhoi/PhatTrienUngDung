@extends('user.layout.app')

@section('title', 'Home')

@section('content')

<div class="container-fluid bg-light py-5">
    <div class="row align-items-center">
        <!-- Cột bên trái: tên website và tiêu đề -->
        <div class="col-md-6 text-center">
            <h1 class="display-4">Thư Viện Sách</h1>
            <p class="lead">Nơi lưu giữ tri thức</p>
        </div>

        <!-- Cột bên phải: banner image -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('image/banner.png') }}" alt="Banner" class="img-fluid">
        </div>
    </div>
</div>

<!-- Danh sách sách Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Được thuê nhiều</h2>
    <div class="row">
        <!-- Sách 1 -->
        <div class="col-md-3 mb-4">
            <a href="{{route('book-details')}}">
                <div class="card h-100">
                    <img src="{{ asset('image/products/doraemon-1.jpg') }}" class="card-img-top" alt="Sách 1">
                    <div class="card-body">
                        <h5 class="card-title">Tên Sách 1</h5>
                        
                    </div>
                </div>
            </a>
        </div>

        <!-- Sách 2 -->
        <div class="col-md-3 mb-4">
            <a href="{{route('book-booked')}}">
                <div class="card h-100">
                    <img src="{{ asset('image/products/doraemon-1.jpg') }}" class="card-img-top" alt="Sách 2">
                    <div class="card-body">
                        <h5 class="card-title">Tên Sách 2</h5>
                        
                    </div>
                </div>
            </a>
        </div>

        <!-- Sách 3 -->
        <div class="col-md-3 mb-4">
            <a href="{{route('book-details')}}">
                <div class="card h-100">
                    <img src="{{ asset('image/products/doraemon-1.jpg') }}" class="card-img-top" alt="Sách 3">
                    <div class="card-body">
                        <h5 class="card-title">Tên Sách 3</h5>
                        
                    </div>
                </div>
            </a>
        </div>

        <!-- Sách 4 -->
        <div class="col-md-3 mb-4">
            <a href="{{route('book-details')}}">
                <div class="card h-100">
                    <img src="{{ asset('image/products/doraemon-1.jpg') }}" class="card-img-top" alt="Sách 4">
                    <div class="card-body">
                        <h5 class="card-title">Tên Sách 4</h5>
                        
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 mb-4">
            <a href="{{route('book-details')}}">
                <div class="card h-100">
                    <img src="{{ asset('image/products/doraemon-1.jpg') }}" class="card-img-top" alt="Sách 5">
                    <div class="card-body">
                        <h5 class="card-title">Tên Sách 5</h5>
                        
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection