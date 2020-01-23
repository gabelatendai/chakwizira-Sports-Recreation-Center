<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = [
    'name', 'information','dob','position',  'pnumber', 'image','IdNum',
];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
