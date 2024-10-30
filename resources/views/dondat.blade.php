<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Trước Ấn Phẩm</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS file for styling -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Đặt trước ấn phẩm</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Mã KH</th>
                    <th>Tên</th>
                    <th>Ngày đặt trước</th>
                    <th>Số lượng đặt trước</th>
                    <th>Email</th>
                    <th>Xác nhận</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample data array for testing
                $data = [
                    ['id' => 'KH01', 'name' => 'Conan 1', 'date' => '25/9/2024', 'quantity' => 1, 'email' => 'test1@example.com'],
                    ['id' => 'KH03', 'name' => 'Conan 4', 'date' => '26/9/2024', 'quantity' => 1, 'email' => 'test2@example.com'],
                    ['id' => 'KH08', 'name' => 'Conan 1', 'date' => '1/10/2024', 'quantity' => 1, 'email' => 'test3@example.com'],
                    // Add more test data as needed
                ];

                // Display table rows from the data array
                foreach ($data as $row) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['date']}</td>
                            <td>{$row['quantity']}</td>
                            <td>{$row['email']}</td>
                            <td><button class='confirm-btn' data-id='{$row['id']}' data-email='{$row['email']}'>Xác nhận</button></td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Pop-up Confirmation Modal -->
    <div id="confirmationModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span id="closeModal" class="close">&times;</span>
            <p>Xác nhận đặt trước cho khách hàng có mã: <span id="customerId"></span></p>
            <p>Email khách hàng: <span id="customerEmail"></span></p>
            <button id="sendNotification">Gửi thông báo</button>
        </div>
    </div>

    <script>
        // JavaScript for handling modal pop-up and button click
        $(document).ready(function () {
            $('.confirm-btn').click(function () {
                let customerId = $(this).data('id');
                let customerEmail = $(this).data('email');

                $('#customerId').text(customerId);
                $('#customerEmail').text(customerEmail);
                $('#confirmationModal').show();
            });

            $('#closeModal').click(function () {
                $('#confirmationModal').hide();
            });

            $('#sendNotification').click(function () {
                alert("Thông báo đã được gửi thành công!");
                $('#confirmationModal').hide();
            });
        });
    </script>

    <style>
        /* CSS for Enhanced UI */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-weight: bold;
        }

        td {
            padding: 10px;
            text-align: center;
            background-color: #f9f9f9;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        tr:hover td {
            background-color: #f0f7ff;
        }

        .confirm-btn {
            background-color: #4CAF50;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .confirm-btn:hover {
            background-color: #45a049;
        }

        .modal {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .modal-content {
            background-color: #ffffff;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-content p {
            font-size: 1.1em;
            margin: 10px 0;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        #sendNotification {
            background-color: #ff5c5c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        #sendNotification:hover {
            background-color: #ff4c4c;
        }
    </style>
</body>
</html>
