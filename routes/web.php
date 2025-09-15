<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DashboardController;

// Halaman utama
Route::get('/', function () {
    return view('welcome'); // resources/views/welcome.blade.php
});

// Halaman Portofolio
Route::get('/portofolio', function () {
    return view('portofolio'); // resources/views/portofolio.blade.php
});

// Halaman Struktur
Route::get('/struktur', function () {
    return view('struktur'); // resources/views/struktur.blade.php
});

// Halaman Login
Route::get('/login', function () {
    return view('login'); // resources/views/login.blade.php
});

// Halaman Dashboard (ambil data dari controller)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CRUD Layanan (pakai Controller)
Route::resource('layanans', LayananController::class);

// Halaman layanan utama (index)
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
