<?php

namespace App\Http\Controllers;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function suplier()
    {
        $supliers = Suplier::all();
        return view('suplier.suplier', compact('supliers'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name_suplier' => 'required|string|max:255',
        'telp' => 'required|string|max:15', // Misalnya untuk nomor telepon
        'tgl_terdaftar' => 'required|date',
        'status' => 'required|in:Aktif,Tidak Aktif', // Validasi sesuai enum
    ]);

    Suplier::create([
        'name_suplier' => $request->name_suplier,
        'telp' => $request->telp,
        'tgl_terdaftar' => $request->tgl_terdaftar,
        'status' => $request->status,
    ]);

    return redirect()->route('suplier.suplier')->with('message', 'Suplier created successfully.');
    }

    public function edit($id)
    {
        $supliers = Suplier::findOrFail($id);
        return view('suplier.edit', compact('supliers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_suplier' => 'required|string|max:255',
            'telp' => 'required|string|max:15',
            'tgl_terdaftar' => 'required|date',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $supliers = Suplier::findOrFail($id);
        $supliers->update([
            'name_suplier' => $request->name_suplier,
            'telp' => $request->telp,
            'tgl_terdaftar' => $request->tgl_terdaftar,
            'status' => $request->status,
        ]);

        return redirect()->route('suplier.suplier')->with('message', 'Suplier updated successfully.');
    }


    public function destroy($id)
    {
        $supliers = Suplier::findOrFail($id);
        $supliers->delete();

        return redirect()->route('suplier.suplier')->with('message', 'Suplier deleted successfully.');
    }
}
