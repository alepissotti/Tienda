<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/products', 301);

Route::get('products', function () {
    return view('products.index');
})->name('get_products');

Route::get('products/new', function () {
    return view('products.new');
})->name('new_product');
