<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'member_id',
        'name',
        'alamat',
        'umur',
        'gender',
        'no_telp',
    ];
}
