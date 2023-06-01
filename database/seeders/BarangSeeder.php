<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Makanan;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Makanan::create([
            'name_barang' => 'Mie Ayam Biasa',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '10000',
            'data_id' => '1',
        ]);
        Makanan::create([
            'name_barang' => 'Mie Ayam Bakso',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '13000',
            'data_id' => '1',
        ]);
        Makanan::create([
            'name_barang' => 'Mie Ayam Pangsit',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '15000',
            'data_id' => '1',
        ]);
        Makanan::create([
            'name_barang' => 'Bakso Biasa',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '10000',
            'data_id' => '1',
        ]);
        Makanan::create([
            'name_barang' => 'Bakso Urat',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '15000',
            'data_id' => '1',
        ]);

    }
}