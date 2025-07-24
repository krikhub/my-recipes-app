<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        DB::table('recipes')->insert([
            [
                'title' => 'Spaghetti Carbonara',
                'description' => 'Ein klassisches italienisches Pastagericht.',
                'instructions' => '1. Spaghetti kochen. 2. Speck anbraten. 3. Eier und Käse vermischen. 4. Alles vermengen.',
                'image' => 'images/carbonara.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tomatensuppe',
                'description' => 'Leckere hausgemachte Tomatensuppe.',
                'instructions' => '1. Tomaten pürieren. 2. Zwiebeln anbraten. 3. Alles köcheln lassen.',
                'image' => 'images/tomatensuppe.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
