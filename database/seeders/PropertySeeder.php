<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('properties')->insert([
            ['property' => 'Калорийность', 'created_at' => now()],
            ['property' => 'Объем', 'created_at' => now()],
            ['property' => 'Размер', 'created_at' => now()],
            ['property' => 'Вес', 'created_at' => now()],
        ]);
    }
}
