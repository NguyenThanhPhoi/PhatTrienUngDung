<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnPhamController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Auth;

Route::get('/', [AnPhamController::class, 'home']);
Route::get('/home', [AnPhamController::class, 'home'])->name('app.home');

// routes/web.php
Route::middleware(['admin_auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard') ;
});



Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
