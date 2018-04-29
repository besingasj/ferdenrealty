@extends('realplaces.layouts.home3')

@section('content')
    <div id="content-wrapper" class="site-content-wrapper site-pages">
        <div id="content" class="site-content layout-boxed">
            <div class="container">
                <div class="container-property-single clearfix">
                    <div class="col-md-8 site-main-content property-single-content">
                        <main id="main" class="site-main">
                            <article class="hentry clearfix">
                                <div class="single-property-slider">
                                    <ul id="image-gallery" class="list-unstyled">
                                        @foreach ($images as $image)
                                        <li data-thumb="{{ asset('public/storage/' . $image->path) }}">
                                            <a class="swipebox" data-rel="gallery12" href="{{ asset('public/storage/' . $image->path) }}"><img src="{{ asset('public/storage/' . $image->path) }}" alt="{{ $property->property_name }}"></a>
                                        </li>
                                        @endforeach
                                        {{--<li data-thumb="images/property/property-interior-19-850x570.jpg">--}}
                                            {{--<a class="swipebox" data-rel="gallery12" href="images/property/property-interior-19-850x570.jpg"><img src="images/property/property-interior-19-850x570.jpg" alt="Villa in Coral Gables"></a>--}}
                                        {{--</li>--}}
                                        {{--<li data-thumb="images/property/property-interior-1-850x570.jpg">--}}
                                            {{--<a class="swipebox" data-rel="gallery12" href="images/property/property-interior-1-850x570.jpg"><img src="images/property/property-interior-1-850x570.jpg" alt="Villa in Coral Gables"></a>--}}
                                        {{--</li>--}}
                                        {{--<li data-thumb="images/property/property-12-850x570.jpg">--}}
                                            {{--<a class="swipebox" data-rel="gallery12" href="images/property/property-12-850x570.jpg"><img src="images/property/property-12-850x570.jpg" alt="Villa in Coral Gables"></a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                                <div id="property-featured-image" class="only-for-print">
                                    <img src="{{ asset('public/storage/' . $images[0]->path ) }}" alt="{{ $property->property_name }}">
                                </div>
                                <div class="single-property-wrapper">
                                    <header class="entry-header single-property-header">
                                        <div class="favorite-and-print clearfix">
                                            {{--<a class="add-to-fav" href="#" data-toggle="modal"><i class="fa fa-star"></i>&nbsp;&nbsp;Add to Favorites</a>--}}
                                            <a class="printer-icon" href="javascript:window.print()"><i class="fa fa-print"></i>&nbsp;&nbsp;Print</a>
                                        </div>
                                        <h1 class="entry-title single-property-title">{{ $property->property_name }}</h1>
                                        <span class="single-property-price price">₱{{ $property->priceFormatted() }}</span>
                                    </header>
                                    <div class="property-meta entry-meta clearfix ">
                                        @if (!is_null($property->property_id))
                                        <div class="meta-item">
                                            <i class="meta-item-icon icon-pid">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                    <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0DBAE8" d="M24 48c-13.255 0-24-10.744-24-24 0-13.255 10.745-24 24-24 13.256 0 24 10.746 24 24 0 13.256-10.744 24-24 24zm7.207-29.719h-.645l.365-2.163c.168-1.067-.699-2.107-1.795-2.107-.896 0-1.654.59-1.793 1.49l-.477 2.78h-3.787l.365-2.163c.167-1.067-.702-2.107-1.796-2.107-.897 0-1.653.59-1.795 1.49l-.477 2.78h-1.599c-.981 0-1.794.814-1.794 1.797s.813 1.798 1.794 1.798h.981l-.7 4.156h-1.263c-.981 0-1.794.814-1.794 1.797s.813 1.797 1.794 1.797h.646l-.39 2.274c-.197 1.18.701 2.105 1.794 2.105 1.01 0 1.655-.73 1.796-1.488l.504-2.893h3.786l-.393 2.276c-.197 1.066.7 2.105 1.796 2.105.896 0 1.654-.617 1.793-1.488l.506-2.893h1.6c.979 0 1.793-.814 1.793-1.797s-.814-1.797-1.793-1.797h-.984l.703-4.156h1.26c.984 0 1.797-.815 1.797-1.798s-.814-1.795-1.798-1.795zm-9.449 7.75l.702-4.156h3.784l-.699 4.156h-3.787z"></path>
                                                </svg>
                                            </i>
                                            <div class="meta-inner-wrapper">
                                                <span class="meta-item-label">Property ID</span>
                                                <span class="meta-item-value">{{ $property->property_id }}</span>
                                            </div>
                                        </div>
                                        @endif
                                        @if (!is_null($property->lot_area))
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Lot Area</span>
                                                    <span class="meta-item-value">{{ $property->lot_area }}<sub class="meta-item-unit">Sq M</sub></span>
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($property->floor_area))
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-area">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Floor Area</span>
                                                    <span class="meta-item-value">{{ $property->floor_area }}<sub class="meta-item-unit">Sq M</sub></span>
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($property->bedrooms))
                                            <div class="meta-item">
                                                <i class="meta-item-icon icon-bed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                        <path class="meta-icon" fill="#0DBAE8" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"></path>
                                                    </svg>
                                                </i>
                                                <div class="meta-inner-wrapper">
                                                    <span class="meta-item-label">Bedrooms</span>
                                                    <span class="meta-item-value">{{ $property->bedrooms }}</span>
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($property->tnb))
                                        <div class="meta-item">
                                            <i class="meta-item-icon icon-bath">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                    <path class="meta-icon" fill="#0DBAE8" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"></path>
                                                </svg>
                                            </i>
                                            <div class="meta-inner-wrapper">
                                                <span class="meta-item-label">Bathrooms</span>
                                                <span class="meta-item-value">{{ $property->tnb }}</span>
                                            </div>
                                        </div>
                                        @endif
                                        @if (!is_null($property->car_garage))
                                        <div class="meta-item">
                                            <i class="meta-item-icon icon-garage">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                    <path class="meta-icon" fill="#0DBAE8" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"></path>
                                                </svg>
                                            </i>
                                            <div class="meta-inner-wrapper">
                                                <span class="meta-item-label">Garages</span>
                                                <span class="meta-item-value">{{ $property->car_garage }}</span>
                                            </div>
                                        </div>
                                        @endif
                                        @if (!is_null($property->type))
                                        <div class="meta-item meta-property-type">
                                            <i class="meta-item-icon icon-ptype">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                    <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0DBAE8" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"></path>
                                                </svg>
                                            </i>
                                            <div class="meta-inner-wrapper">
                                                <span class="meta-item-label">Type</span>
                                                <span class="meta-item-value">{{ $property->type }}</span>
                                            </div>
                                        </div>
                                        @endif
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-tag">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0DBAE8" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"></path>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Status</span>--}}
                                                {{--<span class="meta-item-value">For Sale</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div class="entry-content clearfix">
                                    @if (!is_null($property->description))
                                        <h4 class="fancy-title">Description</h4>
                                        <div class="property-content">
                                            <p>{{ $property->description }}</p>
                                        </div>
                                    @endif
                                    @if (count($additional_details) > 0)
                                    <div class="property-additional-details clearfix">
                                        <h4 class="fancy-title">Additional Details</h4>
                                        <ul class="property-additional-details-list clearfix">
                                            @foreach ($additional_details as $detail)
                                                <li>
                                                    <dl>
                                                        <dt>{{ $detail->fields }}</dt>
                                                        <dd>{{ $detail->value }}</dd>
                                                    </dl>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if ($property->amenities()->count() > 0)
                                    <div class="property-features">
                                        <h4 class="fancy-title">Amenities</h4>
                                        <ul class="property-features-list clearfix">
                                            @foreach($property->amenities()->get() as $amenity)
                                                <li><a href="#">{{ $amenity->name }}</a></li>
                                            {{--<li><a href="#">2 Stories</a></li>--}}
                                            {{--<li><a href="#">Bike Path</a></li>--}}
                                            {{--<li><a href="#">Central Cooling</a></li>--}}
                                            {{--<li><a href="#">Jog Path</a></li>--}}
                                            {{--<li><a href="#">Lawn</a></li>--}}
                                            {{--<li><a href="#">Swimming Pool</a></li>--}}
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    {{--<section class="property-video">--}}
                                        {{--<h4 class="fancy-title">Virtual Tour</h4>--}}
                                        {{--<div class="placeholder-thumb format-video">--}}
                                            {{--<a class="video-popup" href="https://www.youtube.com/watch?v=c7Oy4ojSwyE" title="Virtual Tour">--}}
                                                {{--<i class="fa fa-play-circle-o"></i>--}}
                                                {{--<img width="850" height="570" src="images/property/property-12-850x570.jpg" class="img-responsive wp-post-image" alt="Exterior">--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</section>--}}
                                </div>
                            </article>
                            @if (!is_null($property->gmap_latitude) && !is_null($property->gmap_longitude))
                            <section class="property-location-section clearfix">
                                <h4 class="fancy-title">Location</h4>
                                <div id="property-map"></div>
                                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBALDyt4zX_7OgxXYxMgSoSk4h-B5fnqZc"></script>
                                <script type="text/javascript">
                                    function initialize() {
                                        var myLatlng = new google.maps.LatLng("{{ $property->gmap_latitude }}", "{{ $property->gmap_longitude }}");
                                        var mapCanvas = document.getElementById('property-map');
                                        var mapOptions = {
                                            center: myLatlng,
                                            zoom: 15,
                                            zoomControl: true,
                                            zoomControlOptions: {
                                                style: google.maps.ZoomControlStyle.SMALL
                                            },
                                            panControl: false,
                                            mapTypeControl: true,
                                            scrollwheel: false
                                        };
                                        var map = new google.maps.Map(mapCanvas, mapOptions);
                                        var marker = new google.maps.Marker({
                                            position: myLatlng,
                                            map: map,
                                            icon: '{{ asset('public/realplaces/images/map/single-family-home-map-icon.png') }}',
                                            title: 'Villa in Coral Gables'
                                        });
                                    }
                                    google.maps.event.addDomListener(window, 'load', initialize);
                                </script>
                            </section>
                            @endif
                            {{--<div class="property-share-networks clearfix">--}}
                                {{--<h4 class="fancy-title">Share this Property</h4>--}}
                                {{--<div id="share-button-title" class="hide">Share</div>--}}
                                {{--<div class="share-this"></div>--}}
                            {{--</div>--}}
                            {{--<div class="property-attachments clearfix">--}}
                                {{--<h4 class="fancy-title">Property Attachments</h4>--}}
                                {{--<ul class="property-attachments-list clearfix">--}}
                                    {{--<li class="pdf"><a target="_blank" href="#"><i class="fa fa-file-pdf-o"></i>Demo PDF</a></li>--}}
                                    {{--<li class="jpg"><a target="_blank" href="#"><i class="fa fa-file-image-o"></i>Demo JPG</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div id="comments">--}}
                                {{--<h2 id="comments-title">One Comment</h2>--}}
                                {{--<ol class="commentlist">--}}
                                    {{--<li class="comment byuser comment-author-msaqibsarwar bypostauthor even thread-even depth-1" id="li-comment-2">--}}
                                        {{--<article id="comment-2" class="comment-body">--}}
                                            {{--<div class="author-photo">--}}
                                                {{--<a class="avatar" href="#">--}}
                                                    {{--<img alt="" src="images/demo/gravatar.jpg" class="avatar avatar-68 photo img-circle" height="68" width="68">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="comment-wrapper">--}}
                                                {{--<div class="comment-meta">--}}
                                                    {{--<div class="comment-author vcard">--}}
                                                        {{--<h5 class="fn">John Doe</h5>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="comment-metadata">--}}
                                                        {{--<time datetime="2015-09-09T14:50:26+00:00">September 9, 2015</time>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="comment-content">--}}
                                                    {{--<p>This is a sample comment. We have been extremely pleased with your attentiveness, communication, honesty and advice throughout the entire process. Selling a house is a stressful occurrence for anyone and you have helped to make it as smooth as possible for us. We feel that you truly go beyond the general duties of a real estate agent with thorough follow ups, reporting and always being ‘on top’ of potential buyers.</p>--}}
                                                {{--</div>--}}
                                                {{--<div class="reply">--}}
                                                    {{--<a rel="nofollow" class="comment-reply-link" href="#" aria-label="Reply to John Doe">Reply</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</article>--}}
                                        {{--<!-- end of comment -->--}}
                                    {{--</li>--}}
                                    {{--<!-- #comment-## -->--}}
                                {{--</ol>--}}
                                {{--<div id="respond" class="comment-respond">--}}
                                    {{--<h3 id="reply-title" class="comment-reply-title">Leave a Reply--}}
                                        {{--<small><a rel="nofollow" id="cancel-comment-reply-link"  href="#" style="display:none;">Cancel reply</a></small>--}}
                                    {{--</h3>--}}
                                    {{--<form action="#" method="post" id="commentform" class="comment-form" novalidate="">--}}
                                        {{--<p class="comment-notes">--}}
                                            {{--<span id="email-notes">Your email address will not be published.</span>--}}
                                            {{--Required fields are marked <span class="required">*</span>--}}
                                        {{--</p>--}}
                                        {{--<p class="comment-form-comment">--}}
                                            {{--<label for="comment">Comment</label>--}}
                                            {{--<textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea>--}}
                                        {{--</p>--}}
                                        {{--<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label>--}}
                                            {{--<input id="author" name="author" type="text" value="" size="30" required="required">--}}
                                        {{--</p>--}}
                                        {{--<p class="comment-form-email">--}}
                                            {{--<label for="email">Email <span class="required">*</span></label>--}}
                                            {{--<input id="email" name="email" type="email" value="" size="30" required="required">--}}
                                        {{--</p>--}}
                                        {{--<p class="comment-form-url">--}}
                                            {{--<label for="url">Website</label>--}}
                                            {{--<input id="url" name="url" type="url" value="" size="30">--}}
                                        {{--</p>--}}
                                        {{--<p class="form-submit">--}}
                                            {{--<input name="submit" type="submit" id="submit" class="submit" value="Post Comment">--}}
                                            {{--<input type="hidden" name="comment_post_ID" value="101" id="comment_post_ID">--}}
                                            {{--<input type="hidden" name="comment_parent" id="comment_parent" value="0">--}}
                                        {{--</p>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                                {{--<!-- #respond -->--}}
                            {{--</div>--}}
                        </main>
                        <!-- .site-main -->
                    </div>
                    <!-- .site-main-content -->
                    <div class="col-md-4 zero-horizontal-padding">
                        <aside class="sidebar sidebar-property-detail">
                            <section class="agent-sidebar-widget clearfix">
                                <div class="agent-content-wrapper agent-common-styles">
                                    {{--<div class="inner-wrapper clearfix">--}}
                                        {{--<figure class="agent-image">--}}
                                            {{--<a href="agent-single.html">--}}
                                                {{--<img width="220" height="220" src="images/agent/agent-1.jpg" class="img-circle wp-post-image" alt="Nathan James">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                        {{--<h3 class="agent-name">--}}
                                            {{--<a href="#">{{ $property->property_name }}</a>--}}
                                            {{--<span>{{ $property->location }}</span>--}}
                                        {{--</h3>--}}
                                        {{--<div class="agent-social-profiles">--}}
                                            {{--<a class="twitter" target="_blank" href="https://twitter.com/themeforest"><i class="fa fa-twitter"></i></a>--}}
                                            {{--<a class="facebook" target="_blank" href="https://www.facebook.com/envatomarket"><i class="fa fa-facebook"></i></a>--}}
                                            {{--<a class="gplus" target="_blank" href="https://plus.google.com/+envato/about"><i class="fa fa-google-plus"></i></a>--}}
                                            {{--<a class="linkedin" target="_blank" href="https://www.linkedin.com/company/envato"><i class="fa fa-linkedin"></i></a>--}}
                                            {{--<a class="pinterest" target="_blank" href="http://realplaces.inspirythemes.biz/"><i class="fa fa-pinterest"></i></a>--}}
                                            {{--<a class="instagram" target="_blank" href="https://www.pinterest.com/envato/"><i class="fa fa-instagram"></i></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<ul class="agent-contacts-list">--}}

                                        {{--<li class="office">--}}
                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">--}}
                                                {{--<path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0080BC" d="M1.027 4.846l-.018.37.01.181c.068 9.565 7.003 17.42 15.919 18.48.338.075 1.253.129 1.614.129.359 0 .744-.021 1.313-.318.328-.172.448-.688.308-1.016-.227-.528-.531-.578-.87-.625-.435-.061-.905 0-1.521 0-1.859 0-3.486-.835-4.386-1.192l.002.003-.076-.034c-.387-.156-.696-.304-.924-.422-3.702-1.765-6.653-4.943-8.186-8.896-.258-.568-1.13-2.731-1.152-6.009h.003l-.022-.223c0-1.727 1.343-3.128 2.999-3.128 1.658 0 3.001 1.401 3.001 3.128 0 1.56-1.096 2.841-2.526 3.079l.001.014c-.513.046-.914.488-.914 1.033 0 .281.251 1.028.251 1.028.015 0 .131.188.119.188-.194-.539 1.669 5.201 7.021 7.849-.001.011.636.309.636.309.47.3 1.083.145 1.37-.347.09-.151.133-.32.14-.488.356-1.306 1.495-2.271 2.863-2.271 1.652 0 2.991 1.398 2.991 3.12 0 .346-.066.671-.164.981-.3.594-.412 1.21.077 1.699.769.769 1.442-.144 1.442-.144.408-.755.643-1.625.643-2.554 0-2.884-2.24-5.222-5.007-5.222-1.947 0-3.633 1.164-4.46 2.858-2.536-1.342-4.556-3.59-5.656-6.344 1.848-.769 3.154-2.647 3.154-4.849 0-2.884-2.241-5.222-5.007-5.222-2.41 0-4.422 1.777-4.897 4.144l-.091.711z"/>--}}
                                            {{--</svg>--}}
                                            {{--<span>Office:</span>1-234-456-789--}}
                                        {{--</li>--}}
                                        {{--<li class="mobile">--}}
                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">--}}
                                                {{--<path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0DBAE8" d="M17.001 23.999h-10.001c-1.657 0-3-1.343-3-2.999v-18c0-1.656 1.343-3 3-3h10.001c1.655 0 2.999 1.344 2.999 3v18c0 1.656-1.344 2.999-2.999 2.999zm.999-19.999c0-1.105-.896-2-2-2h-8c-1.105 0-2 .896-2 2v16c0 1.104.895 2 2 2h8c1.104 0 2-.896 2-2v-16zm-4 1h-4c-.552 0-1-.447-1-1 0-.552.448-1 1-1h4c.553 0 1.001.448 1.001 1 0 .553-.448 1-1.001 1zm-2 13c1.105 0 2 .672 2 1.499 0 .829-.895 1.501-2 1.501s-2-.672-2-1.501c0-.827.895-1.499 2-1.499z"/>--}}
                                            {{--</svg>--}}
                                            {{--<span>Mobile:</span>1-222-333-4444--}}
                                        {{--</li>--}}
                                        {{--<li class="fax">--}}
                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">--}}
                                                {{--<path class="fax-fill-one" d="M6 20c0 1.105.896 2 2 2h8c1.104 0 2-.895 2-2v-8h-12v8zm2-6h8v2h-8v-2zm0 4h8v2h-8v-2zM17 2h-10c-1.104 0-2 .896-2 2v3h14v-3c0-1.105-.896-2-2-2z" fill="none"/>--}}
                                                {{--<circle cx="21" cy="11" r="1" fill="none"/>--}}
                                                {{--<path class="fax-fill-two" fill="#0080bc" d="M21.999 7h-.999v-5c0-1.105-.896-2-2-2h-14c-1.104 0-2 .895-2 2v5h-.999c-1.105 0-2 .896-2 2.001v7.999c0 1.104.895 2 2 2h.999v3c0 1.105.896 2 2 2h14c1.104 0 2-.895 2-2v-3h.999c1.104 0 2-.896 2-2v-7.999c0-1.105-.895-2.001-2-2.001zm-3.999 13c0 1.105-.896 2-2 2h-8c-1.104 0-2-.895-2-2v-8h12v8zm1-13h-14v-3c0-1.104.896-2 2-2h10c1.104 0 2 .895 2 2v3zm2 4.999c-.553 0-1-.448-1-1 0-.551.447-.999 1-.999s.999.448.999.999c0 .552-.446 1-.999 1zM8 14h8v2h-8zM8 18h8v2h-8z"/>--}}
                                            {{--</svg>--}}
                                            {{--<span>Fax:</span>1-333-444-5555--}}
                                        {{--</li>--}}
                                        {{--<li class="map-pin">--}}
                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="40" height="40" viewBox="0 0 24 24">--}}
                                                {{--<path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#000000" d="M12 23.999c.048 0-8-11.582-8-15.999 0-4.419 3.581-8 8-8s8 3.581 8 8c0 4.417-8.084 15.999-8 15.999zm0-19.001c-1.658 0-3.002 1.345-3.002 3.002 0 1.657 1.344 3.002 3.002 3.002 1.657 0 3.002-1.345 3.002-3.002 0-1.658-1.345-3.002-3.002-3.002z"/>--}}
                                            {{--</svg>--}}
                                            {{--{{ $property->location }}--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--<p>Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Duis mollis, est non…</p>--}}
                                    {{--<a class="btn-default show-details" href="agent-single.html">View Agents<i class="fa fa-angle-right"></i></a>--}}
                                    <div class="agent-contact-form">
                                        <h3 class="agent-contact-form-title">Contact Agent</h3>
                                        <form id="agent-contact-form" class="contact-form-small" method="post" action="contact_form_handler.php" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-sm-6 left-field">
                                                    <input type="text" name="name" placeholder="Name" class="required" title="* Please provide your name">
                                                </div>
                                                <div class="col-sm-6 right-field">
                                                    <input type="text" name="email" placeholder="Email" class="email required" title="* Please provide valid email address">
                                                </div>
                                            </div>
                                            <textarea name="message" class="required" placeholder="Message" title="* Please provide your message"></textarea>
                                            <input type="submit" id="submit-button" name="submit" class="btn-default btn-round" value="Send Message">
                                            <a href="{{ route('page.agents') }}" class="btn-default btn-round">view agents</a>
                                            <img src="images/ajax-loader.gif" id="ajax-loader" alt="Loading...">
                                        </form>
                                        <div id="error-container"></div>
                                        <div id="message-container">&nbsp;</div>
                                    </div>
                                </div>
                            </section>
                            <section class="similar-properties meta-item-half clearfix">
                                <div class="nav-and-title clearfix">
                                    <h3 class="title">Similar Properties</h3>
                                    <div class="similar-properties-carousel-nav carousel-nav">
                                        <a class="carousel-prev-item prev">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-container" width="32" height="52" viewBox="0 0 32 52">
                                                <g class="left-arrow" fill="#fff">
                                                    <path opacity=".5" d="M31.611 7.646l-6.787-7.057-24.435 25.406 6.787 7.057z"/>
                                                    <path d="M.389 26.006l6.787-7.058 24.435 25.406-6.787 7.057z"/>
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="carousel-next-item next">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-container" width="32" height="52" viewBox="0 0 32 52">
                                                <g class="right-arrow" fill-rule="evenodd" clip-rule="evenodd" fill="#fff">
                                                    <path d="M.388 44.354l6.788 7.057 24.436-25.406-6.788-7.057-24.436 25.406z"/>
                                                    <path opacity=".5" d="M31.612 25.994l-6.788 7.058-24.436-25.406 6.788-7.057 24.436 25.405z"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="similar-properties-carousel">
                                    <div class="owl-carousel">
                                        @foreach ($similar_properties as $property)
                                            <article class="hentry clearfix">
                                                <figure class="property-thumbnail">
                                                    <a href="#">
                                                        <img width="850" height="570" src="{{ asset('public/storage/' . $property->featured_image) }}" class="img-responsive wp-post-image" alt="Property">
                                                    </a>
                                                </figure>
                                                <div class="property-description">
                                                    <div class="arrow"></div>
                                                    <header class="entry-header">
                                                        <h3 class="entry-title"><a href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}" rel="bookmark">{{ $property->property_name }}</a></h3>
                                                        <div class="price-and-status">
                                                            <span class="price">₱{{ $property->priceFormatted() }}</span><a href="#"><span class="property-status-tag">For Sale</span></a>
                                                        </div>
                                                    </header>
                                                    <div class="property-meta entry-meta clearfix ">
                                                        @if (!is_null($property->lot_area))
                                                        <div class="meta-item">
                                                            <i class="meta-item-icon icon-area">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                                    <path class="meta-icon" fill="#0DBAE8" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>
                                                                </svg>
                                                            </i>
                                                            <div class="meta-inner-wrapper">
                                                                <span class="meta-item-label">Lot Area</span>
                                                                <span class="meta-item-value">{{ $property->lot_area }}<sub class="meta-item-unit">Sq M</sub></span>
                                                            </div>
                                                        </div>
                                                        @endif
                                                            @if (!is_null($property->floor_area))
                                                                <div class="meta-item">
                                                                    <i class="meta-item-icon icon-area">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                                            <path class="meta-icon" fill="#0DBAE8" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>
                                                                        </svg>
                                                                    </i>
                                                                    <div class="meta-inner-wrapper">
                                                                        <span class="meta-item-label">Floor Area</span>
                                                                        <span class="meta-item-value">{{ $property->floor_area }}<sub class="meta-item-unit">Sq M</sub></span>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @if (!is_null($property->bedrooms))
                                                        <div class="meta-item">
                                                            <i class="meta-item-icon icon-bed">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                                    <path class="meta-icon" fill="#0DBAE8" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"></path>
                                                                </svg>
                                                            </i>
                                                            <div class="meta-inner-wrapper">
                                                                <span class="meta-item-label">Bedrooms</span>
                                                                <span class="meta-item-value">{{ $property->bedrooms }}</span>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if (!is_null($property->tnb))
                                                        <div class="meta-item">
                                                            <i class="meta-item-icon icon-bath">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                                    <path class="meta-icon" fill="#0DBAE8" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"></path>
                                                                </svg>
                                                            </i>
                                                            <div class="meta-inner-wrapper">
                                                                <span class="meta-item-label">Bathrooms</span>
                                                                <span class="meta-item-value">{{ $property->tnb }}</span>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if (!is_null($property->car_garage))
                                                        <div class="meta-item">
                                                            <i class="meta-item-icon icon-garage">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                                    <path class="meta-icon" fill="#0DBAE8" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"></path>
                                                                </svg>
                                                            </i>
                                                            <div class="meta-inner-wrapper">
                                                                <span class="meta-item-label">Garages</span>
                                                                <span class="meta-item-value">{{ $property->car_garage }}</span>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if (!is_null($property->type))
                                                        <div class="meta-item meta-property-type">
                                                            <i class="meta-item-icon icon-ptype">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                                    <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0DBAE8" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"></path>
                                                                </svg>
                                                            </i>
                                                            <div class="meta-inner-wrapper">
                                                                <span class="meta-item-label">Type</span>
                                                                <span class="meta-item-value">{{ $property->type }}</span>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <!-- .property-meta -->
                                                </div>
                                            </article>
                                        @endforeach
                                        {{--<article class="hentry clearfix">--}}
                                            {{--<figure class="property-thumbnail">--}}
                                                {{--<a href="#">--}}
                                                    {{--<img width="850" height="570" src="images/property/property-13-850x570.jpg" class="img-responsive wp-post-image" alt="property-13">--}}
                                                {{--</a>--}}
                                            {{--</figure>--}}
                                            {{--<div class="property-description">--}}
                                                {{--<div class="arrow"></div>--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title"><a href="#/" rel="bookmark">Building Having 15 Apartments</a></h3>--}}
                                                    {{--<div class="price-and-status">--}}
                                                        {{--<span class="price">$6,950,000</span><a href="#"><span class="property-status-tag">For Sale</span></a>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}
                                                {{--<div class="property-meta entry-meta clearfix ">--}}
                                                    {{--<div class="meta-item">--}}
                                                        {{--<i class="meta-item-icon icon-area">--}}
                                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                                {{--<path class="meta-icon" fill="#0DBAE8" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>--}}
                                                            {{--</svg>--}}
                                                        {{--</i>--}}
                                                        {{--<div class="meta-inner-wrapper">--}}
                                                            {{--<span class="meta-item-label">Area</span>--}}
                                                            {{--<span class="meta-item-value">52000<sub class="meta-item-unit">Sq M</sub></span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="meta-item meta-property-type">--}}
                                                        {{--<i class="meta-item-icon icon-ptype">--}}
                                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                                {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0DBAE8" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"></path>--}}
                                                            {{--</svg>--}}
                                                        {{--</i>--}}
                                                        {{--<div class="meta-inner-wrapper">--}}
                                                            {{--<span class="meta-item-label">Type</span>--}}
                                                            {{--<span class="meta-item-value">Apartment Building</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<!-- .property-meta -->--}}
                                            {{--</div>--}}
                                        {{--</article>--}}
                                        {{--<article class="hentry clearfix">--}}
                                            {{--<figure class="property-thumbnail">--}}
                                                {{--<a href="#">--}}
                                                    {{--<img width="850" height="570" src="images/property/property-1-850x570.jpg" class="img-responsive wp-post-image" alt="">--}}
                                                {{--</a>--}}
                                            {{--</figure>--}}
                                            {{--<div class="property-description">--}}
                                                {{--<div class="arrow"></div>--}}
                                                {{--<header class="entry-header">--}}
                                                    {{--<h3 class="entry-title"><a href="#" rel="bookmark">Home in Merrick Way</a></h3>--}}
                                                    {{--<div class="price-and-status">--}}
                                                        {{--<span class="price">$540,000</span><a href="#"><span class="property-status-tag">For Sale</span></a>--}}
                                                    {{--</div>--}}
                                                {{--</header>--}}
                                                {{--<div class="property-meta entry-meta clearfix ">--}}
                                                    {{--<div class="meta-item">--}}
                                                        {{--<i class="meta-item-icon icon-area">--}}
                                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                                {{--<path class="meta-icon" fill="#0DBAE8" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>--}}
                                                            {{--</svg>--}}
                                                        {{--</i>--}}
                                                        {{--<div class="meta-inner-wrapper">--}}
                                                            {{--<span class="meta-item-label">Area</span>--}}
                                                            {{--<span class="meta-item-value">4300<sub class="meta-item-unit">Sq M</sub></span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="meta-item">--}}
                                                        {{--<i class="meta-item-icon icon-bed">--}}
                                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                                {{--<path class="meta-icon" fill="#0DBAE8" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"></path>--}}
                                                            {{--</svg>--}}
                                                        {{--</i>--}}
                                                        {{--<div class="meta-inner-wrapper">--}}
                                                            {{--<span class="meta-item-label">Bedrooms</span>--}}
                                                            {{--<span class="meta-item-value">3</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="meta-item">--}}
                                                        {{--<i class="meta-item-icon icon-bath">--}}
                                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                                {{--<path class="meta-icon" fill="#0DBAE8" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"></path>--}}
                                                            {{--</svg>--}}
                                                        {{--</i>--}}
                                                        {{--<div class="meta-inner-wrapper">--}}
                                                            {{--<span class="meta-item-label">Bathrooms</span>--}}
                                                            {{--<span class="meta-item-value">3</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="meta-item">--}}
                                                        {{--<i class="meta-item-icon icon-garage">--}}
                                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                                {{--<path class="meta-icon" fill="#0DBAE8" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"></path>--}}
                                                            {{--</svg>--}}
                                                        {{--</i>--}}
                                                        {{--<div class="meta-inner-wrapper">--}}
                                                            {{--<span class="meta-item-label">Garages</span>--}}
                                                            {{--<span class="meta-item-value">2</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="meta-item meta-property-type">--}}
                                                        {{--<i class="meta-item-icon icon-ptype">--}}
                                                            {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                                {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0DBAE8" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"></path>--}}
                                                            {{--</svg>--}}
                                                        {{--</i>--}}
                                                        {{--<div class="meta-inner-wrapper">--}}
                                                            {{--<span class="meta-item-label">Type</span>--}}
                                                            {{--<span class="meta-item-value">Single Family Home</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<!-- .property-meta -->--}}
                                            {{--</div>--}}
                                        {{--</article>--}}
                                    </div>
                                </div>
                            </section>
                        </aside>
                        <!-- .sidebar -->
                    </div>
                    <!-- .site-sidebar-content -->
                </div>
                <!-- .container-property-single -->
            </div>
            <!-- .container -->
        </div>
        <!-- .site-content -->
    </div>
@endsection