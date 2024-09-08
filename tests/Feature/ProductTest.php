<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_response_for_route_products_index(): void
    {
        Category::factory()->create(['id' => 1]);
        Product::factory()
            ->count(8)
            ->create();

        $response = $this->withoutExceptionHandling()->getJson('/api/v1/products');

        $response->assertStatus(200);

        $response->assertJsonCount(8, 'data');
    }
}
