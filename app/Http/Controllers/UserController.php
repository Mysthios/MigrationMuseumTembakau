<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;

class UserController extends Controller
{
    public function index()
    {
        // Menampilkan halaman Info Museum
        return view('user.index');
    }

    public function koleksi()
    {
        $koleksi = Koleksi::all();
        // Menampilkan halaman Koleksi
        return view('user.koleksi');
    }

    public function acara()
    {
        // Menampilkan halaman Acara
        return view('user.acara');
    }

    public function programDonasi()
    {
        // Menampilkan halaman Program Donasi
        return view('user.program_donasi');
    }

    public function tiket()
    {
        // Menampilkan halaman Tiket
        return view('user.tiket');
    }
}
