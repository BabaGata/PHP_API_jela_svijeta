<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Tag extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    
    protected $table = 'tags';

    protected $fillable = ['slug'];
    public $translatedAttributes = ['title'];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, $table='dish_tag',
        $foreignPivotKey = 'tag_id', $relatedPivotKey = 'dish_id')->withTimestamps();
    }

    public function tag_translations()
    {
        return $this->hasMany(TagTranslation::class);
    }
}
