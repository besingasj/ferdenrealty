<?php

namespace App\Http\Controllers;

use App\Models\AdditionalDetails;
use Illuminate\Http\Request;

class AdditionalDetailController extends Controller
{
    //
    public function saveNew(Request $request, $property_id)
    {
        foreach ($request->additional as $value) {
            $additional_details = AdditionalDetails::where([
                ["fields", "=", $value['field']],
                ["value", "=", $value['value']]
            ])->first();

            if (is_null($additional_details)) {
                $additional_details = new AdditionalDetails;
            }

            $additional_details->property_id = $property_id;
            $additional_details->position = (isset($value['position'])) ? $value['position'] : null;
            $additional_details->fields = $value['field'];
            $additional_details->value = $value['value'];

            $additional_details->save();
        }

        return redirect()->route('properties.show', [
            'id' => $property_id
        ])->with('additional_details_success_message', 'new details saved');
    }

    public function destroy($id, $property_id)
    {
        $delete_message = "";
        $detail = AdditionalDetails::where('id', $id)->where('property_id', $property_id)->first();

        if (!is_null($detail)) {
            $detail->delete();
            $delete_message = "Additional Details Deleted";
        }

        $delete_message = "Additional Details not found";

        return redirect()->route('properties.show', ['id' => $property_id])->with('additional_details_success_message', $delete_message);;
    }
}
