<?php

namespace Database\Seeders;

use App\Models\Orderitem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Orderitem::create([
            'no_order' => 'asdqwe12301',
            'status' => 'Request',
            'quantity' => '1',
            'users_id' => '3',
            'data_id' => '1',
            'makanan_id' => '1',
        ]);
        Orderitem::create([
            'no_order' => 'asdqwe12302',
            'status' => 'On Progress',
            'quantity' => '1',
            'users_id' => '3',
            'data_id' => '1',
            'makanan_id' => '1',
        ]);
        Orderitem::create([
            'no_order' => 'asdqwe12303',
            'status' => 'Complete',
            'quantity' => '1',
            'users_id' => '3',
            'data_id' => '1',
            'makanan_id' => '1',
        ]);
    }
}
