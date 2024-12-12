<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        return Pesanan::with('metodePembayaran')->get(); // Menampilkan semua pesanan dengan relasi metode pembayaran
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'metode_pembayaran_id' => 'required|exists:metode_pembayarans,metode_pembayaran_id',
            'email' => 'required|email',
            'nama_pelanggan' => 'required',
            'nomor_hp' => 'required',
            'tanggal_berkunjung' => 'required|date',
            'jumlah_total' => 'required|numeric',
        ]);

        return Pesanan::create($data);
    }

    public function show($id)
    {
        return Pesanan::with(['metodePembayaran', 'detailPemesanans.tiket'])->findOrFail($id);
        // Include relasi metode pembayaran dan detail pemesanan (beserta tiket)
    }

    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::findOrFail($id);

        $data = $request->validate([
            'metode_pembayaran_id' => 'sometimes|exists:metode_pembayarans,metode_pembayaran_id',
            'email' => 'sometimes|email',
            'nama_pelanggan' => 'sometimes',
            'nomor_hp' => 'sometimes',
            'tanggal_berkunjung' => 'sometimes|date',
            'jumlah_total' => 'sometimes|numeric',
        ]);

        $pesanan->update($data);
        return $pesanan;
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();

        return response()->json(['message' => 'Pesanan deleted successfully']);
    }
}
