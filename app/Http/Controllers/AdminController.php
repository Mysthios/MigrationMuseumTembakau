<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return Admin::all(); // Menampilkan semua admin
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|unique:admins',
            'password' => 'required|min:6',
        ]);

        $data['password'] = bcrypt($data['password']); // Enkripsi password
        return Admin::create($data);
    }

    public function show($id)
    {
        return Admin::findOrFail($id); // Menampilkan admin berdasarkan ID
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $data = $request->validate([
            'username' => 'sometimes|unique:admins,username,' . $id . ',admin_id',
            'password' => 'sometimes|min:6',
        ]);

        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        $admin->update($data);
        return $admin;
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return response()->json(['message' => 'Admin deleted successfully']);
    }
}
