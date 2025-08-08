<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Models\Recipe;


Route::get('/', function () {
    $recipes = \App\Models\Recipe::with(['categories', 'tags', 'ingredients', 'nutrition'])->get();
    return view('home', compact('recipes'));
});

Route::get('/search', [RecipeController::class, 'search']);

Route::get('/home', [RecipeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/rezepte/neu', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/rezepte', [RecipeController::class, 'store'])->name('recipes.store');
});


