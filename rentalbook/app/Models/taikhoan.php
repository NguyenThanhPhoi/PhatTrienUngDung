<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Thay đổi từ Model thành Authenticatable
use Illuminate\Notifications\Notifiable;

class taikhoan extends Authenticatable // Kế thừa từ Authenticatable
{
    use HasFactory, Notifiable; // Thêm trait Notifiable

    protected $table = 'tai_khoan';
    protected $primaryKey = 'matk';
    protected $fillable = ['email', 'matkhau', 'phanquyen'];

    // Không sử dụng timestamps nếu không có cột created_at và updated_at
    public $timestamps = false; 

    // Phương thức xác thực để lấy email
    public function getAuthIdentifierName()
    {
        return 'email'; // Trả về trường mà bạn sử dụng để xác thực
    }

    // Phương thức xác thực để lấy mật khẩu
    // public function getAuthPassword()
    // {
    //     return $this->matkhau; // Trả về mật khẩu
    // }

    // public function khachHang()
    // {
    //     return $this->belongsTo(KhachHang::class, 'email', 'email');
    // }

    // public function nhanVien()
    // {
    //     return $this->belongsTo(NhanVien::class, 'email', 'email');
    // }
}
