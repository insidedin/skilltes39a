<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kode_barang', 'nama_barang', 'suplier_id', 'harga', 'stok_awal', 'gambar',
    ];

    //relasi ke tabel suplier (suplier_id diambil dari tabel suplier)
    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
    }
}