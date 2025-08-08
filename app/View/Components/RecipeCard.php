<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RecipeCard extends Component
{
    public $recipe;

    public function __construct($recipe)
    {
        $this->recipe = $recipe;
    }

    public function render()
    {
        return view('components.utils.recipe-card'); // Pfad zu deiner Blade-Datei
    }
}
