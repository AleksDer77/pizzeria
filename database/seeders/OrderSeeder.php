<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'status'     => 'canceled',
                'amount'     => 3570,
                'address_id' => 3,
                'user_id'    => 4,
            ],
            [
                'status'     => 'canceled',
                'amount'     => 2200,
                'address_id' => 1,
                'user_id'    => 2,
            ],
            [
                'status'     => 'canceled',
                'amount'     => 7830,
                'address_id' => 2,
                'user_id'    => 3,
            ],
            [
                'status'     => 'canceled',
                'amount'     => 6300,
                'address_id' => 4,
                'user_id'    => 1,
            ],
        ]);
    }
}
