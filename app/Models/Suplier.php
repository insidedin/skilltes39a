<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = [
        'name_suplier', 'telp', 'tgl_terdaftar', 'status',
    ];

    //relasi ke tabel barangs
    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }

}
