<?php

namespace App\Http\Resources\Properties;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Property
 */
class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
//            'value' => $this->pivot->value,
//            'key'   => $this->property,
$this->property => $this->pivot->value,
        ];
    }
}
