<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
//     Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('/detail-produk', [HomeController::class, 'detail_produk'])->name('detail-produk');
// Route::get('/kategori-produk', [HomeController::class, 'kategori_produk'])->name('kategori-produk');
// Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
// Route::get('/outlet', [HomeController::class, 'outlet'])->name('outlet');
// Route::get('/partner', [HomeController::class, 'partner'])->name('partner');
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function produk()
    {
        return view('produk');
    }

    public function detail_produk($name)
    {
        $name = str_replace('-', ' ', $name);
        return view('detail-produk', ['name' => $name]);
    }

    public function kategori_produk()
    {
        return view('kategori-produk');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function outlet()
    {
        return view('outlet');
    }

    public function partner()
    {
        return view('partner');
    }
}
