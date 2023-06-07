<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(RoleSeeder::class);
       $this->call(UserSeeder::class);
       $this->call(DataSeeder::class);
       $this->call(BarangSeeder::class);
       $this->call(MinumanSeeder::class);
       $this->call(BannerSeeder::class);
       $this->call(RatingSeeder::class);
       $this->call(LokasiSeeder::class);
       $this->call(DropspotSeeder::class);
       $this->call(orderSeeder::class);
    }
}
