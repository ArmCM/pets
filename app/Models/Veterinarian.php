<?php

namespace App\Models;

use Database\Factories\VeterinarianFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class Veterinarian extends Model
{
    /** @use HasFactory<VeterinarianFactory> */
    use HasFactory, HasRoles;

    /**
     * @inheritdoc
     */
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

    public function veterinaryConsultations(): HasMany
    {
        return $this->hasMany(VeterinaryConsultation::class);
    }
}
