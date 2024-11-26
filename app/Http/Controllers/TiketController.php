<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        return Tiket::with('admin')->get(); // Menampilkan semua tiket dengan admin terkait
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'admin_id' => 'required|exists:admins,admin_id',
            'tipe_tiket' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
            'jumlah_maksimal_pengunjung' => 'required|integer',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        return Tiket::create($data);
    }

    public function show($id)
    {
        return Tiket::with('admin')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $tiket = Tiket::findOrFail($id);

        $data = $request->validate([
            'admin_id' => 'sometimes|exists:admins,admin_id',
            'tipe_tiket' => 'sometimes',
            'harga' => 'sometimes|numeric',
            'deskripsi' => 'nullable',
            'jumlah_maksimal_pengunjung' => 'sometimes|integer',
            'tanggal_kadaluarsa' => 'sometimes|date',
        ]);

        $tiket->update($data);
        return $tiket;
    }

    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();

        return response()->json(['message' => 'Tiket deleted successfully']);
    }
}
