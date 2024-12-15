<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class KoleksiController extends Controller
{

    public function indexadmin()
    {
        $koleksis = Koleksi::all();
        return view('admin.adminkoleksi.readadminkoleksi', compact('koleksis')); // Menggunakan 'koleksis' untuk konsistensi
    }


    public function create() {
        return view('koleksi.create');
    }

    public function store(Request $request)
    {
            //Mengambil admin yang sedang login
        $admin = Admin::find(1);  //Misalnya mencari admin dengan ID 1
        
        if ($admin) {
                //Pastikan kita menggunakan relasi yang benar
            $koleksi = new Koleksi();
            $koleksi->judul = $request->judul;
            $koleksi->deskripsi = $request->deskripsi;
            $koleksi->admin_id = $admin->admin_id; //Pastikan menggunakan admin_id dengan benar
        }
        try {
                //Validasi input
            $request->validate([
                'admin_id' => 'required|exists:admins,admin_id', 
                'judul' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048'
            ]);

            $gambarPath = null;
            if ($request->hasFile('gambar')) {
                $gambarPath = $request->file('gambar')->store('uploads','public');
            }

            Koleksi::create([
                'admin_id' => $request->admin_id, 
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambarPath
            ]);

            return redirect()->route('admin.adminkoleksi.readadminkoleksi')->with('success', 'Koleksi berhasil ditambahkan!');
        } catch (\Exception $e) {
                //Debug error jika terjadi masalah
            dd($e->getMessage());
        }

    }

    public function showKoleksi()
    {
        $koleksis = Koleksi::all(); // Ambil semua koleksi dari database
        return view('koleksi.index', compact('koleksis'));
    }

    public function edit($id)
    {
        $koleksi = Koleksi::find($id); // Mengambil data berdasarkan ID

        if (!$koleksi) {
            return redirect()->route('admin.adminkoleksi.readadminkoleksi')->with('error', 'Data tidak ditemukan.');
        }

        return view('koleksi.edit', compact('koleksi'));
    }


    public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $koleksi = Koleksi::findOrFail($id);

    $koleksi->judul = $request->input('judul');
    $koleksi->deskripsi = $request->input('deskripsi');

    if ($request->hasFile('gambar')) {
        $filePath = $request->file('gambar')->store('koleksi', 'public');
        $koleksi->gambar = $filePath;
    }

    $koleksi->save();

    return redirect()->route('admin.read_adminkoleksi')->with('success', 'Koleksi berhasil diperbarui.');
}


    public function destroy($id)
    {
        try {
            $koleksi = Koleksi::findOrFail($id);

            File::delete($koleksi->image);

            $koleksi->delete();
            return redirect()->back()->with('success', 'Koleksi berhasil dihapus!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}
