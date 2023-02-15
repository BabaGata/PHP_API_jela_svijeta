<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DishIngredient>
 */
class DishIngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    public function definition()
    {
        $type = $this->faker->randomElement(['dkg','g','dcl','l','per_piece']);
        return [
            'amount' => $type=='per_piece'? $this->faker->randomDigitNotNull() : $this->faker->randomFloat(1, 10, 100),
            'type_amount'=>$type,
        ];
    }
}