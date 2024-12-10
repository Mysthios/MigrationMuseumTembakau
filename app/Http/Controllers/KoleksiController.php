<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class KoleksiController extends Controller
{
    public function index()
    {
        $koleksi = Koleksi::all();
        return view('koleksi.index', compact('koleksi')); 
        
    } 

    public function indexadmin()
    {
        $koleksis = Koleksi::all();
        return view('admin.adminkoleksi.readadminkoleksi', compact('koleksis')); // Menggunakan 'koleksis' untuk konsistensi
    }
    

    public function store(Request $request)
    {
        try {
            $request->validate([
                // 'admin_id' => 'required|exists:admins,admin_id',
                'judul' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'nullable|image|mimes:png,jpg,jpeg|max:2048'
            ]);

            $gambarPath = null;
            if ($request->file('gambar')) {
                $gambarPath = $request->file('gambar')->store('products', 'public');
            }

            Koleksi::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambarPath
            ]);
            // return Koleksi::create($data);
            return redirect()->route('admin.adminkoleksi.readadminkoleksi')->with('success', 'Koleksi berhasil ditambahkan!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function show($id)
    {
        // return Koleksi::with('admin')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        // $koleksi = Koleksi::findOrFail($id);

        // $data = $request->validate([
        //     'admin_id' => 'sometimes|exists:admins,admin_id',
        //     'judul' => 'sometimes',
        //     'deskripsi' => 'sometimes',
        //     'gambar' => 'sometimes'
        // ]);

        // $koleksi->update($data);
        // return $koleksi;
    }

    public function destroy($id)
    {
        try {
            $koleksi = Koleksi::findOrFail($id);

            File::delete($koleksi->gambar);
            $koleksi->delete();
    
            return redirect()->back()->with('success', 'Koleksi berhasil dihapus!');
            
        } catch(\Exception $th){
            dd($th->getMessage());
        }
    }

    public function showKoleksi()
    {
        $koleksis = Koleksi::all(); // Ambil semua koleksi dari database
        return view('koleksi.index', compact('koleksis'));
    }
}
