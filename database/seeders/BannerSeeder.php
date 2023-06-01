<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BannerPengguna;


class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerPengguna::create([
            'image' => 'bannerA.png'
        ]);
        BannerPengguna::create([
            'image' => 'bannerB.png'
        ]);
        BannerPengguna::create([
            'image' => 'bannerC.png'
        ]);

    }
}
