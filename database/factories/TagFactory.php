<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
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
        $slug_var = 'Tag '.$id;
        
        return [
            'en'=>[
                'title' => 'Tag ENG '.$id,
            ],
            'hr'=>[
                'title' => 'Tag HRV '.$id,
            ],
            'slug' => Str::slug($slug_var),
        ];
    }
}
