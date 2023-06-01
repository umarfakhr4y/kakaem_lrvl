<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerPengguna extends Model
{
    use HasFactory;
    protected $table = 'bannerpenggunas';

    protected $fillable = [
        'image'
    ];
}
