<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin()
    {
        $data = Admin::all();
        return view('admin.admin', compact('data'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.admin')->with('message', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:admins,email,' . $id,
        'password' => 'nullable|min:6', // Password opsional
    ]);

    $admin = Admin::findOrFail($id);

    // Update data admin
    $admin->name = $request->name;
    $admin->email = $request->email;

    // Periksa apakah password diisi, lalu update dengan enkripsi
    if ($request->password) {
        $admin->password = Hash::make($request->password);
    }

    // Simpan perubahan
    $admin->save();

    return redirect()->route('admin.admin')->with('message', 'Admin updated successfully.');
    }


    public function destroy($id)
    {
        $admin= Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.admin')->with('message', 'Admin deleted successfully.');
    }
}
