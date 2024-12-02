<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProgramDonasiController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\InfoMuseumController;

// -----------------------------------------
// Public Routes
// -----------------------------------------
Route::get('/', [InfoMuseumController::class, 'index'])->name('info-museum.index'); // Halaman utama (Info Museum)

Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.index'); // Halaman koleksi untuk pengguna biasa
Route::get('/acara', [AcaraController::class, 'index'])->name('acara.index'); // Halaman acara
Route::get('/program-donasi', [ProgramDonasiController::class, 'index'])->name('program-donasi.index'); // Halaman program donasi
Route::get('/tiket', [TiketController::class, 'index'])->name('tiket.index'); // Halaman tiket


// -----------------------------------------
// Login Routes
// -----------------------------------------
// Route untuk halaman login
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
// Route untuk mengirimkan data login
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');
// Route untuk halaman dashboard setelah login
Route::get('admin/index', [AdminController::class, 'dashboard'])->name('admin.dashboard');


// -----------------------------------------
// Admin Routes
// -----------------------------------------
// Halaman Dashboard Admin
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
// Halaman Dashboard Admin
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route untuk Manajemen Acara (ubah menjadi readadminacara)
Route::get('admin/adminacara/readadminacara', [AdminController::class, 'readAdminAcara'])->name('admin.read_adminacara');
// Route untuk Manajemen Koleksi (ubah menjadi readadminkoleksi)
Route::get('admin/adminkoleksi/readadminkoleksi', [AdminController::class, 'readAdminKoleksi'])->name('admin.read_adminkoleksi');
// Route untuk Manajemen Koleksi (ubah menjadi readadmintiket)
Route::get('admin/admintiket/readadminkoleksi', [AdminController::class, 'readAdminTiket'])->name('admin.read_admintiket');