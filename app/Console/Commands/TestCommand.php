<?php

namespace App\Console\Commands;

use App\Http\Resources\Products\Resource\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductProperty;
use App\Models\PropertyValue;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;


class TestCommand extends Command
{
    protected $signature = 'app:test';

    protected $description = 'Command description';

    public function handle()
    {
        $products = Product::with('properties')->get();
        dd($products->toArray());
    }
}
