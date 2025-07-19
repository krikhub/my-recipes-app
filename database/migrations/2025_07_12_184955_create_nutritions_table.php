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
        Schema::create('nutritions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recepie_id')->contstrained()->delete('cascade');
            $table->integer('calories');
            $table->float('fat');
            $table->float('carbohydrates');
            $table->float('protein');
            $table->string('unit')->default('per portion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritions');
    }

    public function recipe() {
        return $this->belongsTo(Recipe::class);
    }

};
