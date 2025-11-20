<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    protected $fillable = [
        'street',
        'house_number',
        'apartment_number',
        'settlement',
        'municipality',
        'postal_code',
        'city',
        'state',
        'country',
        'addressable_id',
        'addressable_type',
    ];

    /*
    |--------------------------------------------------------------------------
    | Eloquent Model Relationships
    |--------------------------------------------------------------------------
    */

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }
}
