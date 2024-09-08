<?php

namespace App\Console\Commands;

use App\Http\Resources\Products\Resource\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class TestCommand extends Command
{
    protected $signature = 'app:test';

    protected $description = 'Command description';

    public function handle()
    {
//        dd(DB::table('products')->where('category_id', 2)->get());
//        $category = Category::query()->find(2);
//        $products = $category->products;
//        dd($products->pluck('name'));
//        $res = ProductResource::collection(Product::all());
//        dd($res);
        $res = Product::first();
        echo $res->id . PHP_EOL;

    }
}
