<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $id = 0;
        $id++;
        $slug_var = 'Ingredient '.$id;

        return [
            'en'=>[
                'title' => 'Ingredient '.$id,
            ],
            'hr'=>[
                'title' => 'Sastojak '.$id,
            ],
            'slug' => Str::slug($slug_var),
        ];
    }
}
