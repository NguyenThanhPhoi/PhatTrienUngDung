<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnPhamController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AnPhamController::class, 'home']);
Route::get('/home', [AnPhamController::class, 'home'])->name('app.home');

// routes/web.php
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard') ;


Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
