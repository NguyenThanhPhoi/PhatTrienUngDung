<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn thời gian thống kê</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            margin-bottom: 30px;
            color: #333;
            font-weight: 600;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
        }
        input[type="date"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }
        input[type="date"]:focus {
            border-color: #00bfa5;
            background-color: #fff;
        }
        .btn-confirm {
            margin-top: 20px;
            padding: 12px 30px;
            font-size: 16px;
            background-color: #00bfa5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-confirm:hover {
            background-color: #009688;
        }
        .error {
            color: #e74c3c;
            margin-top: 10px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Chọn thời gian thống kê</h2>

    <label for="start-date">Chọn thời gian bắt đầu</label>
    <input type="date" id="start-date">

    <label for="end-date">Chọn thời gian kết thúc</label>
    <input type="date" id="end-date">

    <button class="btn-confirm" onclick="confirmDates()">Xác Nhận</button>
    <p id="error-message" class="error"></p>
</div>

<script>
    function confirmDates() {
        var startDate = new Date(document.getElementById('start-date').value);
        var endDate = new Date(document.getElementById('end-date').value);
        var currentDate = new Date();

        if (startDate > currentDate || endDate > currentDate || startDate > endDate) {
            document.getElementById('error-message').innerText = "Thời gian không hợp lệ, vui lòng chọn lại!";
        } else {
            document.getElementById('error-message').innerText = "";
            // Navigate to next page (Statistics Page) here, if needed
        }
    }
</script>

</body>
</html>
