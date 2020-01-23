<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $fillable = [
        'headline', 'description', 'image',
    ];//
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
