<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $fillable = [
        'home', 'away', 'date',
    ];

    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
