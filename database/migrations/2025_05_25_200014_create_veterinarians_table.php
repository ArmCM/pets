<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('veterinarians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('license_number');
            $table->string('specialization')->nullable();
            $table->string('specialization_license_number')->nullable();
            $table->unsignedBigInteger('veterinary_clinic_id');
            $table->timestamps();

            $table->foreign('veterinary_clinic_id')->references('id')->on('veterinarians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarians');
    }
};
