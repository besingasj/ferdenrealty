<?php

namespace App\Http\Controllers;

use App\Models\AdditionalDetails;
use App\Models\Image;
use App\Models\Property;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sliders = Property::where('featured', true)->limit(3)->get();
        $propertyListingThree = Property::limit(3)->get();
        $featuredProperties = Property::where('featured', true)->get();
        $agents = User::where('level', 'agent')->orderBy('id', 'desc')->get();

        return view('realplaces.home', [
            'sliders' => $sliders,
            'propertyListingThree' => $propertyListingThree,
            'featuredProperties' => $featuredProperties,
            'agents' => $agents
        ]);
    }

    public function properties($city = null)
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

        if (!in_array($city, $cities)) {
            return redirect('/');
        }

        if (is_null($city)) {
            return redirect('/');
        }

        $properties = Property::where('city', $city)->get();

        if (is_null($properties)) {
            return redirect('/');
        }

        return view('realplaces.properties', [
            'properties' => $properties,
            'city' => $city
        ]);
    }

    public function propertyDetails($property_id)
    {
        $property = Property::where('property_id', $property_id)->first();
        $images = Image::where('property_id', $property->id)->get();
        $additional_details = AdditionalDetails::where('property_id', $property->id)->orderBy('created_at', 'desc')->get();

        $similar_properties = Property::where('property_id', '!=', $property_id)->limit(5)->get();

        return view('realplaces.property_details', [
            'property' => $property,
            'images' => $images,
            'additional_details' => $additional_details,
            'similar_properties' => $similar_properties
        ]);
    }

    public function agents()
    {
        $agents = User::where('level', 'agent')->get();
        return view('realplaces.agents', [
            'agents' => $agents
        ]);
    }

    public function agentProfile($agent_id)
    {
        $agent = User::where('level', 'agent')->where('id', $agent_id)->first();

        $properties = Property::all();

        return view('realplaces.agent_profile', [
            'agent' => $agent,
            'properties' => $properties
        ]);
    }
}
