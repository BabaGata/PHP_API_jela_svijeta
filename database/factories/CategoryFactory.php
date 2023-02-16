<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
        $slug_var = 'Category '.$id;

        return [
            'en'=>[
                'title' => 'Category '.$id,
            ],
            'hr'=>[
                'title' => 'Kategorija '.$id,
            ],
            'slug' => Str::slug($slug_var),
        ];
    }
}
