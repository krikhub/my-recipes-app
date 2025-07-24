<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // Welche Felder beim Mass Assignment erlaubt sind
    protected $fillable = [
        'title',
        'description',
        'instructions',
        'image',
    ];

    // Beziehungen
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function nutrition()
    {
        return $this->hasOne(Nutrition::class);
    }
}
