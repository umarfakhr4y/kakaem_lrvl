<?php

namespace Database\Seeders;

use App\Models\RatingResto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RatingResto::create([
            'ulasan' => 'Makanannya Enak',
            'rating_restoran' => '4.0',
            'users_id' => '6',
            'data_id' => '1',
        ]);
        RatingResto::create([
            'ulasan' => 'Makanannya Enak juga',
            'rating_restoran' => '4.5',
            'users_id' => '6',
            'data_id' => '1',
        ]);
        RatingResto::create([
            'ulasan' => 'Makanannya Enak banget',
            'rating_restoran' => '5.0',
            'users_id' => '6',
            'data_id' => '1',
        ]);
    }
}
