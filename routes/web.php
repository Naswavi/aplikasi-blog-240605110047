<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\KategoriArtikelController;
use App\Http\Controllers\HomeController; 

/*
|--------------------------------------------------------------------------
| ROUTE KHUSUS PENGUNJUNG (TANPA LOGIN / UAS)
|--------------------------------------------------------------------------
*/
// Halaman utama pengunjung (Menampilkan 5 artikel terbaru & widget kategori)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman detail artikel pengunjung
Route::get('/artikel/detail/{id}', [HomeController::class, 'show'])->name('artikel.detail');

// ROUTE SAKTI BYPASS GAMBAR (Harus di luar auth agar pengunjung umum bisa lihat gambarnya)
Route::get('/baca-gambar/{filename}', function ($filename) {

    $path = storage_path('app/public/gambar/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
})->name('baca.gambar');


/*
|--------------------------------------------------------------------------
| ROUTE AUTENTIKASI & CMS (BAB 10)
|--------------------------------------------------------------------------
*/
// Route untuk halaman login
Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'proses'])
    ->name('login.proses')
    ->middleware('guest');

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

// Route CMS yang dilindungi middleware auth
Route::middleware('auth')->group(function () {

    // Route untuk halaman dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Route resource untuk ketiga entitas
    Route::resource('artikel', ArtikelController::class)
        ->except(['show']);

    Route::resource('penulis', PenulisController::class)
        ->except(['show']);

    Route::resource('kategori', KategoriArtikelController::class)
        ->except(['show']);
        
});