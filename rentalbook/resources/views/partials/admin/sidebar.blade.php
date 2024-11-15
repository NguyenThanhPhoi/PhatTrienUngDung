<!-- resources/views/partials/admin/sidebar.blade.php -->

<nav class="col-md-3 col-lg-2 d-md-block sidebar">
    <div class="position-sticky">
        <h5 class="p-3">Quản trị</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    Bảng điều khiển
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Người dùng
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Cài đặt
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Báo cáo
                </a>
            </li>
            <li class="nav-item">
                <form action="{{ route('admin.logout') }}" method="post">
                    @csrf
                    <button type="submit">Đăng xuất</button>
                </form>
                {{-- <a class="nav-link" href="">
                    Đăng xuất
                </a> --}}
            </li>
        </ul>
    </div>
</nav>