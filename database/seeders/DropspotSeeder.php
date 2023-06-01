<?php

namespace Database\Seeders;

use App\Models\DropSpot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DropspotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DropSpot::create([
            'id_lokasi' => '1',
            'nama_dropspot' => 'Gedung GDS',
            'no_telp_pj' => '0819188818266',
        ]);
        DropSpot::create([
            'id_lokasi' => '1',
            'nama_dropspot' => 'Depan Perustakaan Kampus A',
            'no_telp_pj' => '08191293812736',
        ]);
        DropSpot::create([
            'id_lokasi' => '1',
            'nama_dropspot' => 'Gedung Fakultas Teknik',
            'no_telp_pj' => '08191293812736',
        ]);
        DropSpot::create([
            'id_lokasi' => '2',
            'nama_dropspot' => 'Titik Pos Makanan Putra',
            'no_telp_pj' => '08191293812736',
        ]);
        DropSpot::create([
            'id_lokasi' => '2',
            'nama_dropspot' => 'Titik Pos Makanan Putri',
            'no_telp_pj' => '08191293812736',
        ]);
        DropSpot::create([
            'nama_dropspot' => 'Titik Pos Makanan Lantai 1',
            'no_telp_pj' => '08191293812736',
            'id_lokasi' => '3',
        ]);
    }
}
