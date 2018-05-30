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
        'thumbnail',
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
        'featured',
        'deals'
    ];

    public function additionalDetails()
    {
        return $this->hasMany(AdditionalDetails::class)->orderBy('position', 'asc');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

//    public function getPriceAttribute($value)
//    {
//        return number_format($value);
//    }

    public function priceFormatted()
    {
        return number_format($this->price);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'amenity_property');
    }
}
