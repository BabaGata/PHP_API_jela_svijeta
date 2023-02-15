<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'dishes';

    protected $fillable = ['title', 'category_id', 'status', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
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
