<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'caption', 'description', 'image',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
