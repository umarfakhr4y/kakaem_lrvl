<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropSpot extends Model
{
    use HasFactory;

    protected $table = 'drop_spots';
    protected $fillable = [
        'id_lokasi',
        'nama_dropspot',
        'no_telp_pj',
    ];
}
