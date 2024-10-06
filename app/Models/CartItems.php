<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $product_id
 * @property int $cart_id
 * @property int $quantity
 * @property-read \App\Models\Cart $cart
 * @method static \Database\Factories\CartItemsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems query()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItems whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CartItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'cart_id', 'quantity',
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}
