<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('home', function () {
    return view('frontend.home');
}) ->name('home');

Route::controller(CustomerController::class) -> group(function () {
    Route::get('login', 'login') -> name('login');
    Route::post('loginAction', 'loginAction') -> name('login.customer.action');
    Route::get('logout', 'logout') -> name('logout');
    Route::get('signup', 'signup') -> name('signup');
    Route::post('signupAction', 'signupAction') -> name('signup.action');
});

Route::middleware('auth')->group(function () {
   Route::get('profile', [CustomerController::class, 'profile']) -> name('profile');
   Route::get('cart', [CustomerController::class, 'cart']) -> name('cart');
});

Route::controller(AdminController::class) -> group(function () {
    Route::get('admin/login', 'login') -> name('login.admin');
    Route::post('admin/loginAction', 'loginAction') -> name('login.admin.action');
    // Route::get('logout', 'logout') -> name('logout');
});

Route::middleware('admin-auth')->group(function () {
    Route::get('admin', function () {
        return view('backend.dashboard');
    }) ->name('admin');

    Route::get('category', [CategoryController::class, 'index']) -> name('category.index');
    Route::get('category-create', [CategoryController::class, 'create']) -> name('category.create');
    Route::post('category-add', [CategoryController::class, 'add']) -> name('category.add');
    Route::get('category-edit/{id}', [CategoryController::class, 'edit']) -> name('category.edit');
    Route::post('category-update/{id}', [CategoryController::class, 'update']) -> name('category.update');
    Route::get('category-delete/{id}', [CategoryController::class, 'delete']) -> name('category.delete');

    Route::get('product', [ProductController::class, 'index']) -> name('product.index');
    Route::get('product-create', [ProductController::class, 'create']) -> name('product.create');
    Route::post('product-add', [ProductController::class, 'add']) -> name('product.add');
    Route::get('product-edit/{id}', [ProductController::class, 'edit']) -> name('product.edit');
    Route::post('product-update/{id}', [ProductController::class, 'update']) -> name('product.update');
    Route::get('product-delete/{id}', [ProductController::class, 'delete']) -> name('product.delete');

});


