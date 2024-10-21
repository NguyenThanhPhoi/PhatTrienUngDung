<link rel="stylesheet" href="{{asset('css/frontend/home.css')}}">

@extends('frontend.layouts.app')

@section('title', 'Home')   

@section('content')
    <style>
        .left-content{
            background-repeat: no-repeat;
            background-image: url('{{ asset('image/banner/banner-background.png') }}');
            background-position: 10% 100%; /* Di chuyển hình nền gần về phía trái */
        }
    </style>
    
    <div class="content">
        <div class="left-content">
            <h1 class="title-content">
                Barked with love
            </h1>
            <p class="des-content">
                Khám phá hương vị ngọt ngào của những chiếc bánh tươi ngon, được tạo ra từ sự tỉ mỉ và tình yêu của Sweet Home. Mỗi chiếc bánh là một tác phẩm nghệ thuật, được làm thủ công mỗi ngày để mang đến cho bạn trải nghiệm ẩm thực tuyệt vời và khó quên.
            </p>
            <a href="{{ route('home') }}" class="btn btn-outline-danger btn-order">Order Now</a>
        </div>

        <div class="right-content">
            <img class="banner" src="{{ asset('image/banner/banner-header.png')}}" alt="">
        </div>
    </div>

    <div class="about">
        <div class="title-about text-center">
            <h1>About Sweet Home</h1>
        </div>
        <div class="row about-content d-flex align-items-center justify-content-center">
            <div class="col-6 left-about">
                <img src="{{ asset('image/banner/left-about.png')}}" alt="">
            </div>
    
            <div class="col-6 right-about d-flex flex-column justify-content-center">
                <p class="text-uppercase fw-bold">thành lập từ năm 2003</p>
                <p>
                    Được biết đến như một kiểu mẫu ẩm thực đan xen giữa Á và Âu, những chiếc bánh của Sweet Home không chỉ gói trọn nét duyên dáng & tinh tế của ẩm thực mà còn là “biểu tượng” của lòng quan tâm, sự chăm sóc dịu dàng Bạn muốn gửi trao.
                </p>
            </div>
        </div>
    </div>

    <script src="{{asset('js/frontend/home.js')}}"></script>
@endsection