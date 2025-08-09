<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Models\Recipe;


Route::get('/', function () {
    $recipes = \App\Models\Recipe::with(['categories', 'tags', 'ingredients', 'nutrition'])->get();
    return view('home', compact('recipes'));
});

Route::get('/recipes', function(Request $request) {
    $categoryId = $request->input('category');
    $recipes = Recipe::where('category_id', $categoryId)->get();
    return view('recipes.index', ['recipes' => $recipes]);
});

Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');


Route::get('/dashboard', [RecipeController::class, 'index'])->name('dashboard');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('create');

Route::get('/search', [RecipeController::class, 'search']);

Route::get('/home', [RecipeController::class, 'index'])->name('home');

Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');






