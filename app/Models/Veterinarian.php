<?php

namespace App\Models;

use Database\Factories\VeterinarianFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Veterinarian extends Model
{
    /** @use HasFactory<VeterinarianFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'license_number',
        'specialization',
        'specialization_license_number',
        'veterinary_clinic_id',
    ];

    /*
    |--------------------------------------------------------------------------
    | Eloquent Model Relationships
    |--------------------------------------------------------------------------
    */

    public function veterinaryClinic(): BelongsTo
    {
        return $this->belongsTo(VeterinaryClinic::class);
    }

    public function vaccines(): HasMany
    {
        return $this->hasMany(Vaccine::class);
    }
}
