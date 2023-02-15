<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    
    protected $table = 'ingredients';

    protected $fillable = ['title', 'slug'];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, $table='dish_ingredient',
        $foreignPivotKey = 'ingredient_id', $relatedPivotKey = 'dish_id')
        ->using(DishIngredient::class)->withTimestamps()->withPivot('amount','type_amount');
    }
}
