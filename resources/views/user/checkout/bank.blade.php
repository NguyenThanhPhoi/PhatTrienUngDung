@extends('user.layout.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4">Thanh Toán qua Ngân Hàng</h2>

    <div class="alert alert-info">
        <p>Vui lòng chuyển khoản đến thông tin tài khoản sau:</p>
        <ul>
            <li><strong>Ngân hàng:</strong> Tên Ngân Hàng XYZ</li>
            <li><strong>Số tài khoản:</strong> 123456789</li>
            <li><strong>Tên chủ tài khoản:</strong> NGUYEN VAN A</li>
            <li><strong>Nội dung chuyển khoản:</strong> Thanh toán mã đơn hàng #ABC123</li>
        </ul>
    </div>

    <div class="text-center mt-4">
        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('checkout') }}'">Quay lại Trang Thanh Toán</button>
    </div>
</div>

@endsection
