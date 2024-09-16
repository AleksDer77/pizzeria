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
        DB::table('product_property')->insert([
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'property_id' => 1,
                'product_id'  => 1,
                'value'       => '200',
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'property_id' => 3,
                'product_id'  => 1,
                'value'       => '24см',
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'property_id' => 1,
                'product_id'  => 3,
                'value'       => 250,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'property_id' => 3,
                'product_id'  => 3,
                'value'       => '32см',
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'property_id' => 2,
                'product_id'  => 11,
                'value'       => '350мл',
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'property_id' => 2,
                'product_id'  => 13,
                'value'       => '500мл',
            ],
        ]);
    }
}
