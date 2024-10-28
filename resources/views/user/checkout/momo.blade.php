@extends('user.layout.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4">Thanh Toán qua MoMo</h2>

    <div class="alert alert-info">
        <p>Vui lòng quét mã QR MoMo hoặc sử dụng ứng dụng MoMo để thực hiện giao dịch.</p>
    </div>

    <div class="text-center">
        <img src="{{ asset('image/qr-momo.png') }}" alt="Mã QR MoMo" class="img-fluid" style="max-width: 300px;">
    </div>

    <div class="text-center mt-4">
        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('checkout') }}'">Quay lại Trang Thanh Toán</button>
    </div>
</div>

@endsection
