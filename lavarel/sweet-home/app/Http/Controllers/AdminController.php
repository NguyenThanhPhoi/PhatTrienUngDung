<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }

    public function loginAction(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password'); // lấy mảng chỉ chứa name = email và password
        if (Auth::attempt($credentials)) { // Sử dụng mảng $credentials để kiểm tra thông tin đăng nhập
            // Kiểm tra vai trò của người dùng
            if (auth()->user()->role === 'admin') { 
                return redirect()->route('admin'); // Chuyển hướng tới trang admin dashboard nếu là admin
            } else {
                Auth::logout(); // Đăng xuất nếu không phải admin
                return redirect()->route('login.admin')->with('status', 'Bạn không có quyền truy cập vào trang admin.');
            }
        }
        return redirect()->back()->with('status', 'Thông tin đăng nhập không hợp lệ!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.admin'); // Chuyển hướng về trang đăng nhập sau khi đăng xuất
    }
}
