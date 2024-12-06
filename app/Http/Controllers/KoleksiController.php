<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index()
    {
        $koleksi = Koleksi::all();
        return view('koleksi.index', compact('koleksi')); 
        
    } 

    public function store(Request $request)
    {
        $data = $request->validate([
            'admin_id' => 'required|exists:admins,admin_id',
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'kategori' => 'required',
        ]);

        return Koleksi::create($data);
    }

    public function show($id)
    {
        return Koleksi::with('admin')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $koleksi = Koleksi::findOrFail($id);

        $data = $request->validate([
            'admin_id' => 'sometimes|exists:admins,admin_id',
            'judul' => 'sometimes',
            'deskripsi' => 'sometimes',
            'gambar' => 'sometimes',
            'kategori' => 'sometimes',
        ]);

        $koleksi->update($data);
        return $koleksi;
    }

    public function destroy($id)
    {
        $koleksi = Koleksi::findOrFail($id);
        $koleksi->delete();

        return response()->json(['message' => 'Koleksi deleted successfully']);
    }
}
