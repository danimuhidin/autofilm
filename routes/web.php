<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/kategori-produk', function () {
    return view('kategori-produk');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/outlet', [HomeController::class, 'outlet'])->name('outlet');
Route::get('/partner', [HomeController::class, 'partner'])->name('partner');
Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
// Route::get('/detail-produk', [HomeController::class, 'detail_produk'])->name('detail-produk');
Route::get('/detail-produk/{name}', [HomeController::class, 'detail_produk'])->name('detail-produk');
Route::get('/kategori-produk', [HomeController::class, 'kategori_produk'])->name('kategori-produk');

Auth::routes();
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class)->except(['show']);
    // Tambahkan route admin lainnya di sini
    // Contoh: Route::get('/products', [ProductController::class, 'index']);

});
