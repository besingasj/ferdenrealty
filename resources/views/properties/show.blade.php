@extends('layouts.paper')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Property Details</h4>
                    <p class="text-muted">Basic Information</p>
                </div>
                <div class="content">
                    <form action="{{ route('properties.update', [ 'id' => $property->id ]) }}" method="post">
                        {{ csrf_field() }}
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $property->id }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('property_name') ? ' has-error' : '' }}">
                                    <label>Property Name</label>
                                    <input type="text" name="property_name" class="form-control border-input" placeholder="property name" value="{{ $property->property_name }}">
                                    @if ($errors->has('property_name'))
                                        <span>
                                        <strong class="text-danger">{{ $errors->first('property_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('property_id') ? ' has-error' : '' }}">
                                    <label>Property ID</label>
                                    <input type="text" name="property_id" class="form-control border-input" placeholder="property id" value="{{ $property->property_id }}">
                                    @if ($errors->has('property_id'))
                                        <span>
                                        <strong class="text-danger">{{ $errors->first('property_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label>Price</label>
                                    <input type="text" name="price" class="form-control border-input" placeholder="Price" value="{{ $property->price }}">
                                    @if ($errors->has('price'))
                                        <span>
                                        <strong class="text-danger">{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="" class="form-control border-input" cols="10" rows="3" value="" placeholder="description">{{ $property->description }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control border-input" placeholder="location" value="{{ $property->location }}">
                                    @if ($errors->has('location'))
                                        <span>
                                        <strong class="text-danger">{{ $errors->first('location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label>City / Municipality</label>
                                    <select name="city" class="form-control border-input">
                                        <option value="">--- Select ---</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city }}"  {{ ($property->city === $city) ? 'selected' : '' }}>{{ $city }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('city'))
                                        <span>
                                        <strong class="text-danger">{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Google Map</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="gmap_latitude" class="form-control border-input" placeholder="latitude" value="{{ $property->gmap_latitude }}">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="gmap_longitude" class="form-control border-input" placeholder="longitude" value="{{ $property->gmap_longitude }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Youtube Video</label>
                                <div class="form-group">
                                    <input type="text" class="form-control border-input" name="youtube_url" placeholder="Youtube Video URL" value="{{ $property->youtube_url }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label>Type</label>
                                    <select name="type" class="form-control border-input">
                                        @php
                                            $type_values = ["Commercial Space", "House and Lot", "Condo"];
                                        @endphp
                                        <option value="">--- Select ---</option>
                                        @foreach($type_values as $value)
                                            <option value="{{ $value }}" {{ ($property->type === $value) ? 'selected' : '' }}>{{ $value }}</option>
                                        @endforeach

                                    </select>
                                    @if ($errors->has('type'))
                                        <span>
                                        <strong class="text-danger">{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Lot Area</label>
                                    <input type="text" name="lot_area" class="form-control border-input" placeholder="lot area" value="{{ $property->lot_area }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Floor Area</label>
                                    <input type="text" name="floor_area" class="form-control border-input" placeholder="floor area" value="{{ $property->floor_area }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <input type="text" name="bedrooms" class="form-control border-input" placeholder="Bedrooms" value="{{ $property->bedrooms }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Toilet and bathrooms</label>
                                    <input type="text" name="tnb" class="form-control border-input" placeholder="toilet and bathrooms" value="{{ $property->tnb }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Car Garage</label>
                                    <input type="text" name="car_garage" class="form-control border-input" placeholder="car garage" value="{{ $property->car_garage }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Amenities</label>
                                    <input type="text" name="amenities" class="form-control border-input" placeholder="amenities" value="{{ $property->aminities }}">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save Property</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <h1 class="title">Amenities</h1>
                    <p class="text-muted">Property Features</p>
                </div>
                <div class="content">
                    <form action="{{ route('properties.amenities', [ 'property_id' => $property->id]) }}" method="post">
                        @csrf
                        <div class="row">
                            @foreach($amenities as $feature)
                                @php
                                $checked = $property->amenities()->where('name', $feature->name)->first();
                                @endphp
                                <div class="col-md-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="amenities[{{ $feature->name }}]" {{ !is_null($checked) ? "checked" : "" }}> {{ $feature->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save Amenities</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <h1 class="title">Additional Details</h1>
                    <p class="text-muted">Custom Attributes</p>
                </div>
                <div class="content">
                    @if (session('additional_details_success_message'))
                        <p class="text-success">{{ session('additional_details_success_message') }}</p>
                    @endif
                    <form action="{{ route("additional_details.new", [ 'property_id' => $property->id ]) }}" method="post" id="propertiesAdditionalDetails">
                        @csrf
                        <div id="additionalDetailsContainer">
                            @php
                                $additionalDetailsCount = $property->additionalDetails->count();
                                $additionalDetailsIteration = 1;
                            @endphp
                            @foreach ($property->additionalDetails as $detail)
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <input type="text" name="additional[detail_{{ $additionalDetailsIteration }}][field]" class="form-control border-input" value="{{ $detail->fields }}" placeholder="custom field">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="additional[detail_{{ $additionalDetailsIteration }}][value]" class="form-control border-input" value="{{ $detail->value }}" placeholder="value">
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $additionalDetailsIteration++;
                                @endphp
                            @endforeach
                        </div>


                        <button class="btn btn-info btn-fill" id="addNewAdditionalFields">Add Fields</button> <input type="submit" class="btn btn-success btn-fill" value="Save">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5">
            <div class="card">
                <div class="header">
                    <h4 class="title">Featured Image</h4>
                    <p class="text-muted">Primary Picture</p>
                </div>
                <div class="content">
                    @include("properties.includes.featured_image")
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-5">
            <div class="card">
                <div class="header">
                    <h4 class="title">Gallery Images</h4>
                    <p class="text-muted">Sliding Images</p>
                </div>
                <div class="content">
                    @include("properties.includes.images")
                </div>
            </div>
        </div>
    </div>
@endsection

@push("properties_scripts")
    <script  type="text/javascript">
        $(document).ready(function(e) {
            var addNewAdditionalFieldsBtn = $("#addNewAdditionalFields");
            var additionalFieldsContainer = $("#additionalDetailsContainer");

            var fieldIteration = "{{ $property->additionalDetails->count() + 1 }}";

            var htmlForm ='<div class="row">\n' +
                '                            <div class="form-group">\n' +
                '                                <div class="col-md-6">\n' +
                '                                    <input type="text" name="additional[detail_' + fieldIteration + '][field]" class="form-control border-input" placeholder="custom field">\n' +
                '                                </div>\n' +
                '                                <div class="col-md-6">\n' +
                '                                    <input type="text" name="additional[detail_' + fieldIteration + '][value]" class="form-control border-input" placeholder="value">\n' +
                '                                </div>\n' +
                '                            </div>\n' +
                '                        </div>';
            
            addNewAdditionalFieldsBtn.click(function (e) {
                additionalFieldsContainer.append(htmlForm);
                fieldIteration++;

                e.preventDefault();
                return false;
            });
        });
    </script>
@endpush