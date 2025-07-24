<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nutrition extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'calories',
        'fat',
        'carbohydrates',
        'protein',
        'unit',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}

