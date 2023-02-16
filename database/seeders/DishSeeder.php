<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\DishTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dish::factory()->count(10)->create();
    }
}
