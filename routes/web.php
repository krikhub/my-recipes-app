<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;


Route::get('/', function () {
    $recipes = \App\Models\Recipe::with(['categories', 'tags', 'ingredients', 'nutrition'])->get();
    return view('home', compact('recipes'));
});

Route::get('/rezepte', function () {
    return view('rezepte');
});

