<?php

namespace App\Http\Controllers;

use App\Models\InfoMuseum;
use Illuminate\Http\Request;

class InfoMuseumController extends Controller
{
    public function index()
    {
        return InfoMuseum::with('admin')->get(); // Menampilkan semua info museum dengan admin terkait
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'admin_id' => 'required|exists:admins,admin_id',
            'nama' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'jam_operasional' => 'required',
            'kontak_phone' => 'required',
            'email' => 'required|email',
            'link_map' => 'nullable',
            'link_sosial_media' => 'nullable',
        ]);

        return InfoMuseum::create($data);
    }

    public function show($id)
    {
        return InfoMuseum::with('admin')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $museum = InfoMuseum::findOrFail($id);

        $data = $request->validate([
            'admin_id' => 'sometimes|exists:admins,admin_id',
            'nama' => 'sometimes',
            'deskripsi' => 'sometimes',
            'alamat' => 'sometimes',
            'jam_operasional' => 'sometimes',
            'kontak_phone' => 'sometimes',
            'email' => 'sometimes|email',
            'link_map' => 'nullable',
            'link_sosial_media' => 'nullable',
        ]);

        $museum->update($data);
        return $museum;
    }

    public function destroy($id)
    {
        $museum = InfoMuseum::findOrFail($id);
        $museum->delete();

        return response()->json(['message' => 'Museum info deleted successfully']);
    }
}
