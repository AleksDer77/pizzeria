<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PropertyValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id', 'product_id', 'value',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function property()
    {
        return $this->belongsTo(ProductProperty::class, 'property_values', 'product_property_id',
            'product_id')->wihtPivot('value', 'product_property_id');
    }
}
