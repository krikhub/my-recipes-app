<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_id', 'name', 'quantity'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
