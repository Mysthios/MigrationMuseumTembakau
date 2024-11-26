<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\ProgramDonasiController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\InfoMuseumController;

Route::get('/', [InfoMuseumController::class, 'index']);

Route::get('/koleksi', [KoleksiController::class, 'index']);
Route::get('/acara', [AcaraController::class, 'index']);
Route::get('/program-donasi', [ProgramDonasiController::class, 'index']);
Route::get('/tiket', [TiketController::class, 'index']);
