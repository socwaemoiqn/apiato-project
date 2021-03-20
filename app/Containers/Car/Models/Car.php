<?php

namespace App\Containers\Car\Models;

use App\Ship\Parents\Models\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'name'

    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

 
}
