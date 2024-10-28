@extends('user.layout.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4">Giỏ hàng của bạn</h2>

    <!-- Giả sử giỏ hàng có sách để hiển thị giao diện -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sách</th>
                    <th>Giá cọc</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="{{ asset('image/products/doraemon-1.jpg') }}" alt="Tên Sách 1" class="img-fluid" style="width: 100px;">
                    </td>
                    <td>Tên Sách 1</td>
                    <td>100.000 VND</td>
                    <td>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('image/products/doraemon-1.jpg') }}" alt="Tên Sách 2" class="img-fluid" style="width: 100px;">
                    </td>
                    <td>Tên Sách 2</td>
                    <td>120.000 VND</td>
                    <td>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-end">
        <h4>Tổng tiền cọc: 220.000 VND</h4>
    </div>

    <!-- Nút Thanh Toán -->
    <div class="text-end mt-3">
        <a href="{{ route('checkout') }}" class="btn btn-success">Thanh Toán</a>
    </div>
</div>

@endsection
