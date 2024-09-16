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
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
                'user_id'    => 1,
                'amount'     => 6000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
                'user_id'    => 2,
                'amount'     => 7000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
                'user_id'    => 3,
                'amount'     => 8000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
                'user_id'    => 4,
                'amount'     => 9000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-2 months', now()),
                'user_id'    => 5,
                'amount'     => 2220,
            ],
        ]);
    }
}
