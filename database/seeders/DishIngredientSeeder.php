<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Ingredient;
use App\Models\DishIngredient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DishIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = Ingredient::all();
        foreach(Dish::all() as $dish) {
            $dish->ingredients()->attach($ingredients->random()->id, DishIngredient::factory()->definition());
        }
        $dishes = Dish::all();
        foreach(range(1,25) as $i) {
            $dishes->random()->ingredients()->attach($ingredients->random()->id);
        }
        foreach(range(1,15) as $i) {
            $dishes->random()->ingredients()->attach($ingredients->random()->id, DishIngredient::factory()->definition());
        }
    }
}
