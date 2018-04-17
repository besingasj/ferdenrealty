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
        'city',
        'featured_image',
        'gmap_longlitude',
        'gmap_latitude',
        'youtube_url',
        'type',
        'lot_area',
        'floor_area',
        'bedrooms',
        'tnb',
        'car_garage',
        'amenities',
        'price',
        'featured'
    ];

    public function additionalDetails()
    {
        return $this->hasMany(AdditionalDetails::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
