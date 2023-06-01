<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'AdminSatu',
            'email' => 'adminsatu@admin.com',
            'lahir' => '2020-11-22 00:00:00',
            'no_telp' => '081918411690',
            'alamat' => 'Jl. Pondok kopi',
            'image' => 'admin_master.jpg',
            'password' => bcrypt('123123123'),
        ]);
        $admin->assignRole('admin');

        $mitra = User::create([
            'name' => 'mitraSatu',
            'email' => 'mitrasatu@mitra.com',
            'lahir' => '2020-11-22 00:00:00',
            'no_telp' => '081918411690',
            'alamat' => 'Jl. Pondok kopi',
            'image' => 'mitra_master.jpg',
            'password' => bcrypt('123123123'),
        ]);
        $mitra->assignRole('mitra');

        $pengguna = User::create([
            'name' => 'penggunaSatu',
            'email' => 'penggunasatu@pengguna.com',
            'lahir' => '2020-1-22 00:00:00',
            'no_telp' => '081918411690',
            'alamat' => 'Jl. Pondok kopi',
            'image' => 'pengguna_master.jpg',
            'password' => bcrypt('123123123'),
        ]);
        $pengguna->assignRole('pengguna');


        //mitra tambahan
        //Ayam bakar
        $mitra = User::create([
            'name' => 'Dimas Suryonegoro',
            'email' => 'dimassry@gmail.com',
            'lahir' => '2020-11-22 00:00:00',
            'no_telp' => '0818662020',
            'alamat' => 'Jl. jalan mulu dah',
            'image' => 'jeki.jpg',
            'password' => bcrypt('123123123'),
        ]);
        $mitra->assignRole('mitra');
        //ayam geprek
        $mitra = User::create([
            'name' => 'Luis sepyanto',
            'email' => 'luishadeh@gmail.com',
            'lahir' => '2020-11-22 00:00:00',
            'no_telp' => '082117117823',
            'alamat' => 'jl. rumah mu',
            'image' => 'gopur.jpg',
            'password' => bcrypt('123123123'),
        ]);
        $mitra->assignRole('mitra');
        //Deilacks
        $mitra = User::create([
            'name' => 'Tatang kornering',
            'email' => 'tatangreser@gmail.com',
            'lahir' => '2020-11-22 00:00:00',
            'no_telp' => '082117117823',
            'alamat' => 'jl. yuk kapan2',
            'image' => 'mars.jpg',
            'password' => bcrypt('123123123'),
        ]);
        $mitra->assignRole('mitra');
        $mitra = User::create([
            'name' => 'Surya karbu',
            'email' => 'suryakarb@gmail.com',
            'lahir' => '2020-11-22 00:00:00',
            'no_telp' => '082117117823',
            'alamat' => 'jl. hdeh',
            'image' => 'surya.jpg',
            'password' => bcrypt('123123123'),
        ]);
        $mitra->assignRole('mitra');
    }
}