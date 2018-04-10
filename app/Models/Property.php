<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
//    protected $table = "properties";
//    protected $connection = "mysql";

    protected $fillable  = [
        'property_id',
        'property_name',
        'description',
        'location',
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
}
