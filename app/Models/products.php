<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'name',
        'price',
        'flavor_name',
        'description',
        'weight',
        'image',
        'region'
    ];
}
