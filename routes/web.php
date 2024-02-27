<?php

use Illuminate\Http\Request;
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
    return view('pages.home.index');
});

Route::get('/products', function () {
    return view('pages.products.index');
});

Route::get('/add-product', function () {
    return view('pages.products.addProduct');
});

Route::post('/upload-image', function (Request $request) {
    dd($request);
})->name('upload');

Route::get('/category', function () {
    return view('pages.products.category');
});
