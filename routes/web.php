<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita/{berita}', [HomeController::class, 'show'])->name('berita.detail');

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login']);
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('berita', \App\Http\Controllers\BeritaController::class);
        Route::resource('kategori', \App\Http\Controllers\KategoriController::class);
        Route::resource('tag', \App\Http\Controllers\TagController::class);
    });
});
