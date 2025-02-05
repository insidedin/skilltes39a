<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = [
        'name_suplier', 'telp', 'tgl_terdaftar', 'status',
    ];

    //relasi ke tabel barangs (mengirim id suplier kedalam tabel barang)
    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }

}