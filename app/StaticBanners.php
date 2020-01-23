<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticBanners extends Model
{
    protected $fillable = [
        'headline','pagename', 'description', 'image',
    ];//
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
