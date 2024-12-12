<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    // Menampilkan data acara untuk user biasa
    public function index()
    {
        $acara = Acara::all(); // Ambil semua data acara
        return view('acara.index', compact('acara')); // Tampilkan view acara
    }

    // Menyimpan data acara baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'admin_id' => 'required|exists:admins,admin_id',
            'nama_acara' => 'required|string|max:255',
            'tanggal_mulai_acara' => 'required|date',
            'tanggal_selesai_acara' => 'required|date|after_or_equal:tanggal_mulai_acara',
            'deskripsi' => 'required|string',
            'status' => 'required|in:active,inactive',
            'gambar_banner' => 'required|image|max:2048', // Validasi untuk gambar
        ]);

        // Simpan data ke database
        Acara::create($data);

        return redirect()->route('acara.index')->with('success', 'Acara berhasil ditambahkan!');
    }

    // Menampilkan detail acara tertentu
    public function show($id)
    {
        $acara = Acara::with('admin')->findOrFail($id); // Ambil data acara berdasarkan ID
        return view('acara.show', compact('acara')); // Tampilkan detail acara
    }

    // Menampilkan form edit untuk acara tertentu
    public function edit($id)
    {
        $acara = Acara::findOrFail($id); // Ambil data acara berdasarkan ID
        return view('admin.acara.editacara', compact('acara')); // Tampilkan form edit
    }

    // Memperbarui data acara
    public function update(Request $request, $id)
    {
        $acara = Acara::findOrFail($id); // Cari data acara berdasarkan ID

        $data = $request->validate([
            'admin_id' => 'sometimes|exists:admins,admin_id',
            'nama_acara' => 'sometimes|string|max:255',
            'tanggal_mulai_acara' => 'sometimes|date',
            'tanggal_selesai_acara' => 'sometimes|date|after_or_equal:tanggal_mulai_acara',
            'deskripsi' => 'sometimes|string',
            'status' => 'sometimes|in:active,inactive',
            'gambar_banner' => 'sometimes|image|max:2048',
        ]);

        // Update data di database
        $acara->update($data);

        return redirect()->route('acara.index')->with('success', 'Acara berhasil diperbarui!');
    }

    // Menghapus acara
    public function destroy($id)
    {
        $acara = Acara::findOrFail($id); // Cari data acara berdasarkan ID
        $acara->delete(); // Hapus data

        return redirect()->route('acara.index')->with('success', 'Acara berhasil dihapus!');
    }
}
