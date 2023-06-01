<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Data;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Data::create([
            'name_restoran' => 'Mie Ayam & Bakso Mas Dimas',
            'notelp_restoran' => '081826327623',
            'alamat_restoran' => 'Depan Gedung L UNJ',
            'banner_restoran' => 'resto1.png',
            'status' => 'Active',
            'users_id' => '2',
        ]);
        Data::create([
            'name_restoran' => 'Ayam Bakar Pak Luis',
            'notelp_restoran' => '082117117823',
            'alamat_restoran' => 'Parkiran Belakang UNJ',
            'banner_restoran' => 'resto2.png',
            'status' => 'Active',
            'users_id' => '4',
        ]);
        Data::create([
            'name_restoran' => 'Ayam Geprek Bang Dika',
            'notelp_restoran' => '081131724237',
            'alamat_restoran' => 'Depan Gedung B UNJ',
            'banner_restoran' => 'resto3.png',
            'status' => 'Active',
            'users_id' => '5',
        ]);
        Data::create([
            'name_restoran' => 'Deilacks',
            'notelp_restoran' => '082225678767',
            'alamat_restoran' => 'Depan Gedung F UNJ',
            'banner_restoran' => 'resto4.png',
            'status' => 'Active',
            'users_id' => '6',
        ]);
        Data::create([
            'name_restoran' => 'Warung PAK JOHN',
            'notelp_restoran' => '085163278313',
            'alamat_restoran' => 'Parkiran Belakang UNJ',
            'banner_restoran' => 'resto5.png',
            'status' => 'Not Active',
            'users_id' => '7',
        ]);
    }
}