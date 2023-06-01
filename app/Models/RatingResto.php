<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingResto extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasMany(User::class, 'id');
    }
    public function data()
    {
        return $this->belongsTo(Data::class);
    }
    protected $table = 'rating_restos';
    protected $fillable = [
        'ulasan',
        'rating_restoran',
        'users_id',
        'data_id'
    ];
}
