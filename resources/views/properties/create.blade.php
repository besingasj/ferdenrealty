@extends('layouts.paper')

@section('content')
    <div class="row">
        <div class="card">
            <div class="header">
                <h4 class="title">Create Property</h4>
            </div>
            <div class="content">
                <form action="{{ route('properties.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group{{ $errors->has('property_name') ? ' has-error' : '' }}">
                                <label>Property Name</label>
                                <input type="text" name="property_name" class="form-control border-input" placeholder="property name">
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
                                <input type="text" name="property_id" class="form-control border-input" placeholder="property id">
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
                                <input type="text" name="price" class="form-control border-input" placeholder="Price">
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
                                <textarea name="description" id="" class="form-control border-input" cols="10" rows="3" placeholder="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control border-input" placeholder="location">
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
                                        <option value="{{ $city }}">{{ $city }}</option>
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
                                    <input type="text" name="gmap_latitude" class="form-control border-input" placeholder="latitude">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="gmap_longitude" class="form-control border-input" placeholder="longitude">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label>Youtube Video</label>
                            <div class="form-group">
                                <input type="text" class="form-control border-input" name="youtube_url" placeholder="Youtube Video URL">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label>Type</label>
                                <select name="type" class="form-control border-input">
                                    <option value="">--- Select ---</option>
                                    <option value="Commercial Space">Commercial Space</option>
                                    <option value="House and Lot">House N Lot</option>
                                    <option value="Condo">Condo</option>
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
                                <input type="text" name="lot_area" class="form-control border-input" placeholder="lot area">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Floor Area</label>
                                <input type="text" name="floor_area" class="form-control border-input" placeholder="floor area">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Bedrooms</label>
                                <input type="text" name="bedrooms" class="form-control border-input" placeholder="Bedrooms">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Toilet and bathrooms</label>
                                <input type="text" name="tnb" class="form-control border-input" placeholder="toilet and bathrooms">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Car Garage</label>
                                <input type="text" name="car_garage" class="form-control border-input" placeholder="car garage">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Amenities</label>
                                <input type="text" name="amenities" class="form-control border-input" placeholder="amenities">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Save Property</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection