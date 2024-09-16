<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        'property',
    ];


    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
