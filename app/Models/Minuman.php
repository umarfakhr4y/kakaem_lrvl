<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    use HasFactory;
    public function data()
    {
        return $this->belongsTo(Data::class);
    }
    protected $table = 'minumans';
    protected $fillable = [
        'name_barang',
        'stock_barang',
        'jenis_barang',
        'harga_barang',
        'data_id'
    ];
}