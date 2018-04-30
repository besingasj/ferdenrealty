@extends('realplaces.layouts.home3')

@section('content')
    <!-- .site-header -->
    <div class="homepage-slider slider-variation-three flexslider slider-loader">
        <ul class="slides">
            @foreach($sliders as $slider)
                <li>
                    <div class="slide-overlay hidden-xs container">
                        <div class="slide-inner-container">
                            <div class="slide-header">
                                <h3 class="slide-entry-title entry-title">
                                    <a href="#" rel="bookmark">{{ $slider->property_name }}</a>
                                </h3>
                                <div class="price-and-status">
                                    <span class="price">₱{{ $slider->priceFormatted() }}</span>
                                    <a href="#">
                                        <span class="property-status-tag">For Sale</span>
                                    </a>
                                </div>
                            </div>
                            {{--<p class="hidden-sm">Enchanting three bedroom, three bath home with spacious one bedroom, one bath cabana, in-laws quarters.…</p>--}}
                            <a class="btn-default hidden-sm hidden-md" href="{{ route('page.property.details', ['property_id' => $slider->property_id]) }}">More Details<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <a href="#">
                        <img src="{{ asset('public/storage/' . $slider->featured_image) }}" alt="{{ $slider->property_name }}">
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div id="content-wrapper" class="site-content-wrapper">
        <div id="content" class="site-content layout-wide">
            <main id="main" class="site-main">
                {{-- <section class="advance-search main-advance-search">
                    <div class="container">
                        <h3 class="search-title">Quick Search</h3>
                        <form class="advance-search-form" action="#" method="get">
                            <div class="option-bar property-location">
                                <select name="location" id="location" class="search-select">
                                    <option value="any">Location (Any)</option>
                                    <!-- <option value="miami">Miami</option>
                                    <option value="little-havana">- Little Havana</option>
                                    <option value="perrine">- Perrine</option>
                                    <option value="doral">- Doral</option> -->
                                    @php
                                    $cities = [
                                        'taytay',
                                        'cainta',
                                        'antipolo',
                                        'binangonan',
                                        'teresa',
                                        'pasig',
                                        'quezon'
                                    ];
                                    @endphp
                                    @foreach ($cities as $city)
                                        <option value="{{ $city }}">{{ $city }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="option-bar property-type">
                                <select name="type" id="select-property-type" class="search-select">
                                    <option value="any" selected="selected">Property Type (Any)</option>
                                    <!-- <option value="commercial"> Commercial</option>
                                    <option value="office">-  Office</option>
                                    <option value="shop">-  Shop</option>
                                    <option value="residential"> Residential</option>
                                    <option value="apartment">-  Apartment</option>
                                    <option value="apartment-building">-  Apartment Building</option>
                                    <option value="condominium">-  Condominium</option>
                                    <option value="single-family-home">-  Single Family Home</option>
                                    <option value="villa">-  Villa</option> -->
                                    @php 
                                    $types = [
                                        'Commercial Space',
                                        'House N Lot',
                                        'Condo'
                                    ];
                                    @endphp
                                    @foreach ($types as $type)
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="option-bar property-status">
                                <select name="status" id="select-status" class="search-select">
                                    <option value="any" selected="selected">Property Status (Any)</option>
                                    <option value="for-rent"> For Rent</option>
                                    <option value="for-sale"> For Sale</option>
                                </select>
                            </div> -->
                            <div class="option-bar property-keyword">
                                <input type="text" name="keyword" id="keyword-txt" value="" placeholder="Keyword">
                            </div>
                            <div class="option-bar property-id">
                                <input type="text" name="property-id" id="property-id-txt" value="" placeholder="Property ID">
                            </div>
                            <div class="option-bar property-bedrooms">
                                <select name="bedrooms" id="select-bedrooms" class="search-select">
                                    <option value="any" selected="selected">Min Beds (Any)</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="option-bar property-bathrooms">
                                <select name="bathrooms" id="select-bathrooms" class="search-select">
                                    <option value="any" selected="selected">Min Baths (Any)</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="option-bar property-min-price">
                                <select name="min-price" id="select-min-price" class="search-select">
                                    <option value="any" selected="selected">Min Price (Any)</option>
                                    <option value="1000">$1,000</option>
                                    <option value="5000">$5,000</option>
                                    <option value="10000">$10,000</option>
                                    <option value="50000">$50,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="200000">$200,000</option>
                                    <option value="300000">$300,000</option>
                                    <option value="400000">$400,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="600000">$600,000</option>
                                    <option value="700000">$700,000</option>
                                    <option value="800000">$800,000</option>
                                    <option value="900000">$900,000</option>
                                    <option value="1000000">$1,000,000</option>
                                    <option value="1500000">$1,500,000</option>
                                    <option value="2000000">$2,000,000</option>
                                    <option value="2500000">$2,500,000</option>
                                    <option value="5000000">$5,000,000</option>
                                </select>
                            </div>
                            <div class="option-bar property-max-price">
                                <select name="max-price" id="select-max-price" class="search-select">
                                    <option value="any" selected="selected">Max Price (Any)</option>
                                    <option value="5000">$5,000</option>
                                    <option value="10000">$10,000</option>
                                    <option value="50000">$50,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="200000">$200,000</option>
                                    <option value="300000">$300,000</option>
                                    <option value="400000">$400,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="600000">$600,000</option>
                                    <option value="700000">$700,000</option>
                                    <option value="800000">$800,000</option>
                                    <option value="900000">$900,000</option>
                                    <option value="1000000">$1,000,000</option>
                                    <option value="1500000">$1,500,000</option>
                                    <option value="2000000">$2,000,000</option>
                                    <option value="2500000">$2,500,000</option>
                                    <option value="5000000">$5,000,000</option>
                                    <option value="10000000">$10,000,000</option>
                                </select>
                            </div>
                            <div class="option-bar property-min-area">
                                <input type="text" name="min-area" id="min-area" pattern="[0-9]+" value="" placeholder="Min Area (Sq M)" title="Please only provide digits!">
                            </div>
                            <div class="option-bar property-max-area">
                                <input type="text" name="max-area" id="max-area" pattern="[0-9]+" value="" placeholder="Max Area (Sq M)" title="Please only provide digits!">
                            </div>
                            <div class="option-bar form-control-buttons">
                                <input type="submit" value="Search" class="form-submit-btn">
                            </div>
                            {{--<div class="extra-search-fields">--}}
                                {{--<h5 class="title"><span class="text-wrapper">Looking for certain features</span></h5>--}}
                                {{--<ul class="features-checkboxes-wrapper list-unstyled clearfix">--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-2-stories" value="2-stories"><label for="feature-2-stories">2 Stories<small>(6)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-26-ceilings" value="26-ceilings"><label for="feature-26-ceilings">26' Ceilings<small>(1)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-bike-path" value="bike-path"><label for="feature-bike-path">Bike Path<small>(1)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-central-cooling" value="central-cooling"><label for="feature-central-cooling">Central Cooling<small>(4)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-central-heating" value="central-heating"><label for="feature-central-heating">Central Heating<small>(3)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-dual-sinks" value="dual-sinks"><label for="feature-dual-sinks">Dual Sinks<small>(5)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-electric-range" value="electric-range"><label for="feature-electric-range">Electric Range<small>(5)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-emergency-exit" value="emergency-exit"><label for="feature-emergency-exit">Emergency Exit<small>(2)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-fire-alarm" value="fire-alarm"><label for="feature-fire-alarm">Fire Alarm<small>(3)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-fire-place" value="fire-place"><label for="feature-fire-place">Fire Place<small>(4)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-home-theater" value="home-theater"><label for="feature-home-theater">Home Theater<small>(3)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-hurricane-shutters" value="hurricane-shutters"><label for="feature-hurricane-shutters">Hurricane Shutters<small>(1)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-jog-path" value="jog-path"><label for="feature-jog-path">Jog Path<small>(1)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-laundry-room" value="laundry-room"><label for="feature-laundry-room">Laundry Room<small>(3)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-lawn" value="lawn"><label for="feature-lawn">Lawn<small>(5)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-marble-floors" value="marble-floors"><label for="feature-marble-floors">Marble Floors<small>(5)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-next-to-busy-way" value="next-to-busy-way"><label for="feature-next-to-busy-way">Next To Busy Way<small>(1)</small></label></span></li>--}}
                                    {{--<li><span class="option-set"><input type="checkbox" name="features[]" id="feature-swimming-pool" value="swimming-pool"><label for="feature-swimming-pool">Swimming Pool<small>(4)</small></label></span></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <!-- .extra-search-fields -->
                        </form>
                        <!-- .advance-search-form -->
                    </div>
                    <!-- .container -->
                </section> --}}
                <!-- .advance-search -->
                <div class="property-listing-three">
                    <div class="container">
                        <div class="welcome-text">
                            <h2 class="title">We are Offering the Best Real Estate Deals</h2>
                            {{--<p>Look at our Latest listed properties and check out the faciliaties on them, We have already sold more than 5,000 Homes and we are still going at very good pace. We would love you to look into these properties and we hope that you will find something match-able to your needs.</p>--}}
                        </div>
                        <div class="row">
                            @foreach ($propertyListingThree as $property)
                                <div class="col-xs-6 custom-col-xs-12 col-sm-6 col-md-4">
                                    <article class="hentry property-listing-three-post image-transition">
                                        <div class="property-thumbnail">
                                            <a href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}"><img class="img-responsive" src="{{ asset('public/storage/' . $property->thumbnail) }}" alt="Thumbnail"></a>
                                            <a href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}"><span class="property-status">For Sale</span></a>
                                        </div>
                                        <!-- .property-thumbnail -->
                                        <div class="property-description">
                                            <header class="entry-header">
                                                <h4 class="entry-title"><a href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}" rel="bookmark">{{ $property->property_name }}</a></h4>
                                                <div class="price-and-status">
                                                    <span class="price">₱{{ $property->priceFormatted() }}</span>
                                                </div>
                                            </header>
                                            {{--<p>Enchanting three bedroom, three bath home with spacious one bedroom, one bath</p>--}}
                                            <div class="property-meta entry-meta clearfix">
                                                @if (!is_null($property->lot_area))
                                                <div class="meta-wrapper">
                                                    <span class="meta-value">{{ $property->lot_area }}</span>
                                                    <sub class="meta-unit">Sq M</sub>
                                                </div>
                                                @endif
                                                @if (!is_null($property->bedrooms))
                                                <div class="meta-wrapper">
                                                    <span class="meta-value">{{ $property->bedrooms }}</span>
                                                    <span class="meta-label">Beds</span>
                                                </div>
                                                @endif
                                                @if (!is_null($property->tnb))
                                                <div class="meta-wrapper">
                                                    <span class="meta-value">{{ $property->tnb }}</span>
                                                    <span class="meta-label">Baths</span>
                                                </div>
                                                @endif
                                                @if (!is_null($property->car_garage))
                                                <div class="meta-wrapper">
                                                    <span class="meta-value">{{ $property->car_garage }}</span>
                                                    <span class="meta-label">Garages</span>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- .property-description -->
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- .property-listing-variation-three -->
                <div class="featured-properties-three">
                    <div class="container">
                        <header class="section-header">
                            <h3 class="section-title">Featured Properties</h3>
                        </header>
                        <div class="row">
                            @foreach ($featuredProperties as $property)
                                <div class="col-xs-6 custom-col-xs-12">
                                    <article class="hentry featured-property-post clearfix">
                                        <div class="property-thumbnail">
                                            <a href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}"><img class="img-responsive" src="{{ asset('public/storage/' . $property->thumbnail) }}" alt="Thumbnail"></a>
                                            <a href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}"><span class="property-status">For Sale</span></a>
                                        </div>
                                        <!-- .property-thumbnail -->
                                        <div class="property-description">
                                            <header class="entry-header">
                                                <h4 class="entry-title"><a href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}" rel="bookmark">{{ $property->property_name }}</a></h4>
                                                <div class="price-and-status">
                                                    <span class="price">₱{{ $property->priceFormatted() }}</span>
                                                </div>
                                            </header>
                                            <p>Enchanting three bedroom, three bath home with spacious one…</p>
                                            <div class="property-meta entry-meta clearfix">
                                                @if (!is_null($property->lot_area))
                                                    <div class="meta-wrapper">
                                                        <span class="meta-value">{{ $property->lot_area }}</span>
                                                        <sub class="meta-unit">Sq M</sub>
                                                    </div>
                                                @endif
                                                @if (!is_null($property->bedrooms))
                                                    <div class="meta-wrapper">
                                                        <span class="meta-value">{{ $property->bedrooms }}</span>
                                                        <span class="meta-label">Beds</span>
                                                    </div>
                                                @endif
                                                @if (!is_null($property->tnb))
                                                    <div class="meta-wrapper">
                                                        <span class="meta-value">{{ $property->tnb }}</span>
                                                        <span class="meta-label">Baths</span>
                                                    </div>
                                                @endif
                                                @if (!is_null($property->car_garage))
                                                    <div class="meta-wrapper">
                                                        <span class="meta-value">{{ $property->car_garage }}</span>
                                                        <span class="meta-label">Garages</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- .property-description -->
                                    </article>
                                </div>
                            @endforeach
                            <!-- .featured-properties-item -->
                            {{--<div class="col-xs-6 custom-col-xs-12">--}}
                                {{--<article class="hentry featured-property-post clearfix">--}}
                                    {{--<div class="property-thumbnail">--}}
                                        {{--<a href="#"><img class="img-responsive" src="public/realplaces/images/property/property-12-660x600.jpg" alt="Thumbnail"></a>--}}
                                        {{--<a href="#"><span class="property-status">For Sale</span></a>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-thumbnail -->--}}
                                    {{--<div class="property-description">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title"><a href="#" rel="bookmark">Villa in Coral Gables</a></h4>--}}
                                            {{--<div class="price-and-status">--}}
                                                {{--<span class="price">$825,000</span>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<p>Enjoy the cool serenity of Deering Bay all day…</p>--}}
                                        {{--<div class="property-meta entry-meta clearfix">--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">3500</span>--}}
                                                {{--<sub class="meta-unit">Sq M</sub>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">3</span>--}}
                                                {{--<span class="meta-label">Beds</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">3.5</span>--}}
                                                {{--<span class="meta-label">Baths</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">2</span>--}}
                                                {{--<span class="meta-label">Garages</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-description -->--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- .featured-properties-item -->--}}
                            {{--<div class="col-xs-6 custom-col-xs-12">--}}
                                {{--<article class="hentry featured-property-post clearfix">--}}
                                    {{--<div class="property-thumbnail">--}}
                                        {{--<a href="#"><img class="img-responsive" src="public/realplaces/images/property/property-2-660x600.jpg" alt="Thumbnail"></a>--}}
                                        {{--<a href="#"><span class="property-status">For Rent</span></a>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-thumbnail -->--}}
                                    {{--<div class="property-description">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title"><a href="#" rel="bookmark">Villa on Grand Avenue</a></h4>--}}
                                            {{--<div class="price-and-status">--}}
                                                {{--<span class="price">$4,750</span>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<p>Spacious and fabulous home in prime location. This executive…</p>--}}
                                        {{--<div class="property-meta entry-meta clearfix">--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">9350</span>--}}
                                                {{--<sub class="meta-unit">Sq M</sub>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">4</span>--}}
                                                {{--<span class="meta-label">Beds</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">4</span>--}}
                                                {{--<span class="meta-label">Baths</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">2</span>--}}
                                                {{--<span class="meta-label">Garages</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-description -->--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- .featured-properties-item -->--}}
                            {{--<div class="col-xs-6 custom-col-xs-12">--}}
                                {{--<article class="hentry featured-property-post clearfix">--}}
                                    {{--<div class="property-thumbnail">--}}
                                        {{--<a href="#"><img class="img-responsive" src="public/realplaces/images/property/property-3-660x600.jpg" alt="Thumbnail"></a>--}}
                                        {{--<a href="#"><span class="property-status">For Sale</span></a>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-thumbnail -->--}}
                                    {{--<div class="property-description">--}}
                                        {{--<header class="entry-header">--}}
                                            {{--<h4 class="entry-title"><a href="#" rel="bookmark">Home in Coral Gables</a></h4>--}}
                                            {{--<div class="price-and-status">--}}
                                                {{--<span class="price">$850,000</span>--}}
                                            {{--</div>--}}
                                        {{--</header>--}}
                                        {{--<p>Elegant retreat in a quiet Coral Gables setting. This…</p>--}}
                                        {{--<div class="property-meta entry-meta clearfix">--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">3800</span>--}}
                                                {{--<sub class="meta-unit">Sq M</sub>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">4</span>--}}
                                                {{--<span class="meta-label">Beds</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">4.5</span>--}}
                                                {{--<span class="meta-label">Baths</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="meta-wrapper">--}}
                                                {{--<span class="meta-value">2</span>--}}
                                                {{--<span class="meta-label">Garages</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-description -->--}}
                                {{--</article>--}}
                            {{--</div>--}}
                            {{--<!-- .featured-properties-item -->--}}
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- .featured-properties-three -->
                <!-- .submit-property-section -->
                <section class="home-recent-posts home-recent-posts-two">
                    <div class="container">
                        <header class="section-header">
                            <h3 class="section-title">Our Agents</h3>
                            {{--<div class="recent-posts-carousel-nav carousel-nav">--}}
                                {{--<a class="carousel-prev-item prev">--}}
                                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="arrow-container" width="32" height="52" viewBox="0 0 32 52">--}}
                                        {{--<g class="left-arrow" fill="#fff">--}}
                                            {{--<path opacity=".5" d="M31.611 7.646l-6.787-7.057-24.435 25.406 6.787 7.057z"/>--}}
                                            {{--<path d="M.389 26.006l6.787-7.058 24.435 25.406-6.787 7.057z"/>--}}
                                        {{--</g>--}}
                                    {{--</svg>--}}
                                {{--</a>--}}
                                {{--<a class="carousel-next-item next">--}}
                                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="arrow-container" width="32" height="52" viewBox="0 0 32 52">--}}
                                        {{--<g class="right-arrow" fill-rule="evenodd" clip-rule="evenodd" fill="#fff">--}}
                                            {{--<path d="M.388 44.354l6.788 7.057 24.436-25.406-6.788-7.057-24.436 25.406z"/>--}}
                                            {{--<path opacity=".5" d="M31.612 25.994l-6.788 7.058-24.436-25.406 6.788-7.057 24.436 25.405z"/>--}}
                                        {{--</g>--}}
                                    {{--</svg>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        </header>
                        <div class="recent-posts-carousel">
                            <div class="owl-carousel">
                                @foreach ($agents as $agent)
                                <div class="recent-posts-item">
                                    <article class="clearfix format-image hentry">
                                        <div class="post-thumbnail-container">
                                            <figure class="post-thumbnail">
                                                <a href="{{ route('page.agent.profile', ['agent_id' => $agent->id]) }}"><img src="{{ asset('public/' . $agent->profile_photo) }}" class="img-responsive wp-post-image" alt="{{ $agent->name }}"></a>
                                            </figure>
                                        </div>
                                        <!-- .post-thumbnail-container -->
                                        <div class="post-content-wrapper">
                                            <div class="post-header entry-header">
                                                <h4 class="post-title entry-title"><a href="{{ route('page.agent.profile', ['agent_id' => $agent->id]) }}">{{ $agent->name }}</a></h4>
                                                <div class="post-meta entry-meta">
                                                    <span class="author-link">Sales Manager</span>
                                                </div>
                                            </div>
                                            @if (!is_null($agent->mobile_number))
                                            <div>Mobile #: {{ $agent->mobile_number }}</div>
                                            @endif
                                            <div>Email: <strong>{{ $agent->email }}</strong></div>
                                            <div>Taytay Rizal, Philippines</div>
                                            <a class="read-more" href="{{ route('page.agent.profile', ['agent_id' => $agent->id]) }}">More <i class="fa fa-arrow-circle-o-right"></i></a>
                                        </div>
                                        <!-- .post-content-wrapper -->
                                    </article>
                                </div>
                                @endforeach
                                {{--<div class="recent-posts-item">--}}
                                    {{--<article class="clearfix format-image hentry">--}}
                                        {{--<div class="post-thumbnail-container">--}}
                                            {{--<figure class="post-thumbnail">--}}
                                                {{--<a href="#"><img src="{{ asset('public/paper/img/faces/face-3.jpg') }}" class="img-responsive wp-post-image" alt="News Post"></a>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                        {{--<!-- .post-thumbnail-container -->--}}
                                        {{--<div class="post-content-wrapper">--}}
                                            {{--<div class="post-header entry-header">--}}
                                                {{--<h4 class="post-title entry-title"><a href="#">Agent One</a></h4>--}}
                                                {{--<div class="post-meta entry-meta">--}}
                                                    {{--<span class="author-link">Sales Manager</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div>Mobile #: 123-456-7890</div>--}}
                                            {{--<div>Email: email@address.com</div>--}}
                                            {{--<div>Ferden Realty Corp</div>--}}
                                            {{--<a class="read-more" href="#">More <i class="fa fa-arrow-circle-o-right"></i></a>--}}
                                        {{--</div>--}}
                                        {{--<!-- .post-content-wrapper -->--}}
                                    {{--</article>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    <!-- .container -->
                </section>
            </main>
            <!-- .site-main -->
        </div>
        <!-- .site-content -->
    </div>
    <!-- .site-content-wrapper -->
@endsection