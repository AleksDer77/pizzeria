<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'created_at' => fake()->dateTimeBetween('-1 months', now()),
                'product_id' => 1,
                'order_id'   => 2,
                'quantity'   => 5000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-1 months', now()),
                'product_id' => 3,
                'order_id'   => 2,
                'quantity'   => 5000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-1 months', now()),
                'product_id' => 9,
                'order_id'   => 2,
                'quantity'   => 5000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-1 months', now()),
                'product_id' => 12,
                'order_id'   => 2,
                'quantity'   => 5000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-1 months', now()),
                'product_id' => 2,
                'order_id'   => 4,
                'quantity'   => 5000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-1 months', now()),
                'product_id' => 11,
                'order_id'   => 3,
                'quantity'   => 5000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-1 months', now()),
                'product_id' => 2,
                'order_id'   => 1,
                'quantity'   => 5000,
            ],
            [
                'created_at' => fake()->dateTimeBetween('-1 months', now()),
                'product_id' => 12,
                'order_id'   => 1,
                'quantity'   => 5000,
            ],


        ]);
    }
}
