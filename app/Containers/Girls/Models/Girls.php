<?php

namespace App\Containers\Girls\Models;

use App\Ship\Parents\Models\Model;
use Laravel\Passport\HasApiTokens;

class Girls extends Model 
{   
    protected $table= 'girls';
    
    protected $fillable = [
        'ten',
        'Vong1',
        'Vong2',
        'Vong3',

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
