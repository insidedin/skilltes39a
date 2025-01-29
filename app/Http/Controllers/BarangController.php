<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Suplier;

class BarangController extends Controller
{
    // Tampilkan daftar barang
    public function barang()
    {
        $barangs = Barang::with('supliers')->get(); // Ambil barang beserta data suplier
        return view('barang.barang', compact('barangs'));
    }

    // Form tambah barang
    public function create()
    {
        $supliers = Suplier::all(); // Ambil semua data suplier untuk dropdown
        return view('barang.create', compact('supliers'));
    }

    // Simpan data barang baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required',
            'suplier_id' => 'required|exists:supliers,id',
            'harga' => 'required|numeric',
            'stok_awal' => 'required|integer',
            'gambar' => 'nullable|image|max:2048', // Maksimal 2MB
        ]);

        // Simpan file gambar jika ada
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images/barang', 'public');
            $validatedData['gambar'] = $path;
        }

        Barang::create($validatedData);

        return redirect()->route('barang.barang')->with('success', 'Barang berhasil ditambahkan.');
    }

    // Tampilkan form edit barang
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $supliers = Suplier::all();
        return view('barang.edit', compact('barang', 'supliers'));
    }

    // Update data barang
    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:barangs,kode_barang,' . $barang->id,
            'nama_barang' => 'required',
            'suplier_id' => 'required|exists:supliers,id',
            'harga' => 'required|numeric',
            'stok_awal' => 'required|integer',
            'gambar' => 'nullable|image|max:2048',
        ]);

        // // Update gambar jika ada
        // if ($request->hasFile('gambar')) {
        //     // Hapus gambar lama jika ada
        //     if ($barang->gambar) {
        //         \Storage::disk('public')->delete($barang->gambar);
        //     }
        //     $path = $request->file('gambar')->store('images/barang', 'public');
        //     $validatedData['gambar'] = $path;
        // }

        // $barang->update($validatedData);

        return redirect()->route('barang.barang')->with('success', 'Barang berhasil diperbarui.');
    }

    // Hapus barang
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        // // Hapus gambar jika ada
        // if ($barang->gambar) {
        //     \Storage::disk('public')->delete($barang->gambar);
        // }

        // $barang->delete();

        return redirect()->route('barang.barang')->with('success', 'Barang berhasil dihapus.');
    }
}
