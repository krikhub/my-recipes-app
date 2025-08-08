<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Routing\Controller as BaseController;

class RecipeController extends BaseController
{
    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'instructions' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        auth()->user()->recipes()->create($validated);

        return redirect()->route('dashboard')->with('success', 'Rezept gespeichert!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $recipes = Recipe::where('title', 'like', '%' . $query . '%')->get();
        return view('search-results', compact('recipes'));
    }

   public function index(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $recipes = Recipe::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $recipes = Recipe::all();
        }
        return view('home', compact('recipes'));
    }
}