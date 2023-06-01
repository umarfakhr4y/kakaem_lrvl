<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lokasi::create([
            'nama_lokasi' => 'Universitas Negeri Jakarta',
            'no_telp' => '085163278313',
            'alamat' => 'Parkiran Belakang UNJ'
        ]);
        Lokasi::create([
            'nama_lokasi' => 'SMA IT Thariq Bin Zhiyad',
            'no_telp' => '085163278313',
            'alamat' => 'Parkiran Belakang UNJ'
        ]);
        Lokasi::create([
            'nama_lokasi' => 'Gedung Utama NET TV',
            'no_telp' => '085163278313',
            'alamat' => 'Parkiran Belakang UNJ'
        ]);
    }
}
