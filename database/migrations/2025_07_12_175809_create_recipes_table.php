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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->longText('instructions')->nullable();
            $table->string('image')->nullable(); // Pfad zum Bild
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }

    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function nutrition() {
        return $this->hasOne(Nutrition::class);
    }

};
