<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    protected $fillable = [
        'unit_id',
        'name',
        'kabupaten',
        'provinsi',
        'harga',
        'jumlah_kamar',
        'luas_bangunan',
        'luas_lahan',
    ];
}