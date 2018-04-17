<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()) {
            return Auth::user()->level === "admin" ? true : false;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'property_id' => 'required|unique:properties,property_id,' . $this->id,
            'property_name' => 'required',
            'description',
            'location' => 'required',
            'city' => 'required',
            'gmap_longitude',
            'gmap_latitude',
            'youtube_url',
            'type' => 'required',
            'lot_area',
            'floor_area',
            'bedrooms',
            'tnb',
            'car_garage',
            'amenities',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'price.required' => 'Property must have a price.'
        ];
    }
}
