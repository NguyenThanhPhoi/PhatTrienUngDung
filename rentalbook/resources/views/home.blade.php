@extends('layout.app')

@section('title', 'Trang Chủ')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Chào Mừng Đến Với Cho Thuê Sách!</h1>
    <p class="lead">Khám phá nhiều thể loại sách và thuê những cuốn sách yêu thích của bạn ngay hôm nay!</p>
    <hr class="my-4">
    <p>Chúng tôi cung cấp dịch vụ cho thuê sách với quy trình đơn giản và nhanh chóng.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Xem Sách Mới</a>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Sách 1">
            <div class="card-body">
                <h5 class="card-title">Sách 1</h5>
                <p class="card-text">Mô tả ngắn về sách 1.</p>
                <a href="#" class="btn btn-primary">Thuê Ngay</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Sách 2">
            <div class="card-body">
                <h5 class="card-title">Sách 2</h5>
                <p class="card-text">Mô tả ngắn về sách 2.</p>
                <a href="#" class="btn btn-primary">Thuê Ngay</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Sách 3">
            <div class="card-body">
                <h5 class="card-title">Sách 3</h5>
                <p class="card-text">Mô tả ngắn về sách 3.</p>
                <a href="#" class="btn btn-primary">Thuê Ngay</a>
            </div>
        </div>
    </div>
</div>
@endsection