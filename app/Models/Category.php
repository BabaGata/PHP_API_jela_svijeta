<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    
    protected $table = 'categories';

    protected $fillable = ['slug'];
    public $translatedAttributes = ['title'];

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function category_translations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }
}
