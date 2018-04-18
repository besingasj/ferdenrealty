<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sliders = Property::where('featured', true)->limit(3)->get();
        $propertyListingThree = Property::limit(3)->get();
        $featuredProperties = Property::where('featured', true)->get();

        return view('realplaces.home', [
            'sliders' => $sliders,
            'propertyListingThree' => $propertyListingThree,
            'featuredProperties' => $featuredProperties
        ]);
    }

    public function properties($city = null)
    {
        $properties = Property::all();

        return view('realplaces.properties', [
            'properties' => $properties
        ]);
    }

    public function propertyDetails($property_id)
    {
        return view('realplaces.property_details');
    }
}
