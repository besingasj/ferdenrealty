<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdvancePropertySearchRequest;
use App\Http\Requests\PropertyRequest;
use App\Models\Amenity;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', [
            'properties' => $properties
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = [
            'taytay',
            'cainta',
            'antipolo',
            'binangonan',
            'teresa',
            'pasig',
            'quezon'
        ];
        return view('properties.create', [
            'cities' => $cities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        /*'property_id',
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
        'amenities'*/
        $property = new Property;
        $property->property_name = $request->property_name;
        $property->property_id = $request->property_id;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->city = $request->city;
        $property->gmap_longitude = $request->gmap_longitude;
        $property->gmap_latitude = $request->gmap_latitude;
        $property->youtube_url = $request->youtube_url;
        $property->type = $request->type;
        $property->lot_area = $request->lot_area;
        $property->floor_area = $request->floor_area;
        $property->bedrooms = $request->bedrooms;
        $property->tnb = $request->tnb;
        $property->car_garage = $request->car_garage;
        $property->amenities = $request->amenities;
        $property->price = $request->price;

        $property->save();

        return redirect()->route('properties.show', [
            'id' => $property->id
        ])->with('property_success_message', 'new property saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);

        $cities = [
            'taytay',
            'cainta',
            'antipolo',
            'binangonan',
            'teresa',
            'pasig',
            'quezon'
        ];

        $amenities = Amenity::all();

        return view('properties.show', [
            'property' => $property,
            'cities' => $cities,
            'amenities' => $amenities
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->property_name = $request->property_name;
        $property->property_id = $request->property_id;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->city = $request->city;
        $property->gmap_longitude = $request->gmap_longitude;
        $property->gmap_latitude = $request->gmap_latitude;
        $property->youtube_url = $request->youtube_url;
        $property->type = $request->type;
        $property->lot_area = $request->lot_area;
        $property->floor_area = $request->floor_area;
        $property->bedrooms = $request->bedrooms;
        $property->tnb = $request->tnb;
        $property->car_garage = $request->car_garage;
        $property->amenities = $request->amenities;
        $property->price = $request->price;

        $property->save();

        return redirect()->route('properties.show', [
            'id' => $property->id
        ])->with('property_success_message', 'new property saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect()->route('properties.index')->with([
            'property_deleted' => "Property deleted."
        ]);
    }

    public function toggleFeatured($property_id)
    {
        $property = Property::find($property_id);

        $property->featured = !$property->featured;
        $property->save();

        return redirect()->route('properties.index')->with([
            'toogleFeatured_success_message' => $property->featured ? "Featured Property" : "Unfeatured Property"
        ]);
    }

    public function advanceSearch(AdvancePropertySearchRequest $request) 
    {
        return false;
    }

    public function searchProperty(Request $request)
    {
//        ->where('name', 'like', 'T%')
        $properties = Property::where('property_name', 'like', "%" . $request->get('query') . "%")
                                ->orWhere('city', 'like', "%" . $request->get('query') . "%")->get();
        return view('properties.index', [
            'properties' => $properties
        ]);
    }
}
