<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProgramDonasiController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\InfoMuseumController;
use App\Http\Controllers\TestController;

// -----------------------------------------
// Public Routes
// -----------------------------------------
Route::get('/', [InfoMuseumController::class, 'index'])->name('info-museum.index'); // Halaman utama (Info Museum)

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
Route::get('admin/index', [AdminController::class, 'dashboard'])->name('admin.dashboard.index');

// -----------------------------------------
// Admin Routes
// -----------------------------------------
// Halaman Dashboard Admin
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route untuk Manajemen Acara (ubah menjadi readadminacara)
Route::get('admin/adminacara/readadminacara', [AdminController::class, 'readAdminAcara'])->name('admin.read_adminacara');
// Route untuk Manajemen Koleksi (ubah menjadi readadminkoleksi)
Route::get('admin/adminkoleksi/readadminkoleksi', [AdminController::class, 'readAdminKoleksi'])->name('admin.read_adminkoleksi');

// -----------------------------------------
// Admin Acara Routes
// -----------------------------------------
Route::get('acara', [AcaraController::class, 'showAcara'])->name('acara.show'); // User
Route::get('acara/{id}', [AcaraController::class, 'detailAcara'])->name('acara.detail'); // User
Route::get('admin/acara', [AcaraController::class, 'indexAdmin'])->name('admin.acara.index'); // Halaman utama admin acara
Route::post('admin/acara/store', [AcaraController::class, 'store'])->name('admin.acara.store');
Route::get('admin/acara/{id}/edit', [AcaraController::class, 'edit'])->name('admin.acara.edit'); // Form edit acara
Route::put('admin/acara/{id}', [AcaraController::class, 'update'])->name('admin.acara.update'); // Memperbarui data acara
Route::delete('admin/acara/{id}', [AcaraController::class, 'destroy'])->name('admin.acara.destroy');


// -----------------------------------------
// Admin Koleksi Routes
// ----------------------------------------- 
Route::get('koleksi', [KoleksiController::class, 'showKoleksi'])->name('koleksi.show'); // User
Route::get('koleksi/{id}', [KoleksiController::class, 'detailKoleksi'])->name('koleksi.detail'); // User
Route::get('admin/koleksi', [KoleksiController::class, 'indexAdmin'])->name('admin.koleksi.index'); // Halaman utama admin koleksi
Route::post('admin/koleksi/store', [KoleksiController::class, 'store'])->name('admin.koleksi.store'); // Menyimpan data koleksi baru
Route::get('admin/koleksi/{id}/edit', [KoleksiController::class, 'edit'])->name('admin.koleksi.edit'); // Form edit koleksi
Route::put('admin/koleksi/{id}', [KoleksiController::class, 'update'])->name('admin.koleksi.update'); // Memperbarui data koleksi
Route::delete('admin/koleksi/{id}', [KoleksiController::class, 'destroy'])->name('admin.koleksi.destroy'); // Menghapus koleksi

// -----------------------------------------
// Admin Tiket Routes 
// -----------------------------------------
Route::get('admin/tiket', [TiketController::class, 'readAdminTiket'])->name('admin.tiket.index');
Route::get('admin/tiket', [TiketController::class, 'readAdminTiket'])->name('admin.read_admintiket');


// Routes for User Management
Route::get('/users', [UserController::class, 'loadAllUsers']);
Route::get('/add/user', [UserController::class, 'loadAddUserForm']);
Route::post('/add/user', [UserController::class, 'AddUser'])->name('AddUser');
Route::get('/edit/{id}', [UserController::class, 'loadEditForm']);
Route::post('/edit/user', [UserController::class, 'EditUser'])->name('EditUser');
Route::get('/delete/{id}', [UserController::class, 'deleteUser']);
