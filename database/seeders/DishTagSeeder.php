<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DishTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all();
        foreach(Dish::all() as $dish) {
            $dish->tags()->attach($tags->random()->id);
        }
        $dishes = Dish::all();
        foreach(range(1,20) as $i) {
            $dishes->random()->tags()->attach($tags->random()->id);
        }
    }
}
