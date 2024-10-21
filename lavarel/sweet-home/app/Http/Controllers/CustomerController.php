<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if(Auth::user()->role == 'user'){
                return redirect()->route('home');
            }
        } 
        return back()->with('error', 'Sai thông tin đăng nhập!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function signup()
    {
        return view('frontend.auth.signup');
    }

    public function signupAction(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
            'confirm_password' => 'required|string|same:password',
        ], [
            'email.unique' => 'Email này đã được sử dụng!',
            'confirm_password.same' => 'Mật khẩu xác nhận không khớp!', // Thông báo lỗi tùy chỉnh cho xác nhận mật khẩu
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
    }

    public function profile()
    {
        return view('frontend.user.profile');
    }

    public function cart()
    {
        return view('frontend.cart.index');
    }

}
