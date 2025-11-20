<?php

namespace App\Models;

use Database\Factories\VeterinaryClinicFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class VeterinaryClinic extends Model
{
    /** @use HasFactory<VeterinaryClinicFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
    ];

    /*
    |--------------------------------------------------------------------------
    | Eloquent Model Relationships
    |--------------------------------------------------------------------------
    */

    public function veterinarians(): hasMany
    {
        return $this->hasMany(Veterinarian::class);
    }

    public function address(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }
}
