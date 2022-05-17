<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'productList'])->name('products.list');

Route::controller(CartController::class)->group(function () {
    Route::get('cart', 'cartList')->name('cart.list');
    Route::post('cart', 'addToCart')->name('cart.store');
    Route::post('update-cart', 'updateCart')->name('cart.update');
    Route::post('remove', 'removeCart')->name('cart.remove');
    Route::post('clear', 'clearAllCart')->name('cart.clear');
});
