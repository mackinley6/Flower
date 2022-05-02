<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AllProductsController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\DB;



Route::get('/addProduct', [AddProductController::class, 'index'])->name('addProduct');
Route::post('/addProduct', [AddProductController::class, 'store']);
Route::post('/', [AllProductsController::class, 'index'])->name('allProduct');
Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
Route::view('/orders', 'orders');
Route::get('/', function () {
    return view('index');
});
