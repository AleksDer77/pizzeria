<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            [
                'user_id'    => 1,
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
            ],
            [
                'user_id'    => 2,
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
            ],
            [
                'user_id'    => 3,
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
            ],
            [
                'user_id'    => 4,
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
            ],
            [
                'user_id'    => 5,
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
            ],
        ]);
    }
}
