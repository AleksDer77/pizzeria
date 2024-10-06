<?php

namespace App\Http\Resources\Products\Resource;

use App\Http\Resources\Properties\PropertyResource;
use App\Models\Product;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

/**
 * @mixin Product
 */
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'        => $this->name,
            'description' => $this->description,
            'price'       => $this->price,
            'available'   => $this->available,
            'category_id' => $this->category_id,

            'properties' => $this->when(Route::currentRouteName() == 'products.show',
                PropertyResource::collection($this->whenLoaded('properties'))),
        ];
    }

}
