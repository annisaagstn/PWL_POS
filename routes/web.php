<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController;
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

// Halaman awal
Route::get('/', [WelcomeController::class, 'index']);

// Route untuk level
Route::get('/level', [LevelController::class, 'index']);

// Route untuk kategori
Route::get('/kategori', [KategoriController::class, 'index']);

// Route untuk user
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);           // Tampilkan semua user
    Route::post('/list', [UserController::class, 'list']);       // DataTables list JSON
    Route::get('/create', [UserController::class, 'create']);    // Form tambah user
    Route::post('/', [UserController::class, 'store']);          // Simpan user baru
    Route::get('/{id}', [UserController::class, 'show']);        // Detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);   // Form edit user
    Route::put('/{id}', [UserController::class, 'update']);      // Simpan perubahan
    Route::delete('/{id}', [UserController::class, 'destroy']);  // Hapus user
});
