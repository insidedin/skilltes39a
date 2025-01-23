<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = ['name_suplier', 'telp', 'tgl_terdaftar', 'status'];
}
