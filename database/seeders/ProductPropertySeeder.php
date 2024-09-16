<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_properties')->insert([
            ['property' => 'Ккал', 'created_at' => now()],
            ['property' => 'Объем', 'created_at' => now()],
            ['property' => 'Размер', 'created_at' => now()],
            ['property' => 'Вес', 'created_at' => now()],
        ]);
    }
}
