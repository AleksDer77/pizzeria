<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $city
 * @property string $street
 * @property int $house_number
 * @property int $apartment
 * @method static \Database\Factories\DeliveryAddressFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress whereApartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryAddress whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DeliveryAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'city', 'street', 'house_number', 'apartment',
    ];
}
