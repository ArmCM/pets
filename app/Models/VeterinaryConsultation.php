<?php

namespace App\Models;

use Database\Factories\VeterinaryConsultationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VeterinaryConsultation extends Model
{
    /** @use HasFactory<VeterinaryConsultationFactory> */
    use HasFactory;

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'reason_for_visit',
        'type',
        'observations',
        'status',
        'pet_id',
        'veterinarian_id',
    ];

    /*
    |--------------------------------------------------------------------------
    | Eloquent Model Relationships
    |--------------------------------------------------------------------------
    */

    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }

    public function veterinarian(): BelongsTo
    {
        return $this->belongsTo(Veterinarian::class);
    }

    public function vaccines(): HasMany
    {
        return $this->hasMany(Vaccine::class);
    }
}
