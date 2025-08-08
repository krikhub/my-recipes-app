<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Nutrition;
use App\Models\Category;
use App\Models\Tag;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        // Kategorien anlegen
        $italian = Category::firstOrCreate(['name' => 'Italienisch']);
        $suppe = Category::firstOrCreate(['name' => 'Suppe']);

        // Tags anlegen
        $quick = Tag::firstOrCreate(['name' => 'Schnell']);
        $classic = Tag::firstOrCreate(['name' => 'Klassiker']);

        // Rezept 1: Spaghetti Carbonara
        $carbonara = Recipe::create([
            'title' => 'Spaghetti Carbonara',
            'description' => 'Ein klassisches italienisches Pastagericht.',
            'instructions' => '1. Spaghetti kochen. 2. Speck anbraten. 3. Eier und Käse vermischen. 4. Alles vermengen.',
            'image' => 'images/carbonara.jpg',
        ]);

        // Beziehungen setzen
        $carbonara->categories()->attach($italian->id);
        $carbonara->tags()->attach([$quick->id, $classic->id]);

        // Zutaten
        $carbonara->ingredients()->createMany([
            ['name' => 'Spaghetti', 'quantity' => '200g'],
            ['name' => 'Speck', 'quantity' => '100g'],
            ['name' => 'Eier', 'quantity' => '2 Stück'],
            ['name' => 'Parmesan', 'quantity' => '50g'],
        ]);

        // Nährwerte
        $carbonara->nutrition()->create([
            'calories' => 600,
            'fat' => 25,
            'carbohydrates' => 65,
            'protein' => 20,
            'unit' => 'pro Portion',
        ]);

        // Rezept 2: Tomatensuppe
        $suppeRezept = Recipe::create([
            'title' => 'Tomatensuppe',
            'description' => 'Leckere hausgemachte Tomatensuppe.',
            'instructions' => '1. Tomaten pürieren. 2. Zwiebeln anbraten. 3. Alles köcheln lassen.',
            'image' => 'images/tomato-soup.webp',
        ]);

        $suppeRezept->categories()->attach($suppe->id);
        $suppeRezept->tags()->attach([$quick->id]);

        $suppeRezept->ingredients()->createMany([
            ['name' => 'Tomaten', 'quantity' => '500g'],
            ['name' => 'Zwiebeln', 'quantity' => '1 Stück'],
            ['name' => 'Knoblauch', 'quantity' => '1 Zehe'],
            ['name' => 'Gemüsebrühe', 'quantity' => '500ml'],
        ]);

        $suppeRezept->nutrition()->create([
            'calories' => 150,
            'fat' => 5,
            'carbohydrates' => 20,
            'protein' => 3,
            'unit' => 'pro Portion',
        ]);
    }
}
