<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('product')->group(function () {
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::get('/food-beverage', [App\Http\Controllers\ProductController::class, 'foodBeverage'])->name('product.food-beverage');
    Route::get('/beauty-health', [App\Http\Controllers\ProductController::class, 'beautyHealth'])->name('product.beauty-health');
    Route::get('/home-care', [App\Http\Controllers\ProductController::class, 'homeCare'])->name('product.home-care');
    Route::get('/baby-kid', [App\Http\Controllers\ProductController::class, 'babyKid'])->name('product.baby-kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user,show');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');