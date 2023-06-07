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
        /////////////////////////////////////////////////////
        Makanan::create([
            'name_barang' => 'Ayam Bakar Kecap',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '20000',
            'data_id' => '2',
        ]);
        Makanan::create([
            'name_barang' => 'Ayam Goreng',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '18000',
            'data_id' => '2',
        ]);
        Makanan::create([
            'name_barang' => 'Ayam Bakar Cabe Ijo',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '24000',
            'data_id' => '2',
        ]);
        Makanan::create([
            'name_barang' => 'Ayam Bakar Madu',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '20000',
            'data_id' => '2',
        ]);
        Makanan::create([
            'name_barang' => 'Nasi Liwet Tahu Tempe',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '10000',
            'data_id' => '3',
        ]);
        /////////////////////////////////////////////////////
        Makanan::create([
            'name_barang' => 'Basreng Wenak Original',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '10000',
            'data_id' => '3',
        ]);
        Makanan::create([
            'name_barang' => 'Basreng Wenak Strawberi',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '12000',
            'data_id' => '3',
        ]);
        Makanan::create([
            'name_barang' => 'Basreng Wenak Balado',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '12000',
            'data_id' => '3',
        ]);
        Makanan::create([
            'name_barang' => 'Tahu Wenak ',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '10000',
            'data_id' => '3',
        ]);
        Makanan::create([
            'name_barang' => 'Tahu Wenak Pedas',
            'stock_barang' => '64',
            'jenis_barang' => 'Makanan',
            'harga_barang' => '12000',
            'data_id' => '3',
        ]);

    }
}