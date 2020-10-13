<?php

use Illuminate\Http\Request;
use App\Product; 

Route::redirect('/', '/products', 301);

Route::get('products', function () {
    return view('products.index');
})->name('get_products');

Route::get('products/new', function () {
    return view('products.new');
})->name('new_product');

Route::post('products/new', function (Request $request) {
    $newProduct = new Product;
    $newProduct->description = $request->input('description');
    $newProduct->price = $request->input('price');
    $newProduct->save();
    return redirect()->route('get_products');
})->name('add_product');
