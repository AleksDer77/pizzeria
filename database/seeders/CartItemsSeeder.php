<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart_items')->insert([
            [
                'created_at' => now(),
                'product_id' => 1,
                'cart_id'    => 1,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 3,
                'cart_id'    => 1,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 4,
                'cart_id'    => 2,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 8,
                'cart_id'    => 2,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 7,
                'cart_id'    => 3,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 10,
                'cart_id'    => 3,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 11,
                'cart_id'    => 4,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 1,
                'cart_id'    => 4,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 6,
                'cart_id'    => 5,
                'quantity'   => 1,
            ],
            [
                'created_at' => now(),
                'product_id' => 13,
                'cart_id'    => 5,
                'quantity'   => 1,
            ],
        ]);
    }
}
