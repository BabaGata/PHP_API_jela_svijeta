<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Dish extends Model implements TranslatableContract
{
    use HasFactory, Translatable, SoftDeletes;
    
    protected $table = 'dishes';
    protected $with = ['translations'];

    public $translatedAttributes = ['title', 'description'];
    protected $fillable = ['category_id', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function dish_translations()
    {
        return $this->hasMany(DishTranslation::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, $table='dish_tag',
        $foreignPivotKey = 'dish_id', $relatedPivotKey = 'tag_id')->withTimestamps();
        // define relationship
    }

    public function ingredients()
    {
        return $this->belongsToMany(
        Ingredient::class, $table='dish_ingredient',
        $foreignPivotKey = 'dish_id', $relatedPivotKey = 'ingredient_id'
        )->using(DishIngredient::class)->withTimestamps()->withPivot('amount','type_amount');
    }
}
