<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kode_barang', 'nama_barang', 'suplier_id', 'harga', 'stok_awal', 'gambar',
    ];

    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
    }
}
