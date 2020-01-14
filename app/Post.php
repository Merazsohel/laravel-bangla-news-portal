<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function getCategoryIdAttribute($value)
    {
        return Category::where('id', $value)->first()->name;
    }
}
