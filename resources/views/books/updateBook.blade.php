<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Ấn Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h3 class="card-title text-center mb-5">Sửa ấn phẩm</h3>
        <form>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="tenAnPham" class="form-label">Tên ấn phẩm <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="tenAnPham" value="Đom đóm">
                </div>
                <div class="col-md-6">
                    <label for="giaBiaSach" class="form-label">Giá bìa sách <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="giaBiaSach" value="45.000">
                </div>
                <div class="col-md-6">
                    <label for="anhAnPham" class="form-label">Ảnh ấn phẩm <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="anhAnPham">
                </div>
                <div class="col-md-6">
                    <label for="giaCoc" class="form-label">Giá cọc <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="giaCoc" value="36.000">
                </div>
                <div class="col-md-6">
                    <label for="tacGia" class="form-label">Tác giả <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="tacGia" value="J97">
                </div>
                <div class="col-md-6">
                    <label for="tinhTrang" class="form-label">Tình trạng</label>
                    <select class="form-select" id="tinhTrang">
                        <option value="cu">Cũ</option>
                        <option value="moi">Mới</option>
                        <option value="moi">Hỏng</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="namXuatBan" class="form-label">Năm xuất bản <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="namXuatBan" value="2020">
                </div>
                <div class="col-md-6">
                    <label for="theLoai" class="form-label">Thể loại</label>
                    <select class="form-select" id="theLoai">
                        <option value="trinhTham">Trinh thám</option>
                        <option value="khoaHoc">Hoạt hình</option>
                        <option value="lichSu">Lịch sử</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="moTa" class="form-label">Mô tả <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="moTa" rows="3" value="Là một tác phẩm nổi tiếng"></textarea>
                </div>
                <div class="col-12 text-center">
                    <a href="{{ route('admin-book.home')}}" style="padding: 8px 40px;" class="btn btn-primary mt-3">Lưu</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
