<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'name','role', 'pnumber', 'image','information',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
