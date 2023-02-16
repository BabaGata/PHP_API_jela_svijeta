<?php

namespace Database\Factories;

use App\Models\Dish;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
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
        
        return [
            'en'=>[
                'title' => 'Title of the dish '.$id,
                'description' => 'Description of the dish '.$id,
            ],
            'hr'=>[
                'title' => 'Naslov jela '.$id,
                'description' => 'Opis jela '.$id,
            ],
            'category_id' => null,            
            'status' =>'CREATED',
        ];
    }
}
