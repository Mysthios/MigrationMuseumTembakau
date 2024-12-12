<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    public function index()
    {
        return MetodePembayaran::with('admin')->get(); 
        // Menampilkan semua metode pembayaran dengan relasi admin terkait
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'admin_id' => 'required|exists:admins,admin_id',
            'nama_metode' => 'required',
            'nomor_akun' => 'required',
            'nama_bank' => 'nullable',
        ]);
        return MetodePembayaran::create($data);
        
    }

    public function show($id)
    {
        return MetodePembayaran::with('admin')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $metode = MetodePembayaran::findOrFail($id);

        $data = $request->validate([
            'admin_id' => 'sometimes|exists:admins,admin_id',
            'nama_metode' => 'sometimes',
            'nomor_akun' => 'sometimes',
            'nama_bank' => 'nullable',
        ]);

        $metode->update($data);
        return $metode;
    }

    public function destroy($id)
    {
        $metode = MetodePembayaran::findOrFail($id);
        $metode->delete();

        return response()->json(['message' => 'Metode Pembayaran deleted successfully']);
    }
}
