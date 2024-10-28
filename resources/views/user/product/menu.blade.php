@extends('user.layout.app')

@section('title', 'Menu')

@section('content')

<!-- Danh sách sách Section -->
<div class="container my-5">
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