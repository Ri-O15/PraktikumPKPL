<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return redirect('/index');
});


Route::get('/index', [SessionController::class, 'index']);
Route::post('/index/login', [SessionController::class, 'login']);
Route::get('/index/logout', [SessionController::class, 'logout']);
Route::get('/index/register', [SessionController::class, 'register']);
Route::post('/index/create', [SessionController::class, 'create']);
Route::get('/{city}/{key}', [PelangganController::class, 'create'])->name('product.detail');
Route::post('/save-data', [PelangganController::class, 'store'])->name('save-data');
// Rute untuk menampilkan detail produk
// Route::get('/{city}/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::get('/solo', [ProductController::class, 'showSolo'])->name('products.showSolo');
Route::get('/surabaya', [ProductController::class, 'showSurabaya'])->name('products.showSurabaya');
Route::get('/malang', [ProductController::class, 'showMalang'])->name('products.showMalang');
Route::get('/yogyakarta', [ProductController::class, 'showYogyakarta'])->name('products.showYogyakarta');
Route::get('/semarang', [ProductController::class, 'showSemarang'])->name('products.showSemarang');

Route::get('/{city}/{key}', [ProductController::class, 'show'])->name('product.detail');

