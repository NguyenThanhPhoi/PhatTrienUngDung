<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách hàng - Cập nhật thông tin</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: #00796b;
            color: white;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-bar input {
            width: 50%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .search-bar button {
            padding: 10px 20px;
            margin-left: 10px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-bar button:hover {
            background-color: #005d4f;
        }

        .customer-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .customer-table thead {
            background-color: #00796b;
            color: white;
        }

        .customer-table th, .customer-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .customer-table th {
            font-weight: bold;
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

        /* CSS cho modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #ddd;
            width: 40%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .close-btn {
            float: right;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
        }

        .close-btn:hover {
            color: red;
        }

        .form-field {
            margin-bottom: 15px;
        }

        .form-field label {
            display: block;
            margin-bottom: 5px;
        }

        .form-field input, .form-field select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .modal-actions {
            text-align: right;
        }

        .save-btn, .cancel-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .save-btn {
            background-color: #00796b;
            color: white;
        }

        .save-btn:hover {
            background-color: #005d4f;
        }

        .cancel-btn {
            background-color: #f44336;
            color: white;
        }

        .cancel-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Danh sách khách hàng</h1>
        </div>

        <!-- Thanh tìm kiếm -->
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Tìm kiếm khách hàng...">
            <button onclick="searchCustomer()">Tìm kiếm</button>
        </div>

        <table class="customer-table">
            <thead>
                <tr>
                    <th>Mã KH</th>
                    <th>Họ và tên</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Thành viên</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody id="customerTableBody">
                <tr>
                    <td>1</td>
                    <td>Tên khách hàng</td>
                    <td>Đồng Tháp</td>
                    <td>a@gmail.com</td>
                    <td>0345567990</td>
                    <td>Thành viên</td>
                    <td><button class="update-btn" onclick="openForm('1', 'Tên khách hàng', 'Đồng Tháp', 'a@gmail.com', '0345567990', 'Thành viên')">Cập nhật</button></td>
                </tr>
                <!-- Các hàng khách hàng khác ở đây -->
            </tbody>
        </table>

        <!-- Modal Form -->
        <div id="updateModal" class="modal">
            <div class="modal-content">
                <span class="close-btn" onclick="closeForm()">&times;</span>
                <h2>Cập nhật thông tin khách hàng</h2>
                <div class="form-field">
                    <label for="name">Họ và tên:</label>
                    <input type="text" id="name">
                </div>
                <div class="form-field">
                    <label for="address">Địa chỉ:</label>
                    <input type="text" id="address">
                </div>
                <div class="form-field">
                    <label for="email">Email:</label>
                    <input type="email" id="email">
                </div>
                <div class="form-field">
                    <label for="phone">Số điện thoại:</label>
                    <input type="text" id="phone">
                </div>
                <div class="form-field">
                    <label for="member">Thành viên:</label>
                    <select id="member">
                        <option value="Thành viên">Thành viên</option>
                        <option value="Chưa có thành viên">Chưa có thành viên</option>
                    </select>
                </div>
                <div class="modal-actions">
                    <button class="save-btn" onclick="saveUpdate()">Lưu thay đổi</button>
                    <button class="cancel-btn" onclick="closeForm()">Hủy</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openForm(id, name, address, email, phone, memberStatus) {
            // Hiển thị modal và điền sẵn thông tin
            document.getElementById('name').value = name;
            document.getElementById('address').value = address;
            document.getElementById('email').value = email;
            document.getElementById('phone').value = phone;
            document.getElementById('member').value = memberStatus;

            // Hiển thị modal
            document.getElementById('updateModal').style.display = 'block';
        }

        function closeForm() {
            // Ẩn modal
            document.getElementById('updateModal').style.display = 'none';
        }

        function saveUpdate() {
            // Lấy giá trị sau khi chỉnh sửa
            const name = document.getElementById('name').value;
            const address = document.getElementById('address').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const member = document.getElementById('member').value;

            // Thực hiện logic cập nhật dữ liệu ở đây (AJAX hoặc submit form)
            alert(`Đã cập nhật thông tin khách hàng: \nHọ và tên: ${name}\nĐịa chỉ: ${address}\nEmail: ${email}\nSố điện thoại: ${phone}\nThành viên: ${member}`);

            // Ẩn modal sau khi lưu thay đổi
            closeForm();
        }

        // Đóng modal nếu nhấn ngoài khu vực form
        window.onclick = function(event) {
            const modal = document.getElementById('updateModal');
            if (event.target === modal) {
                closeForm();
            }
        }

        function searchCustomer() {
    const input = document.getElementById('searchInput').value.trim().toLowerCase();
    const tableBody = document.getElementById('customerTableBody');
    const rows = tableBody.getElementsByTagName('tr');
    let found = false; // Biến để kiểm tra có tìm thấy khách hàng hay không

    for (let i = 0; i < rows.length; i++) {
        const row = rows[i];
        const phoneCell = row.getElementsByTagName('td')[4]; // Cột số điện thoại là cột thứ 5 (index 4)
        const phoneText = phoneCell.textContent.toLowerCase();

        // Kiểm tra nếu số điện thoại chứa giá trị tìm kiếm
        if (phoneText.includes(input)) {
            row.style.display = ''; // Hiển thị hàng tìm thấy
            found = true;
        } else {
            row.style.display = 'none'; // Ẩn hàng không khớp
        }
    }

    // Nếu không tìm thấy khách hàng nào, hiển thị thông báo
    if (!found) {
        alert("Khách hàng chưa có tài khoản.");
    }
}

    </script>
</body>
</html>
