<?php

namespace App\Models;

use App\Orders\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'amount',
        'address_id', 'user_id',
    ];

    protected $casts = [
        'status' => OrderStatusEnum::class,
        //        'amount' =>
    ];
}
