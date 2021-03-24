<?php

namespace App\Containers\Girls\Models;

use App\Ship\Parents\Models\Model;

class Fans extends Model
{
    protected $table= 'fans';
    protected $fillable = [
        'ten',
        'tuoi',
        

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
    public function girls()
{
    return $this->belongsTo(Girls::class);
}

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'fans';
}
