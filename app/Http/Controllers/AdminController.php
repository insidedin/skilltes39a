<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin()
    {
        $data = Suplier::all();
        return view('suplier.suplier', compact('data'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_suplier' => 'required',
            'telp' => 'required',
            'tgl_terdaftar' => 'required',
        ]);

        Suplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('suplier.suplier')->with('message', 'Suplier created successfully.');
    }

    public function edit($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('suplier.edit', compact('suplier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        $suplier = Admin::findOrFail($id);
        $suplier->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('suplier.suplier')->with('message', 'Suplier updated successfully.');
    }

    public function destroy($id)
    {
        $suplier = Admin::findOrFail($id);
        $suplier->delete();

        return redirect()->route('suplier.suplier')->with('message', 'Suplier deleted successfully.');
    }
}
