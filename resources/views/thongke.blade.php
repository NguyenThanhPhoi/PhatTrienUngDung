<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê doanh thu</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
        }
        .container {
            max-width: 800px;
            margin: 80px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
            font-size: 16px;
        }
        th {
            background-color: #f5f5f5;
            color: #333;
        }
        td {
            background-color: #fafafa;
        }
        td:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #eaf6f5;
        }
        .btn {
            display: inline-block;
            margin: 20px;
            padding: 12px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .btn-download {
            background-color: #e74c3c;
        }
        .btn-finish {
            background-color: #2ecc71;
        }
        .btn:hover {
            opacity: 0.8;
        }

        /* Modal Styling */
        .modal {
            display: none; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }
        .modal-content h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .modal-content .message {
            font-size: 16px;
            margin-bottom: 30px;
            color: #555;
        }
        .modal-content .btn-finish {
            background-color: #2ecc71;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .modal-content .btn-finish:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Thống kê doanh thu</h2>

    <table>
        <tr>
            <th>Mã hóa đơn</th>
            <th>Tên sản phẩm</th>
            <th>Giá thuê</th>
            <th>Tiền cọc</th>
            <th>Số lần cho thuê</th>
            <th>Doanh thu</th>
        </tr>
        <tr>
            <td>M01</td>
            <td>Conan 1</td>
            <td>30,000 VND</td>
            <td>70,000 VND</td>
            <td>3</td>
            <td>90,000 VND</td>
        </tr>
        <tr>
            <td>M02</td>
            <td>Conan 2</td>
            <td>40,000 VND</td>
            <td>50,000 VND</td>
            <td>1</td>
            <td>40,000 VND</td>
        </tr>
        <!-- More rows can be added here -->
    </table>

    <img src="chart-placeholder.png" alt="Biểu đồ thống kê" width="80%" style="margin: 30px auto;">

    <div>
        <button class="btn btn-download" onclick="showModal()">Tải Xuống</button>
        <button class="btn btn-finish">Hoàn Tất</button>
    </div>
</div>

<!-- Modal for Download Notification -->
<div id="downloadModal" class="modal">
    <div class="modal-content">
        <h2>Tải xuống hoàn tất!</h2>
        <p class="message">Tệp báo cáo đã được tải xuống thành công.</p>
        <button class="btn-finish" onclick="closeModal()">Hoàn tất</button>
    </div>
</div>

<script>
    function showModal() {
        document.getElementById('downloadModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('downloadModal').style.display = 'none';
    }
</script>

</body>
</html>
