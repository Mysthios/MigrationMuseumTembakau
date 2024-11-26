<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/koleksi', [UserController::class, 'koleksi'])->name('user.koleksi');
Route::get('/acara', [UserController::class, 'acara'])->name('user.acara');
Route::get('/program-donasi', [UserController::class, 'programDonasi'])->name('user.programDonasi');
Route::get('/tiket', [UserController::class, 'tiket'])->name('user.tiket');
