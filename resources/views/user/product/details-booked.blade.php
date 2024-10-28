@extends('user.layout.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <!-- Ảnh sách bên trái -->
        <div class="col-md-4">
            <img src="{{ asset('image/products/doraemon-1.jpg') }}" alt="Tên Sách" class="img-fluid">
        </div>

        <!-- Thông tin sách bên phải -->
        <div class="col-md-8">
            <h2 class="mb-3">Tên Sách: Tên Sách 1</h2>
            <p><strong>Tác giả:</strong> Tên Tác Giả</p>
            <p><strong>Năm xuất bản:</strong> 2021</p>
            <p><strong>Mô tả:</strong> Đây là mô tả ngắn về nội dung của sách. Nội dung mô tả giúp độc giả hiểu sơ qua về nội dung cuốn sách, thể loại, và đối tượng mà sách hướng tới.</p>
            <p><strong>Giá cọc:</strong> 100,000 VND</p>

            <!-- Trạng thái sách -->
            <p>
                <strong>Trạng thái:</strong>
                <span class="badge bg-danger">Hết hàng</span>
                {{-- @if($isRented)
                    <span class="badge bg-danger">Đã thuê</span>
                @else
                    <span class="badge bg-success">Còn hàng</span>
                @endif --}}
            </p>

            <!-- Nút đặt thuê -->
            <form action="{{route('booked')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Đặt trước</button>
            </form>
            {{-- @if(!$isRented)
                <form action="{{ route('book.rent', ['id' => $book->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Đặt thuê</button>
                </form>
            @else
                <button class="btn btn-secondary" disabled>Đã được thuê</button>
            @endif --}}
        </div>
    </div>
</div>

@endsection
