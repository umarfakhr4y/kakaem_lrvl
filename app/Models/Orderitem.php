<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;
    protected $table = 'orderitems';
    public function makanan()
    {
        return $this->belongsTo(Makanan::class, 'makanan_id');
    }
    public function data()
    {
        return $this->belongsTo(Data::class, 'data_id');
    }
    protected $fillable = [
        'no_order',
        'status',
        'users_id',
        'data_id',
        'makanan_id',
    ];
}
