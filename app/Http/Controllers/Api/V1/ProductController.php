<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Product\StoreProductRequest;
use App\Http\Requests\Api\Product\UpdateProductRequest;
use App\Http\Resources\Products\Resource\ProductResource;
use App\Models\Product;
use Illuminate\Http\Response;

/**
 * @mixin Product
 */
class ProductController extends Controller
{
    public function index()
    {
        try {
            return ProductResource::collection(Product::with('properties')->get());
        } catch (\Throwable $exception) {
            return response()->json([
                'error'   => 'ошибка',
                'message' => 'что-то пошло не так'.$exception->getMessage(),
                'class'   => get_class($exception),
            ], 500);
        }
    }

    public function store(StoreProductRequest $request): ProductResource
    {
        $data = $request->validated();
        $product = Product::query()->create($data);

        return new ProductResource($product);
    }

    public function show(Product $product): ProductResource
    {
        return new ProductResource($product->load('properties'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->update($data);
    }

    public function destroy($id): Response
    {
        Product::destroy($id);
        return response()->noContent();
    }
}
