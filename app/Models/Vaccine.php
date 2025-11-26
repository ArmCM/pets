<?php

namespace App\Models;

use Database\Factories\VaccineFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vaccine extends Model
{
    /** @use HasFactory<VaccineFactory> */
    use HasFactory;

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'type',
        'laboratory',
        'application_date',
        'next_application_date',
        'veterinary_consultation_id',
    ];

    /*
    |--------------------------------------------------------------------------
    | Eloquent Model Relationships
    |--------------------------------------------------------------------------
    */

    public function veterinaryConsultation(): BelongsTo
    {
        return $this->belongsTo(VeterinaryConsultation::class);
    }
}
