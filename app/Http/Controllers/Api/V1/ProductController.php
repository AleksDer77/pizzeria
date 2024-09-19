<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Resources\Products\Resource\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::with('properties')->get());
    }

    public function store(StoreProductRequest $request): ProductResource
    {
        $data = $request->validated();
        $product = Product::query()->create($data);

        return new ProductResource($product);
    }

    public function show($id)
    {
        if (!$product = Product::with('properties')->find($id)) {
            return response()->json([
                "message" => "Продукт не существует",
            ], 404);
        }
        return ProductResource::make($product);
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy($id): Response
    {
        Product::destroy($id);
        return response()->noContent();
    }
}
