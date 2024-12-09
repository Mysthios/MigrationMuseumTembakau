<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        return Donasi::with(['program', 'metodePembayaran'])->get(); // Menampilkan semua donasi dengan relasi program dan metode pembayaran
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'program_id' => 'required|exists:program_donasis,program_id',
            'metode_pembayaran_id' => 'required|exists:metode_pembayarans,metode_pembayaran_id',
            'nama_donatur' => 'required',
            'email' => 'nullable|email',
            'jumlah' => 'required|numeric',
            'status_pembayaran' => 'required|in:pending,completed',
        ]);

        return Donasi::create($data);
    }

    public function show($id)
    {
        return Donasi::with(['program', 'metodePembayaran'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $donasi = Donasi::findOrFail($id);

        $data = $request->validate([
            'program_id' => 'sometimes|exists:program_donasis,program_id',
            'metode_pembayaran_id' => 'sometimes|exists:metode_pembayarans,metode_pembayaran_id',
            'nama_donatur' => 'sometimes',
            'email' => 'nullable|email',
            'jumlah' => 'sometimes|numeric',
            'status_pembayaran' => 'sometimes|in:pending,completed',
        ]);

        $donasi->update($data);
        return $donasi;
    }

    public function destroy($id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();

        return response()->json(['message' => 'Donasi deleted successfully']);
    }
}
