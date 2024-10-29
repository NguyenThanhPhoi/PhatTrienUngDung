<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm ấn phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h3 class="card-title text-center mb-5">Thêm mới ấn phẩm</h3>
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="tenAnPham" class="form-label">Tên ấn phẩm <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tenAnPham" placeholder="Tên ấn phẩm">
                    </div>
                    <div class="col-md-6">
                        <label for="giaBiaSach" class="form-label">Giá bìa sách <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="giaBiaSach" placeholder="Giá bìa sách">
                    </div>
                    <div class="col-md-6">
                        <label for="anhAnPham" class="form-label">Ảnh ấn phẩm <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="anhAnPham">
                    </div>
                    <div class="col-md-6">
                        <label for="giaCoc" class="form-label">Giá cọc <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="giaCoc" placeholder="Giá cọc">
                    </div>
                    <div class="col-md-6">
                        <label for="tacGia" class="form-label">Tác giả <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tacGia" placeholder="Tác giả">
                    </div>
                    <div class="col-md-6">
                        <label for="tinhTrang" class="form-label">Tình trạng</label>
                        <select class="form-select" id="tinhTrang">
                            <option value="cu">Cũ</option>
                            <option value="moi">Mới</option>
                            <option value="hong">Hỏng</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="namXuatBan" class="form-label">Năm xuất bản <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="namXuatBan" placeholder="Năm xuất bản">
                    </div>
                    <div class="col-md-6">
                        <label for="theLoai" class="form-label">Thể loại</label>
                        <select class="form-select" id="theLoai">
                            <option value="trinhTham">Trinh thám</option>
                            <option value="trinhTham">Hoạt hình</option>
                            <option value="trinhTham">Lịch sử</option>
                            <!-- Add more categories as needed -->
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="moTa" class="form-label">Mô tả <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="moTa" rows="3" placeholder="Mô tả ấn phẩm"></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <a href="{{ route('admin-book.home')}}" style="padding: 8px 30px;" class="btn btn-primary mt-3">Thêm</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
