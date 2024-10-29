<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-print {
            margin-right: 10px;
        }
        .title {
            margin-bottom: 20px;
        }
        .title h3 {
            margin: 0;
        }
        td, th {
           text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h3>Lập báo cáo > Thống kê tần suất thuê</h3>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <button class="btn btn-primary btn-print">In báo cáo</button>
                <button class="btn btn-secondary btn-print">Tải báo cáo</button>
            </div>
        </div>
        <table class="table table-bordered" id="reportTable">
            <thead>
                <tr>
                    <th>Stt</th>
                    <th>Mã ấn phẩm</th>
                    <th>Tên ấn phẩm</th>
                    <th>Tần suất thuê</th>
                    <th>Giá</th>
                    <th>Thể loại</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>A1</td>
                    <td>Ấn phẩm 1</td>
                    <td>5</td>
                    <td>100.000 VNĐ</td>
                    <td>Trinh thám</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>A2</td>
                    <td>Ấn phẩm 2</td>
                    <td>5</td>
                    <td>200.000 VNĐ</td>
                    <td>Trinh thám</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>A3</td>
                    <td>Ấn phẩm 3</td>
                    <td>4</td>
                    <td>200.000 VNĐ</td>
                    <td>Hoạt hình</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>A4</td>
                    <td>Ấn phẩm 4</td>
                    <td>3</td>
                    <td>200.000 VNĐ</td>
                    <td>Hoạt hình</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>A5</td>
                    <td>Ấn phẩm 5</td>
                    <td>1</td>
                    <td>200.000 VNĐ</td>
                    <td>Lịch sử</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" class="text-end mr-5"><strong>Tổng số lượng: 18</strong></td>
                </tr>
            </tfoot>
        </table>
       
    </div>
</body>
</html>
