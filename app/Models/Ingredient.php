<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Ingredient extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    
    protected $table = 'ingredients';

    protected $fillable = ['slug'];
    public $translatedAttributes = ['title'];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, $table='dish_ingredient',
        $foreignPivotKey = 'ingredient_id', $relatedPivotKey = 'dish_id')
        ->using(DishIngredient::class)->withTimestamps()->withPivot('amount','type_amount');
    }

    public function ingredient_translations()
    {
        return $this->hasMany(IngredientTranslation::class);
    }
}
