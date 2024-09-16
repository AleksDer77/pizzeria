<?php

namespace App\Http\Resources\Products\Resource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        dd($request);
//        return [
//            'name'        => $this->name,
//            'description' => $this->description,
//            'price'       => $this->price,
//
//        ];
        return parent::toArray($request);
    }

}
