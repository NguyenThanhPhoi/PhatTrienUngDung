<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tình trạng đơn hàng - Book Rental</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: #e0f7fa;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .header .logo {
            width: 50px;
            vertical-align: middle;
        }

        .header h1 {
            display: inline;
            font-size: 24px;
            color: #00796b;
        }

        .search-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-box {
            padding: 10px;
            font-size: 16px;
            width: 40%;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .search-btn {
            padding: 10px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-btn:hover {
            background-color: #005d4f;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-table thead {
            background-color: #00796b;
            color: white;
        }

        .order-table th, .order-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .status-dropdown {
            padding: 8px;
            border-radius: 5px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
        }

        .update-btn {
            padding: 8px 16px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .update-btn:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="images/logo.png" alt="Logo" class="logo">
            <h1>Cập nhật tình trạng đơn hàng</h1>
        </div>

        <div class="search-container">
            <input type="text" id="searchInput" class="search-box" placeholder="Nhập mã đơn hàng..." onkeyup="searchOrders()">
            <button class="search-btn">Tìm kiếm</button>
        </div>

        <table class="order-table" id="orderTable">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Số lượng</th>
                    <th>Đã cọc</th>
                    <th>Ngày đặt hàng</th>
                    <th>Giá thuê</th>
                    <th>Tình trạng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>dh01</td>
                    <td>2</td>
                    <td>80.000₫</td>
                    <td>10/9/2024</td>
                    <td>45.000₫</td>
                    <td>
                        <select class="status-dropdown" id="status-dh01">
                            <option value="Chưa xử lí">Chưa xử lí</option>
                            <option value="Đã xác nhận">Đã xác nhận</option>
                            <option value="Đang thanh toán">Đang thanh toán</option>
                            <option value="Đang giao hàng">Đang giao hàng</option>
                            <option value="Đã nhận hàng">Đã nhận hàng</option>
                        </select>
                    </td>
                    <td>
                        <button class="update-btn" onclick="confirmUpdate('dh01')">Cập nhật</button>
                    </td>
                </tr>
                <!-- Lặp các đơn hàng khác ở đây -->
            </tbody>
        </table>
    </div>

    <script>
        function confirmUpdate(orderId) {
            const statusElement = document.getElementById(`status-${orderId}`);
            const selectedStatus = statusElement.value;

            if (confirm('Bạn có chắc muốn cập nhật tình trạng đơn hàng này?')) {
                // Gửi yêu cầu cập nhật trạng thái đến server bằng AJAX hoặc submit form
                alert(`Đã cập nhật đơn hàng ${orderId} thành trạng thái: ${selectedStatus}`);
                // Gửi AJAX hoặc điều hướng form ở đây
            }
        }

        function searchOrders() {
            const input = document.getElementById("searchInput").value.toUpperCase();
            const table = document.getElementById("orderTable");
            const tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                const td = tr[i].getElementsByTagName("td")[0]; // Cột đầu tiên chứa mã đơn hàng
                if (td) {
                    const textValue = td.textContent || td.innerText;
                    if (textValue.toUpperCase().indexOf(input) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
