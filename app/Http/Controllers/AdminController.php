<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;
use Illuminate\Support\Facades\Auth;
use Illumintate\Foundation\Auth\User as Authcenticable;
use App\Models\Acara;
use App\Models\Donation;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
    // Validasi input username dan password
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cari admin berdasarkan username
        $admin = \App\Models\Admin::where('username', $credentials['username'])->first();

        // Cek apakah admin ditemukan dan password cocok
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Regenerasi session ID agar session lama tidak digunakan
            $request->session()->regenerate();
        
            // Simpan informasi admin ke session
            $request->session()->put('admin_logged_in', true);
            $request->session()->put('admin_id', $admin->admin_id);
        
            // Redirect ke dashboard
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil!');
        }
        
        // Jika login gagal, redirect kembali ke halaman login dengan pesan error
        return redirect()->route('admin.login')->with('error', 'Username atau password salah.');

    }

    public function logout(Request $request)
{
    // Hapus semua session terkait admin
    $request->session()->forget(['admin_logged_in', 'admin_id']);

    // Regenerasi session ID untuk keamanan
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect ke halaman login dengan pesan logout berhasil
    return redirect()->route('admin.login')->with('success', 'Anda telah logout.');
}




    public function dashboard()
    {
        return view('admin.dashboard'); 
    }


    public function readAdminAcara()
    {
        $acaras = Acara::all();
        return view('admin.adminacara.readadminacara', compact('acaras'));
    }


    public function readAdminKoleksi()
    {
        $koleksis = Koleksi::all(); 
        return view('admin.adminkoleksi.readadminkoleksi', compact('koleksis')); 
    }
    
    
    public function readAdminTiket()
    {
        return view('admin.admintiket.readadmintiket'); 
    }

    
    public function readAdminDonasi()
    {
        $donations = Donation::all(); 
        return view('admin.adminprogramdonasi.readadmindonasi', compact('donations'));
    }


}
