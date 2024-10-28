<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo hoặc tên trang -->
        <a class="navbar-brand" href="{{ route('home') }}">Thư Viện Sách</a>

        <!-- Button để mở menu trên thiết bị nhỏ -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu bên trái -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu')}}">Danh sách sách</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tin tức</a>
                </li>
            </ul>

            <!-- Thanh tìm kiếm với nút icon bên trong -->
            <form class="d-flex me-3" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fas fa-search"></i> <!-- Icon tìm kiếm -->
                    </button>
                </div>
            </form>

            <!-- Icon user và giỏ hàng bên phải -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user"></i> <!-- Icon user -->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}">
                        <i class="fas fa-shopping-cart"></i> <!-- Icon giỏ hàng -->
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
