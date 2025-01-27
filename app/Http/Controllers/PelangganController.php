<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.pelanggan', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_pelanggan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telp' => 'required|string|max:15',
        ]);

        Pelanggan::create([
            'name_pelanggan' => $request->name_pelanggan,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);

        return redirect()->route('pelanggan.pelanggan')->with('message', 'Pelanggan created successfully.');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_pelanggan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telp' => 'required|string|max:15',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update([
            'name_pelanggan' => $request->name_pelanggan,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);

        return redirect()->route('pelanggan.pelanggan')->with('message', 'Pelanggan updated successfully.');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.pelanggan')->with('message', 'Pelanggan deleted successfully.');
    }
}
