<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    
    protected $table = 'tags';

    protected $fillable = ['title', 'slug'];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, $table='dish_tag',
        $foreignPivotKey = 'tag_id', $relatedPivotKey = 'dish_id')->withTimestamps();
    }
}
