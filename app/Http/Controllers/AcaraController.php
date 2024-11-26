<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        $acara = Acara::all(); // Ambil semua data acara
        return view('acara.index', compact('acara'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'admin_id' => 'required|exists:admins,admin_id',
            'nama_acara' => 'required',
            'tanggal_mulai_acara' => 'required|date',
            'tanggal_selesai_acara' => 'required|date',
            'deskripsi' => 'required',
            'status' => 'required|in:active,inactive',
            'gambar_banner' => 'required',
        ]);

        return Acara::create($data);
    }

    public function show($id)
    {
        return Acara::with('admin')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $acara = Acara::findOrFail($id);

        $data = $request->validate([
            'admin_id' => 'sometimes|exists:admins,admin_id',
            'nama_acara' => 'sometimes',
            'tanggal_mulai_acara' => 'sometimes|date',
            'tanggal_selesai_acara' => 'sometimes|date',
            'deskripsi' => 'sometimes',
            'status' => 'sometimes|in:active,inactive',
            'gambar_banner' => 'sometimes',
        ]);

        $acara->update($data);
        return $acara;
    }

    public function destroy($id)
    {
        $acara = Acara::findOrFail($id);
        $acara->delete();

        return response()->json(['message' => 'Acara deleted successfully']);
    }
}
