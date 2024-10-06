<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_response_for_route_products_index(): void
    {
        $response = $this->withoutExceptionHandling()->getJson(route('products.index'));

        $response->assertStatus(200);

        $count = DB::scalar('SELECT COUNT(*) FROM products;');

        $response->assertJsonCount((int) $count, 'data');
        $response->assertJsonCount(16, 'data');
    }

    public function test_product_store()
    {
        $this->withoutExceptionHandling();
        $category = Category::factory()->create();

        $data = [
            'name'        => 'Пицца-шмицца',
            'description' => 'Вкусная, свежая',
            'price'       => 300,
            'category_id' => $category->id,
            'available'   => true,
        ];

        $response = $this->post(route('products.store'), $data);

        $response->assertStatus(201);

        $product = Product::query()->latest()->first();

        $this->assertEquals($data['name'], $product->name);
        $this->assertEquals($data['description'], $product->description);
        $this->assertEquals($data['price'], $product->price);
        $this->assertEquals($data['available'], $product->available);
        $this->assertEquals($data['category_id'], $product->category_id);
    }

}
