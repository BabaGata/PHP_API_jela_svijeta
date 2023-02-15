<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class DishIngredient extends Pivot
{
    use HasFactory;
    
    protected $table = 'dish_ingredient';

    protected $fillable = ['amount', 'type_amount'];
}
