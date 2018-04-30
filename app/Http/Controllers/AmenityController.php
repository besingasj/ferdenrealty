<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenityRequest;
use App\Models\Amenity;
use App\Models\Property;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    public function attachDetach(Request $request, $property_id)
    {
        $property = Property::with('amenities')->find($property_id);

        if (is_null($property)) {
            return redirect()->route('properties.show', [
                'property' => $property_id
            ])->with([
                'amenities_error_message' => 'no property found!'
            ]);
        }

        if ($request->amenities) {
            $amenities = [];
            foreach ($request->amenities as $key => $value) {
                $amenity = Amenity::where('name', $key)->first();

                if (!is_null($amenity)) {
                    if ($value == "on") {
                        array_push($amenities, $amenity->id);
                    }
                }

            }

            $property->amenities()->sync($amenities);

            return redirect()->route('properties.show', [
                'property' => $property_id
            ])->with([
                'amenities_success_message' => 'Amenity has been sync.'
            ]);
        } else {
            return redirect()->route('properties.show', [
                'property' => $property_id
            ])->with([
                'amenities_error_message' => 'please select amenities'
            ]);
        }
    }

    public function index()
    {
//        $properties = Property::all();
//        return view('properties.index', [
//            'properties' => $properties
//        ]);
        $amenities = Amenity::orderBy('created_at', 'desc')->get();
        return view('amenities.index', [
            'amenities' => $amenities
        ]);
    }

    public function store(AmenityRequest $request)
    {
        $amenity = new Amenity;
        $amenity->name = $request->name;
        $amenity->save();

        return redirect()->route('properties.amenites.index')->with([
            'new_amenity_success' => 'new amenity added.'
        ]);
    }

    public function delete($id)
    {

        $amenity = Amenity::find($id);
//        $amenity->delete();

        return redirect()->route('properties.amenites.index');
    }
}
