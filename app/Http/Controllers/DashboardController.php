<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\Suplier;
use App\Models\Barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Hitung jumlah data dari tabel
        $totalSuplier = Suplier::count();
        $totalPelanggan = Pelanggan::count();
        $totalBarang = Barang::count();

        return view('dashboard.dashboard', compact('totalSuplier', 'totalPelanggan', 'totalBarang'));
    }
}
