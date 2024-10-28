@extends('user.layout.app')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Xác nhận thông tin đặt trước</h2>
            
            <!-- Thông tin sách -->
            <div class="mb-3">
                <p><strong>Tên Sách:</strong> Tên Sách 1</p>
            </div>

            <!-- Thông tin khách hàng -->
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Tên khách hàng:</strong></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên của bạn" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"><strong>Email:</strong></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label"><strong>Số điện thoại:</strong></label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn" required>
                </div>

                <!-- Nút quay lại và xác nhận -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('book-booked') }}" class="btn btn-secondary">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
