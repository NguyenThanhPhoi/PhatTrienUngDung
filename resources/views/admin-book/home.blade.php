<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý ấn phẩm</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Style for the Sidebar */
        .sidebar {
            background-color: #ccc;
            min-height: 100vh;
            text-align: center;
        }
        .sidebar img {
            border-radius: 50%;
            margin-top: 20px;
        }
        .icon-user {
            font-size: 24px;
            color: #555;
        }
        tr, td {
            text-align: center;
        }

    </style>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar d-flex flex-column align-items-center py-3">
                <img alt="Books logo" height="80" src="https://storage.googleapis.com/a1aa/image/0U4S26rZ2OogGdW5ssEbPcRvWrw8R0JsHH7nFMr1CyLeDW1JA.jpg" width="80"/>
            </div>

            <!-- Content Area -->
            <div class="col-md-10 p-4">
                <!-- User Icon -->
                <div style="background-color: #ccc; border-radius: 10px;" class="d-flex justify-content-end mb-3 p-3">
                    <i style="border-radius: 8px; background-color: #ffffff;" class="icon-user fas fa-user-circle p-2"></i>
                </div>

                <!-- Header Section -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Tabs -->
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 me-3">DANH SÁCH ẤN PHẨM</h5>
                        <a href="{{ route('insertBook') }}" class="btn btn-primary">Thêm ấn phẩm</a>
                    </div>

                    <!-- Search Bar -->
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Tìm kiếm" aria-label="Search">
                            <button class="input-group-text"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Stt</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Mã ấn phẩm</th>
                                <th scope="col">Tên ấn phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="https://i.pinimg.com/474x/ae/24/b4/ae24b43a924374e069717516df538a3d.jpg" alt="Ảnh ấn phẩm" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                <td>A01</td>
                                <td>Vườn sao băng</td>
                                <td>45.000</td>
                                <td><span class="text-success">Còn hàng</span></td>
                                <td>Cũ</td>
                                <td>
                                    <a href="{{route('updateBook')}}" class="text-primary me-2">Sửa</a>
                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="https://i.pinimg.com/474x/ae/24/b4/ae24b43a924374e069717516df538a3d.jpg" alt="Ảnh ấn phẩm" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                <td>A02</td>
                                <td>Vườn sao băng</td>
                                <td>45.000</td>
                                <td><span class="text-success">Còn hàng</span></td>
                                <td>Hỏng</td>
                                <td>
                                    <a href="{{route('updateBook')}}" class="text-primary me-2">Sửa</a>
                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="https://i.pinimg.com/474x/ae/24/b4/ae24b43a924374e069717516df538a3d.jpg" alt="Ảnh ấn phẩm" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                                <td>A03</td>
                                <td>Vườn sao băng</td>
                                <td>45.000</td>
                                <td><span class="text-success">Còn hàng</span></td>
                                <td>Mới</td>
                                <td>
                                    <a href="{{route('updateBook')}}" class="text-primary me-2">Sửa</a>
                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="https://i.pinimg.com/474x/ae/24/b4/ae24b43a924374e069717516df538a3d.jpg" alt="Ảnh ấn phẩm" style="width: 50px; height: 50px;"></td>
                                <td>A04</td>
                                <td>Vườn sao băng</td>
                                <td>45.000</td>
                                <td><span class="text-success">Còn hàng</span></td>
                                <td>Cũ</td>
                                <td>
                                    <a href="{{route('updateBook')}}" class="text-primary me-2">Sửa</a>
                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="https://i.pinimg.com/474x/ae/24/b4/ae24b43a924374e069717516df538a3d.jpg" alt="Ảnh ấn phẩm" style="width: 50px; height: 50px;"></td>
                                <td>A05</td>
                                <td>Vườn sao băng</td>
                                <td>45.000</td>
                                <td><span class="text-success">Còn hàng</span></td>
                                <td>Mới</td>
                                <td>
                                    <a href="{{route('updateBook')}}" class="text-primary me-2">Sửa</a>
                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Xóa</a>
                                </td>
                            </tr>        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

 <!-- Modal xác nhận xóa -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Thông báo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa ấn phẩm mã A01 này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>

</body>
 <!-- Bootstrap JS và các icon FontAwesome -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
