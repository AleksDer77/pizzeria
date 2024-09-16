<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ProductPropertySeeder::class,
            PropertyValueSeeder::class,
            UserSeeder::class,
            DeliveryAddressSeeder::class,
            OrderSeeder::class,
            OrderItemsSeeder::class,
            CartSeeder::class,
            CartItemsSeeder::class,

        ]);
    }
}
