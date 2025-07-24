<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;


Route::get('/', function () {
    $recipes = Recipe::all();
    return view('home', compact('recipes'));
});

Route::get('/rezepte', function () {
    return view('rezepte');
});

