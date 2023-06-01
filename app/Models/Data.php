<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Data extends Model
{
    use HasFactory;
    public function makanan()
    {
        return $this->hasMany(Makanan::class, 'data_id');
    }
    public function minuman()
    {
        return $this->hasMany(Minuman::class, 'data_id');
    }
    public function ratingResto()
    {
        return $this->hasMany(RatingResto::class, 'data_id');
    }
    public function users()
    {
        return $this->belongsTo(Users::class);
    }
    protected $table = 'datas';
    protected $fillable = [
        'name_restoran',
        'notelp_restoran',
        'rating_restoran_overall',
        'alamat_restoran',
        'banner_restoran',
        'users_id'
    ];
}
