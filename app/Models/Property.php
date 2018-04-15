<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    protected $fillable  = [
        'property_id',
        'property_name',
        'description',
        'location',
        'featured_image',
        'gmap_longlitude',
        'gmap_latitude',
        'type',
        'lot_area',
        'floor_area',
        'bedrooms',
        'tnb',
        'car_garage',
        'amenities',
        'price'
    ];

    public function additionalDetails()
    {
        return $this->hasMany(AdditionalDetails::class);
    }
}
