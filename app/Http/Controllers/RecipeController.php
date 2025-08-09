<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Routing\Controller as BaseController;

class RecipeController extends BaseController
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $recipe = new Recipe();
        $recipe->title = $request->input('title');
        $recipe->description = $request->input('description');
        $recipe->instructions = $request->input('instructions');
        $recipe->categories = implode(',', $request->input('categories', []));
        $recipe->ingredients = $request->input('ingredients');
        $recipe->calories = $request->input('calories');
        $recipe->fat = $request->input('fat');
        $recipe->carbohydrates = $request->input('carbohydrates');
        $recipe->protein = $request->input('protein');
        $recipe->unit = $request->input('unit');

            if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Hier: direkt in public/images speichern (NICHT storage/app/public)
            $file->move(public_path('images'), $filename);

            // Pfad in DB speichern — relativ zum public Ordner
            $recipe->image = 'images/' . $filename;
        }




        $recipe->save();

        return redirect()->route('dashboard')->with('success', 'Recipe created successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $recipes = Recipe::where('title', 'like', '%' . $query . '%')->get();
        return view('search-results', compact('recipes'));
    }

    public function index(Request $request)
{
    $category = $request->input('category');
    $query = Recipe::query();

    if ($category) {
        // Rezepte filtern, die diese Kategorie enthalten
        $query->where('categories', 'like', '%' . $category . '%');
    }

    $recipes = $query->get();

    // Alle möglichen Kategorien (könntest du auch aus DB ziehen)
    $allCategories = [
        'breakfast', 'lunch', 'dinner', 'dessert',
        'snacks', 'beverages', 'vegetarian', 'vegan',
        'gluten-free', 'low-carb', 'quick-easy', 'slow-cooker',
        'holiday-special', 'international', 'kids-friendly'
    ];

    return view('home', compact('recipes', 'allCategories', 'category'));
}

    public function show(Recipe $recipe)
    {
        return view('show', ['recipe' => $recipe]);
    }
}
