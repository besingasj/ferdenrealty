<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeaturedImageRequest;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function featured(FeaturedImageRequest $request, $property_id)
    {
        $property = Property::find($property_id);

        if (is_null($property)) {
            return back()->withErrors([
                'featured_image' => "No property found."
            ]);
        }
        $image = Image::make($request->featured_image);

        if ($image->width() !== 2000 || $image->height() !== 1000) {
            return back()->withErrors([
                'featured_image' => 'Featured image must have 1200x1000 dimension.'
            ]);
        }

        $filename = "f_" . $property_id . "_" . Carbon::now()->timestamp;

        $path = $request->featured_image->storeAs('featured', $filename . "." . $request->featured_image->extension(), 'public');

        $thumbnail = "thumb-" . $filename . "." . $request->featured_image->extension();
        $thumb = $image->fit(660, 600);

        Storage::disk('public')->put($thumbnail, (string) $thumb->encode());

        $property->featured_image = $path;
        $property->thumbnail = $thumbnail;
        $property->save();

        return redirect()->route('properties.show', [
            'id' => $property->id
        ])->with('featured_image_success_message', 'Featured Image saved');
    }

    public function gallery(Request $request, $property_id)
    {
        $property = Property::find($property_id);

        if (is_null($property)) {
            return back()->withErrors([
                'sliding_images' => "No property found."
            ]);
        }

        $count = 0;

        foreach ($request->sliding_images as $slidingImage) {
            $count++;
            $image = Image::make($slidingImage);

            if ($image->width() !== 850 || $image->height() !== 570) {
                return back()->withErrors([
                    'sliding_images' => 'Sliding image must have 850x570 dimension.'
                ]);
            }

            $filename =  "S_" . $property_id . "_" . Carbon::now()->timestamp . "_" . $count;
            $path = $slidingImage->storeAs('slider', $filename, 'public');

            $newSlidingImage = new \App\Models\Image;
            $newSlidingImage->property_id = $property_id;
            $newSlidingImage->path = $path;
            $newSlidingImage->save();
        }

        return redirect()->route('properties.show', [
            'id' => $property->id
        ])->with('sliding_image_success_message', 'Image saved');
    }

    public function delete($image_id)
    {
        $image = \App\Models\Image::find($image_id);

        if (!is_null($image)) {
            $image->delete();
        }

        return back()->with('sliding_image_success_message', 'Image deleted.');
    }
}
