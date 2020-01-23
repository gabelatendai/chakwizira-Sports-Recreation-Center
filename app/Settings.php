<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'name', 'pnumber2', 'address','pnumber', 'email','image', 'about', 'description',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
