<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\File;
use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    // Menampilkan data acara untuk user biasa 
    public function indexadmin()
    {
        $acaras = Acara::all(); // Ambil semua data acara
        return view('acara.index', compact('acaras')); // Tampilkan view acara
    }

    public function create() {
        return view('admin.adminacara.readadminacara');
    }

    // Menyimpan data acara baru 
    public function store(Request $request)
    {
        $admin = Admin::find(1);  //Misalnya mencari admin dengan ID 1

        if ($admin) {
            $acara = new Acara();
            $acara->admin_id = $admin->admin_id; 
            $acara->nama_acara = $request->nama_acara;
            $acara->tanggal_acara = $request->tanggal_acara;
            $acara->deskripsi_singkat = $request->deskripsi_singkat;
            $acara->deskripsi = $request->deskripsi;
            $acara->gambar = $request->gambar;
            $acara->google_map_url = $request->google_map_url;
        }
        try {

            $request->validate([
                'admin_id' => 'required|exists:admins,admin_id',
                'nama_acara' => 'required|string|max:255',
                'tanggal_acara' => 'required|date',
                'deskripsi_singkat' => 'required|string|max:255',
                'deskripsi' => 'required',
                'gambar' => 'required|image',
                'google_map_url' => 'nullable|url',
            ]);

            $gambarPath = null;
            if ($request->hasFile('gambar')) {
                $gambarPath = $request->file('gambar')->store('uploads','public');
            }

            Admin::create([
                'admin_id' => $request->admin_id,  //Tambahkan admin_id ke dalam data yang disimpan
                'judul' => $request->judul,
                'tanggal_acara' => $request->tanggal_acara,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'deskripsi' => $request->deskripsi,
                'google_map_url' => $request->google_map_url,
                'gambar' => $gambarPath
            ]);
    
            return redirect()->route('admin.adminacara.readadminacara')->with('success', 'Acara berhasil ditambahkan!');
            
        } catch (\Exception $e) {
            //Debug error jika terjadi masalah
            dd($e->getMessage());
        }
        
    }


    public function showAcara($id)
    {
        $acara = Acara::all(); // Ambil data acara berdasarkan ID
        return view('acara.index', compact('acaras')); // Tampilkan detail acara
    }


    public function edit($id)
    {
        $acara = Acara::find($id); // Mengambil data berdasarkan ID

        if (!$acara) {
            return redirect()->route('admin.adminacara.readadminacara')->with('error', 'Data tidak ditemukan.');
        }

        return view('acara.edit', compact('acara')); // Tampilkan form edit
    }

    // Memperbarui data acara
    public function update(Request $request, $id)
    {
        $request->validate([
            'admin_id' => 'required|exists:admins,admin_id',
            'nama_acara' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi_singkat' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image',
            'google_map_url' => 'nullable|url'
        ]);

        $acara = Acara::findOrFail($id); // Cari data acara berdasarkan ID
        
        $acara->nama_acara = $request->input('nama_acara');
        $acara->tanggal_acara = $request->input('tanggal_acara');
        $acara->deskripsi_singkat = $request->input('deskripsi_singkat');
        $acara->deskripsi = $request->input('deskripsi');
        $acara->google_map_url = $request->input('google_map_url');
    
        if ($request->hasFile('gambar')) {
            $filePath = $request->file('gambar')->store('acara', 'public');
            $acara->gambar = $filePath;
        }
    
        $acara->save();

        return redirect()->route('admin.read_adminacara')->with('success', 'Acara berhasil diperbarui!');
    }

    // Menghapus acara
    public function destroy($id)
    {
        try {
            $acara = Acara::findOrFail($id);

            File::delete($acara->image);

            $acara->delete();
            return redirect()->back()->with('success', 'Acara berhasil dihapus!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
