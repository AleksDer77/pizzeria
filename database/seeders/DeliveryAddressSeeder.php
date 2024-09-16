<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('delivery_addresses')->insert([
            [
                'city'         => 'Moscow',
                'street'       => 'Lenina',
                'house_number' => 3,
                'apartment'    => 77,
            ],
            [
                'city'         => 'Moscow',
                'street'       => 'Pushkin',
                'house_number' => 28,
                'apartment'    => 79,
            ],
            [
                'city'         => 'Moscow',
                'street'       => 'Lermontova',
                'house_number' => 9,
                'apartment'    => 177,
            ],
            [
                'city'         => 'Moscow',
                'street'       => 'Lenina',
                'house_number' => 91,
                'apartment'    => 36,
            ],
            [
                'city'         => 'Moscow',
                'street'       => 'Mira',
                'house_number' => 88,
                'apartment'    => 93,
            ],
            [
                'city'         => 'Moscow',
                'street'       => 'Gagarina',
                'house_number' => 128,
                'apartment'    => 38,
            ],
            [
                'city'         => 'Moscow',
                'street'       => 'Phurmanova',
                'house_number' => 67,
                'apartment'    => 132,
            ],
        ]);
    }
}
