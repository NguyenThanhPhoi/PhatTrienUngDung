@extends('user.layout.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4">Trang Thanh Toán</h2>

    <!-- Thông tin sản phẩm -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Tiền cọc</th>
                    <th>Tiền thuê</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tên Sách 1</td>
                    <td>100,000 VND</td>
                    <td>50,000 VND</td>
                    
                </tr>
                <tr>
                    <td>Tên Sách 2</td>
                    <td>120,000 VND</td>
                    <td>60,000 VND</td>
                    
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tổng tiền và Tiền ship -->
    <div class="text-end">
        <h4>Tổng tiền cọc: <span style="color: red;">220,000 VND</span></h4>
    </div>
    <div class="text-end">
        <h4>Tổng tiền thuê: <span style="color: red;">110,000 VND</span></h4>
    </div>
    <div class="text-end">
        <h4>Tiền ship: <span style="color: red;">30,000 VND</span></h4>
    </div>
    <div class="text-end">
        <h4>Tổng tiền cần thanh toán: <span style="color: red;">390,000 VND</span></h4>
    </div>

    <!-- Phương thức thanh toán -->
    <div class="mt-4">
        <h4>Chọn phương thức thanh toán</h4>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_method" id="momo" value="momo">
            <label class="form-check-label" for="momo">
                Thanh toán qua MoMo
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_method" id="bank" value="bank">
            <label class="form-check-label" for="bank">
                Thanh toán qua Ngân hàng
            </label>
        </div>
    </div>

    <!-- Nút Xác nhận thanh toán -->
    <div class="text-end mt-4">
        <button type="button" class="btn btn-primary">Xác nhận thanh toán</button>
    </div>
</div>

@endsection
