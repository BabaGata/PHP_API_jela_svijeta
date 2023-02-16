<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Category;
use App\Models\DishTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(10)->has(
            Dish::factory()->count(3))
        ->create();
    }
}
