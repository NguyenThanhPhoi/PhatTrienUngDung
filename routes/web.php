<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\DB;
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
    return view('admin-book.home');
})->name('admin-book.home');

Route::get('/insertBook', function () {
    return view('books.insertBook'); 
})->name('insertBook');

Route::get('/updateBook', function () {
    return view('books.updateBook'); 
})->name('updateBook');

Route::get('/brokenBooks', function () {
    return view('statistics.brokenBooks'); 
})->name('statistics');
Route::get('/rentalFrequency', function () {
    return view('statistics.rentalFrequency'); 
})->name('rentalFrequency');
