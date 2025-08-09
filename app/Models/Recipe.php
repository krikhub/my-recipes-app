<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'description',
        'instructions',
        'categories',
        'tags',
        'ingredients',
        'calories',
        'fat',
        'carbohydrates',
        'protein',
        'unit',
        'image',
    ];

    protected $casts = [
    'ingredients' => 'array',
    ];
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function nutrition()
    {
        return $this->hasOne(Nutrition::class);
    }
}

