<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'title', 'description','image','slug',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
