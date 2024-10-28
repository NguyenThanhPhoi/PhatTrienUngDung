<?php

use Illuminate\Support\Facades\Route;

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
    return view('user.home');
});

Route::get('/home', function () {
    return view('user.home');
})->name('home');

Route::get('/menu', function () {
    return view('user.product.menu');    
})->name('menu');

Route::get('/book', function () {
    return view('user.product.details');
})->name('book-details');

Route::match(['get', 'post'], '/book-booked', function () {
    return view('user.product.details-booked');
})->name('book-booked');

Route::match(['get', 'post'],'/cart', function () {
    return view('user.cart.cart');
})->name('cart');

Route::get('/cart/checkout', function () {
    return view('user.checkout.checkout');
})->name('checkout');

Route::get('/cart/checkout/bank', function () {
    return view('user.checkout.bank');
})->name('bank');

Route::get('/cart/checkout/momo', function () {
    return view('user.checkout.momo');
})->name('momo');

Route::post('/book/booked', function () {
    return view('user.product.booked'); 
})->name('booked');