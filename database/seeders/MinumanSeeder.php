<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Minuman;

class MinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /////////////////////////////////////////////////////////////////////////
        Minuman::create([
            'name_barang' => 'Es Teh',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '5000',
            'data_id' => '1',
        ]);
        Minuman::create([
            'name_barang' => 'Air Mineral',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '5000',
            'data_id' => '1',
        ]);
        Minuman::create([
            'name_barang' => 'Es Jeruk',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '5000',
            'data_id' => '1',
        ]);
        Minuman::create([
            'name_barang' => 'Es Buah',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '5000',
            'data_id' => '1',
        ]);
        Minuman::create([
            'name_barang' => 'Es Teler',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '5000',
            'data_id' => '1',
        ]);
        /////////////////////////////////////////////////////////////////////////
        Minuman::create([
            'name_barang' => 'Es Teh',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '3000',
            'data_id' => '2',
        ]);
        Minuman::create([
            'name_barang' => 'Air Mineral',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '5000',
            'data_id' => '2',
        ]);
        Minuman::create([
            'name_barang' => 'Es Jeruk',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '6000',
            'data_id' => '2',
        ]);
        Minuman::create([
            'name_barang' => 'Es Buah',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '99000',
            'data_id' => '2',
        ]);
        /////////////////////////////////////////////////////////////////////////
        Minuman::create([
            'name_barang' => 'Es Teh',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '3000',
            'data_id' => '3',
        ]);
        Minuman::create([
            'name_barang' => 'Air Mineral',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '5000',
            'data_id' => '3',
        ]);
        Minuman::create([
            'name_barang' => 'Es Jeruk',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '6000',
            'data_id' => '3',
        ]);
        Minuman::create([
            'name_barang' => 'Es Buah',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '9000',
            'data_id' => '3',
        ]);
        Minuman::create([
            'name_barang' => 'Es Teler',
            'stock_barang' => '64',
            'jenis_barang' => 'Minuman',
            'harga_barang' => '9000',
            'data_id' => '3',
        ]);
/////////////////////////////////////////////////////////////////////////
        // Minuman::create([
        //     'name_barang' => 'Es Teler',
        //     'stock_barang' => '64',
        //     'jenis_barang' => 'Minuman',
        //     'harga_barang' => '5000',
        //     'data_id' => '2',
        // ]);
    }
}