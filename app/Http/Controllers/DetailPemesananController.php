<?php

namespace App\Http\Controllers;

use App\Models\DetailPemesanan;
use Illuminate\Http\Request;

class DetailPemesananController extends Controller
{
    public function index()
    {
        return DetailPemesanan::with(['pesanan', 'tiket'])->get(); 
        // Menampilkan semua detail pemesanan dengan relasi pesanan dan tiket
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pesanan_id' => 'required|exists:pesanans,pesanan_id',
            'tiket_id' => 'required|exists:tikets,tiket_id',
            'kuantitas' => 'required|integer|min:1',
            'subtotal' => 'required|numeric',
        ]);

        return DetailPemesanan::create($data);
    }

    public function show($id)
    {
        return DetailPemesanan::with(['pesanan', 'tiket'])->findOrFail($id); 
        // Menampilkan detail pemesanan berdasarkan ID dengan relasi
    }

    public function update(Request $request, $id)
    {
        $detail = DetailPemesanan::findOrFail($id);

        $data = $request->validate([
            'pesanan_id' => 'sometimes|exists:pesanans,pesanan_id',
            'tiket_id' => 'sometimes|exists:tikets,tiket_id',
            'kuantitas' => 'sometimes|integer|min:1',
            'subtotal' => 'sometimes|numeric',
        ]);

        $detail->update($data);
        return $detail;
    }

    public function destroy($id)
    {
        $detail = DetailPemesanan::findOrFail($id);
        $detail->delete();

        return response()->json(['message' => 'Detail Pemesanan deleted successfully']);
    }
}
