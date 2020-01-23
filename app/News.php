<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'msg', 'image', 'title', 'category', 'slug',
    ];

    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
