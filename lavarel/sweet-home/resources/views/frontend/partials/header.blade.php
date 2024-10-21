<link rel="stylesheet" href="{{ asset('css/frontend/header.css') }}">

<header>
    <nav>
        <div class="left-nav">
            <a href="{{ route('home') }}">
                <img class="logo" src="{{ asset('image/favicon/Sweet-Home.png') }}" alt="logo">
            </a>

            <ul>
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="dropdown">
                    <a href="">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Option 1</a></li>
                        <li><a href="#">Option 2</a></li>
                        <li><a href="#">Option 3</a></li>
                    </ul>
                </li>
                <li><a href="#">Tin tức</a></li>
            </ul>
        </div>

        <div class="right-nav">
            <div class="search">
                <form action="#" method="get" class="search-form">
                    @csrf
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="user">
                <a href="{{ route('profile') }}"><i class="fa-solid fa-user"></i></a>
            </div>
            <div class="cart">
                <a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
            <!-- Chỉ hiển thị nút Register nếu người dùng chưa đăng nhập -->
            @guest
            <div class="register">
                <a href="{{ route('signup') }}"><i class="fa-solid fa-user-plus"></i></a>
            </div>
            @endguest
            
            <!-- Chỉ hiển thị nút Logout nếu người dùng đã đăng nhập -->
            @auth
            <div class="logout">
                <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
            @endauth
            
        </div>
    </nav>
</header>
