<?php

namespace App\Models;

use Database\Factories\PetFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    /** @use HasFactory<PetFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'weight',
        'breed',
        'color',
        'distinctive_marks',
        'identification_number',
        'specie',
        'user_id',
    ];

    /*
    |--------------------------------------------------------------------------
    | Eloquent Model Relationships
    |--------------------------------------------------------------------------
    */

    public function userPets(): BelongsToMany
    {
        return $this->hasMany(UserPet::class);
    }

//    public function pets(): BelongsToMany
//    {
//        return $this->belongsToMany(Pet::class)
//            ->using(UserPet::class)
//            ->withPivot(['type', 'start_date_care', 'primary']);
//    }

    public function veterinaryConsultations(): HasMany
    {
        return $this->hasMany(VeterinaryConsultation::class);
    }
}
