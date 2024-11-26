<?php

namespace App\Http\Controllers;

use App\Models\ProgramDonasi;
use Illuminate\Http\Request;

class ProgramDonasiController extends Controller
{
    public function index()
    {
        return ProgramDonasi::with('admin')->get(); // Menampilkan semua program donasi dengan admin terkait
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'admin_id' => 'required|exists:admins,admin_id',
            'judul' => 'required',
            'deskripsi' => 'required',
            'jumlah_target' => 'required|numeric',
            'jumlah_sekarang' => 'nullable|numeric',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'status' => 'required|in:active,inactive',
            'gambar' => 'nullable',
        ]);

        $data['jumlah_sekarang'] = $data['jumlah_sekarang'] ?? 0; // Default nilai 0 jika kosong
        return ProgramDonasi::create($data);
    }

    public function show($id)
    {
        return ProgramDonasi::with('admin')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $program = ProgramDonasi::findOrFail($id);

        $data = $request->validate([
            'admin_id' => 'sometimes|exists:admins,admin_id',
            'judul' => 'sometimes',
            'deskripsi' => 'sometimes',
            'jumlah_target' => 'sometimes|numeric',
            'jumlah_sekarang' => 'nullable|numeric',
            'tanggal_mulai' => 'sometimes|date',
            'tanggal_selesai' => 'sometimes|date',
            'status' => 'sometimes|in:active,inactive',
            'gambar' => 'nullable',
        ]);

        $program->update($data);
        return $program;
    }

    public function destroy($id)
    {
        $program = ProgramDonasi::findOrFail($id);
        $program->delete();

        return response()->json(['message' => 'Program donasi deleted successfully']);
    }
}
