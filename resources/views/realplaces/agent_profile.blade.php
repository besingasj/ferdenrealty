@extends('realplaces.layouts.home3')

@section('content')
    <div class="page-head " style="background: #494c53 no-repeat center top;  background-size: cover;">
        <div class="container">
            <div class="page-head-content">
                <h1 class="page-title"><span>Agent Profile</span></h1>
            </div>
        </div>
    </div>
    <!-- .page-head -->
    <div id="content-wrapper" class="site-content-wrapper site-pages">
        <div id="content" class="site-content layout-boxed">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 site-main-content">
                        <main id="main" class="site-main">
                            <article class="agent-single-post clearfix hentry">
                                <div class="agent-content-wrapper agent-common-styles clearfix">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-6">
                                            <div class="inner-wrapper clearfix">
                                                <figure class="agent-image">
                                                    <a href="#"><img class="img-circle" src="{{ asset('public/' . $agent->profile_photo) }}" alt="{{ $agent->name }}"></a>
                                                </figure>
                                                <h3 class="agent-name"><a href="#">{{ $agent->name }}</a><span>Sales Manager</span></h3>
                                                <div class="agent-social-profiles">
                                                    <a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a class="gplus" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a class="pinterest" target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    <a class="instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </div>
                                            <ul class="agent-contacts-list">
                                                @if (!is_null($agent->office_number))
                                                    <li class="office">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">
                                                            <path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0080BC" d="M1.027 4.846l-.018.37.01.181c.068 9.565 7.003 17.42 15.919 18.48.338.075 1.253.129 1.614.129.359 0 .744-.021 1.313-.318.328-.172.448-.688.308-1.016-.227-.528-.531-.578-.87-.625-.435-.061-.905 0-1.521 0-1.859 0-3.486-.835-4.386-1.192l.002.003-.076-.034c-.387-.156-.696-.304-.924-.422-3.702-1.765-6.653-4.943-8.186-8.896-.258-.568-1.13-2.731-1.152-6.009h.003l-.022-.223c0-1.727 1.343-3.128 2.999-3.128 1.658 0 3.001 1.401 3.001 3.128 0 1.56-1.096 2.841-2.526 3.079l.001.014c-.513.046-.914.488-.914 1.033 0 .281.251 1.028.251 1.028.015 0 .131.188.119.188-.194-.539 1.669 5.201 7.021 7.849-.001.011.636.309.636.309.47.3 1.083.145 1.37-.347.09-.151.133-.32.14-.488.356-1.306 1.495-2.271 2.863-2.271 1.652 0 2.991 1.398 2.991 3.12 0 .346-.066.671-.164.981-.3.594-.412 1.21.077 1.699.769.769 1.442-.144 1.442-.144.408-.755.643-1.625.643-2.554 0-2.884-2.24-5.222-5.007-5.222-1.947 0-3.633 1.164-4.46 2.858-2.536-1.342-4.556-3.59-5.656-6.344 1.848-.769 3.154-2.647 3.154-4.849 0-2.884-2.241-5.222-5.007-5.222-2.41 0-4.422 1.777-4.897 4.144l-.091.711z"/>
                                                        </svg>
                                                        <span>Office:</span>{{ $agent->office_number }}
                                                    </li>
                                                @endif
                                                @if (!is_null($agent->mobile_number))
                                                    <li class="mobile">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">
                                                            <path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M17.001 23.999h-10.001c-1.657 0-3-1.343-3-2.999v-18c0-1.656 1.343-3 3-3h10.001c1.655 0 2.999 1.344 2.999 3v18c0 1.656-1.344 2.999-2.999 2.999zm.999-19.999c0-1.105-.896-2-2-2h-8c-1.105 0-2 .896-2 2v16c0 1.104.895 2 2 2h8c1.104 0 2-.896 2-2v-16zm-4 1h-4c-.552 0-1-.447-1-1 0-.552.448-1 1-1h4c.553 0 1.001.448 1.001 1 0 .553-.448 1-1.001 1zm-2 13c1.105 0 2 .672 2 1.499 0 .829-.895 1.501-2 1.501s-2-.672-2-1.501c0-.827.895-1.499 2-1.499z"/>
                                                        </svg>
                                                        <span>Mobile:</span>{{ $agent->mobile_number }}
                                                    </li>
                                                @endif
                                                @if (!is_null($agent->fax_number))
                                                    <li class="fax">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">
                                                            <path class="fax-fill-one" d="M6 20c0 1.105.896 2 2 2h8c1.104 0 2-.895 2-2v-8h-12v8zm2-6h8v2h-8v-2zm0 4h8v2h-8v-2zM17 2h-10c-1.104 0-2 .896-2 2v3h14v-3c0-1.105-.896-2-2-2z" fill="none"/>
                                                            <circle cx="21" cy="11" r="1" fill="none"/>
                                                            <path class="fax-fill-two" fill="#0080bc" d="M21.999 7h-.999v-5c0-1.105-.896-2-2-2h-14c-1.104 0-2 .895-2 2v5h-.999c-1.105 0-2 .896-2 2.001v7.999c0 1.104.895 2 2 2h.999v3c0 1.105.896 2 2 2h14c1.104 0 2-.895 2-2v-3h.999c1.104 0 2-.896 2-2v-7.999c0-1.105-.895-2.001-2-2.001zm-3.999 13c0 1.105-.896 2-2 2h-8c-1.104 0-2-.895-2-2v-8h12v8zm1-13h-14v-3c0-1.104.896-2 2-2h10c1.104 0 2 .895 2 2v3zm2 4.999c-.553 0-1-.448-1-1 0-.551.447-.999 1-.999s.999.448.999.999c0 .552-.446 1-.999 1zM8 14h8v2h-8zM8 18h8v2h-8z"/>
                                                        </svg>
                                                        <span>Fax:</span>{{ $agent->fax_number }}
                                                    </li>
                                                @endif
                                                <li class="map-pin">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="40" height="40" viewBox="0 0 24 24">
                                                        <path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#000000" d="M12 23.999c.048 0-8-11.582-8-15.999 0-4.419 3.581-8 8-8s8 3.581 8 8c0 4.417-8.084 15.999-8 15.999zm0-19.001c-1.658 0-3.002 1.345-3.002 3.002 0 1.657 1.344 3.002 3.002 3.002 1.657 0 3.002-1.345 3.002-3.002 0-1.658-1.345-3.002-3.002-3.002z"/>
                                                    </svg>
                                                    Taytay Rizal, Philippines
                                                </li>
                                            </ul>
                                            {{--<ul class="agent-contacts-list">--}}
                                                {{--<li class="office">--}}
                                                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">--}}
                                                        {{--<path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0080BC" d="M1.027 4.846l-.018.37.01.181c.068 9.565 7.003 17.42 15.919 18.48.338.075 1.253.129 1.614.129.359 0 .744-.021 1.313-.318.328-.172.448-.688.308-1.016-.227-.528-.531-.578-.87-.625-.435-.061-.905 0-1.521 0-1.859 0-3.486-.835-4.386-1.192l.002.003-.076-.034c-.387-.156-.696-.304-.924-.422-3.702-1.765-6.653-4.943-8.186-8.896-.258-.568-1.13-2.731-1.152-6.009h.003l-.022-.223c0-1.727 1.343-3.128 2.999-3.128 1.658 0 3.001 1.401 3.001 3.128 0 1.56-1.096 2.841-2.526 3.079l.001.014c-.513.046-.914.488-.914 1.033 0 .281.251 1.028.251 1.028.015 0 .131.188.119.188-.194-.539 1.669 5.201 7.021 7.849-.001.011.636.309.636.309.47.3 1.083.145 1.37-.347.09-.151.133-.32.14-.488.356-1.306 1.495-2.271 2.863-2.271 1.652 0 2.991 1.398 2.991 3.12 0 .346-.066.671-.164.981-.3.594-.412 1.21.077 1.699.769.769 1.442-.144 1.442-.144.408-.755.643-1.625.643-2.554 0-2.884-2.24-5.222-5.007-5.222-1.947 0-3.633 1.164-4.46 2.858-2.536-1.342-4.556-3.59-5.656-6.344 1.848-.769 3.154-2.647 3.154-4.849 0-2.884-2.241-5.222-5.007-5.222-2.41 0-4.422 1.777-4.897 4.144l-.091.711z"/>--}}
                                                    {{--</svg>--}}
                                                    {{--<span>Office:</span>1-234-456-7893--}}
                                                {{--</li>--}}
                                                {{--<li class="mobile">--}}
                                                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">--}}
                                                        {{--<path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M17.001 23.999h-10.001c-1.657 0-3-1.343-3-2.999v-18c0-1.656 1.343-3 3-3h10.001c1.655 0 2.999 1.344 2.999 3v18c0 1.656-1.344 2.999-2.999 2.999zm.999-19.999c0-1.105-.896-2-2-2h-8c-1.105 0-2 .896-2 2v16c0 1.104.895 2 2 2h8c1.104 0 2-.896 2-2v-16zm-4 1h-4c-.552 0-1-.447-1-1 0-.552.448-1 1-1h4c.553 0 1.001.448 1.001 1 0 .553-.448 1-1.001 1zm-2 13c1.105 0 2 .672 2 1.499 0 .829-.895 1.501-2 1.501s-2-.672-2-1.501c0-.827.895-1.499 2-1.499z"/>--}}
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
                                                    {{--900 Biscayne Blvd Way Miami, FL, USA--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        </div>
                                        <div class="col-md-7 col-sm-6">
                                            <div class="agent-contact-form">
                                                <h3 class="agent-contact-form-title">Contact Agent</h3>
                                                <form id="agent-contact-form" class="contact-form-small" method="post" action="{{ route('contact.agents.single', ['id' => $agent->id]) }}" novalidate="novalidate">
                                                    @csrf
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
                                                    <img src="{{ asset('public/realplaces/images/ajax-loader.gif') }}" id="ajax-loader" alt="Loading...">
                                                </form>
                                                <div id="error-container"></div>
                                                <div id="message-container">&nbsp;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content clearfix">
                                    {{--<p>Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
                                    {{--<p>Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.</p>--}}
                                </div>
                            </article>
                            <!-- .agent-single-post -->
                            <h3 class="agent-properties-list-heading">Properties by
                                <span class="property-posted-by">{{ $agent->name }}</span>
                            </h3>
                            @php
                                $iteration = 0;
                            @endphp
                            @foreach ($properties as $property)
                                <article class="property-listing-simple property-listing-simple-1 {{ $iteration % 2 == 1 ? 'listing-post-odd' : 'listing-post-even' }} hentry clearfix">
                                    <div class="property-thumbnail col-sm-4 zero-horizontal-padding">
                                        <div class="gallery-slider-two flexslider">
                                            <ul class="slides">
                                                <li>
                                                    <a title="Feature Image" data-rel="gallery-1" class="swipebox"
                                                       href="images/property/property-1-660x600.jpg">
                                                        <img class="img-responsive" src="{{ asset('public/storage/' . $property->thumbnail) }}" alt="Thumbnail">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- .property-thumbnail -->
                                    <div class="title-and-meta col-sm-8">
                                        <header class="entry-header">
                                            <h3 class="entry-title"><a href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}" rel="bookmark">{{ $property->property_name }}</a></h3>
                                            <div class="price-wrapper hidden-lg">
                                                <span class="prefix-text">From</span><span class="price">₱{{ $property->priceFormatted() }}</span>
                                                <span class="postfix-text">/ Year</span>
                                            </div>
                                            <p class="property-address visible-lg">
                                                <i class="fa fa-map-marker"></i>{{ $property->location }}
                                            </p>
                                        </header>
                                        <div class="property-meta entry-meta clearfix">
                                            @if (!is_null($property->floor_area))
                                                <div class="meta-item">
                                                    <i class="meta-item-icon icon-area">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                            <path class="meta-icon" fill="#cc0033" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"/>
                                                        </svg>
                                                    </i>
                                                    <div class="meta-inner-wrapper">
                                                        <span class="meta-item-label">Lot Area</span>
                                                        <span class="meta-item-value">{{ $property->floor_area }}<sub class="meta-item-unit">Sq M</sub></span>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (!is_null($property->lot_area))
                                                <div class="meta-item">
                                                    <i class="meta-item-icon icon-area">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                            <path class="meta-icon" fill="#cc0033" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"/>
                                                        </svg>
                                                    </i>
                                                    <div class="meta-inner-wrapper">
                                                        <span class="meta-item-label">Lot Area</span>
                                                        <span class="meta-item-value">{{ $property->lot_area }}<sub class="meta-item-unit">Sq M</sub></span>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (!is_null($property->bedrooms))
                                                <div class="meta-item">
                                                    <i class="meta-item-icon icon-bed">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                            <path class="meta-icon" fill="#cc0033" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"/>
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
                                                            <path class="meta-icon" fill="#cc0033" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"/>
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
                                                            <path class="meta-icon" fill="#cc0033" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"/>
                                                        </svg>
                                                    </i>
                                                    <div class="meta-inner-wrapper">
                                                        <span class="meta-item-label">Garages</span>
                                                        <span class="meta-item-value">{{ $property->car_garage }}</span>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (!is_null($property->type))
                                                <div class="meta-item">
                                                    <i class="meta-item-icon icon-ptype">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">
                                                            <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"/>
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
                                            {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"/>--}}
                                            {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                            {{--<span class="meta-item-label">Status</span>--}}
                                            {{--<span class="meta-item-value">For Sale</span>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                        <!-- .property-meta -->
                                        <a class="btn-default visible-md-inline-block" href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}">Show Details<i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <!-- .title-and-meta -->
                                    <div class="property-description visible-lg">
                                        <h4 class="title-heading">Description</h4>
                                        <p>{{ substr($property->description, 0, 100) }}...</p>
                                        <div class="price-wrapper">
                                            <span class="prefix-text">Price</span><span class="price">₱{{ $property->priceFormatted() }}</span>
                                        </div>
                                        <a class="btn-default" href="{{ route('page.property.details', ['property_id' => $property->property_id]) }}">Show Details<i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <!-- .property-description -->
                                </article>
                                @php
                                    $iteration++;
                                @endphp
                            @endforeach
                            {{--<article class="property-listing-simple property-listing-simple-1 listing-post-odd hentry clearfix">--}}
                                {{--<div class="property-thumbnail col-sm-4 zero-horizontal-padding">--}}
                                    {{--<div class="gallery-slider-two flexslider">--}}
                                        {{--<ul class="slides">--}}
                                            {{--<li>--}}
                                                {{--<a title="Feature Image" data-rel="gallery-1" class="swipebox"--}}
                                                   {{--href="images/property/property-1-660x600.jpg">--}}
                                                    {{--<img class="img-responsive" src="images/property/property-1-660x600.jpg" alt="Thumbnail">--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a title="Feature Image" data-rel="gallery-1" class="swipebox"--}}
                                                   {{--href="images/property/property-7-660x600.jpg">--}}
                                                    {{--<img class="img-responsive" src="images/property/property-7-660x600.jpg" alt="Thumbnail">--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- .property-thumbnail -->--}}
                                {{--<div class="title-and-meta col-sm-8">--}}
                                    {{--<header class="entry-header">--}}
                                        {{--<h3 class="entry-title"><a href="property-single.html" rel="bookmark">Home in Merrick Way</a></h3>--}}
                                        {{--<div class="price-wrapper hidden-lg">--}}
                                            {{--<span class="prefix-text">From</span><span class="price">$540,000</span>--}}
                                            {{--<span class="postfix-text">/ Year</span>--}}
                                        {{--</div>--}}
                                        {{--<p class="property-address visible-lg">--}}
                                            {{--<i class="fa fa-map-marker"></i>Merrick Way, Miami, FL 33134, USA--}}
                                        {{--</p>--}}
                                    {{--</header>--}}
                                    {{--<div class="property-meta entry-meta clearfix">--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-area">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"/>--}}
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
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"/>--}}
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
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"/>--}}
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
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Garages</span>--}}
                                                {{--<span class="meta-item-value">2</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-ptype">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Type</span>--}}
                                                {{--<span class="meta-item-value">Single Family Home</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-tag">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Status</span>--}}
                                                {{--<span class="meta-item-value">For Sale</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-meta -->--}}
                                    {{--<a class="btn-default visible-md-inline-block" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .title-and-meta -->--}}
                                {{--<div class="property-description visible-lg">--}}
                                    {{--<h4 class="title-heading">Description</h4>--}}
                                    {{--<p>Enchanting three bedroom, three bath home with spacious one bedroom, one bath…</p>--}}
                                    {{--<div class="price-wrapper">--}}
                                        {{--<span class="prefix-text">Price</span><span class="price">$540,000</span>--}}
                                    {{--</div>--}}
                                    {{--<a class="btn-default" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-description -->--}}
                            {{--</article>--}}
                            {{--<!-- .property-listing-simple-1 -->--}}
                            {{--<article class="property-listing-simple property-listing-simple-1 listing-post-even hentry clearfix">--}}
                                {{--<div class="property-thumbnail col-sm-4 zero-horizontal-padding">--}}
                                    {{--<a href="property-single.html"><img class="img-responsive" src="images/property/property-12-660x600.jpg" alt="Thumbnail"></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-thumbnail -->--}}
                                {{--<div class="title-and-meta col-sm-8">--}}
                                    {{--<header class="entry-header">--}}
                                        {{--<h3 class="entry-title"><a href="property-single.html" rel="bookmark">Villa in Coral Gables</a></h3>--}}
                                        {{--<div class="price-wrapper hidden-lg">--}}
                                            {{--<span class="prefix-text">From</span><span class="price">$825,000</span>--}}
                                            {{--<span class="postfix-text">/ Year</span>--}}
                                        {{--</div>--}}
                                        {{--<p class="property-address visible-lg">--}}
                                            {{--<i class="fa fa-map-marker"></i>13621 Deering Bay Drive, Coral Gables, FL 33158, USA--}}
                                        {{--</p>--}}
                                    {{--</header>--}}
                                    {{--<div class="property-meta entry-meta clearfix">--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-area">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Area</span>--}}
                                                {{--<span class="meta-item-value">3500<sub class="meta-item-unit">Sq M</sub></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-bed">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"/>--}}
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
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Bathrooms</span>--}}
                                                {{--<span class="meta-item-value">3.5</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-garage">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Garages</span>--}}
                                                {{--<span class="meta-item-value">2</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-ptype">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Type</span>--}}
                                                {{--<span class="meta-item-value">Villa</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-tag">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Status</span>--}}
                                                {{--<span class="meta-item-value">For Sale</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-meta -->--}}
                                    {{--<a class="btn-default visible-md-inline-block" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .title-and-meta -->--}}
                                {{--<div class="property-description visible-lg">--}}
                                    {{--<h4 class="title-heading">Description</h4>--}}
                                    {{--<p>Enjoy the cool serenity of Deering Bay all day from this spectacular…</p>--}}
                                    {{--<div class="price-wrapper">--}}
                                        {{--<span class="prefix-text">Price</span><span class="price">$825,000</span>--}}
                                    {{--</div>--}}
                                    {{--<a class="btn-default" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-description -->--}}
                            {{--</article>--}}
                            {{--<!-- .property-listing-simple-1 -->--}}
                            {{--<article class="property-listing-simple property-listing-simple-1 listing-post-odd hentry clearfix">--}}
                                {{--<div class="property-thumbnail col-sm-4 zero-horizontal-padding">--}}
                                    {{--<a href="property-single.html"><img class="img-responsive" src="images/property/property-10-660x600.jpg" alt="Thumbnail"></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-thumbnail -->--}}
                                {{--<div class="title-and-meta col-sm-8">--}}
                                    {{--<header class="entry-header">--}}
                                        {{--<h3 class="entry-title"><a href="property-single.html" rel="bookmark">Street Food Restaurant</a></h3>--}}
                                        {{--<div class="price-wrapper hidden-lg">--}}
                                            {{--<span class="prefix-text">From</span><span class="price">$1,600</span>--}}
                                            {{--<span class="postfix-text">/ Year</span>--}}
                                        {{--</div>--}}
                                        {{--<p class="property-address visible-lg">--}}
                                            {{--<i class="fa fa-map-marker"></i>Sunset Drive, Miami, FL, USA--}}
                                        {{--</p>--}}
                                    {{--</header>--}}
                                    {{--<div class="property-meta entry-meta clearfix">--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-area">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Area</span>--}}
                                                {{--<span class="meta-item-value">950<sub class="meta-item-unit">Sq M</sub></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-ptype">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Type</span>--}}
                                                {{--<span class="meta-item-value">Shop</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-tag">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Status</span>--}}
                                                {{--<span class="meta-item-value">For Rent</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-meta -->--}}
                                    {{--<a class="btn-default visible-md-inline-block" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .title-and-meta -->--}}
                                {{--<div class="property-description visible-lg">--}}
                                    {{--<h4 class="title-heading">Description</h4>--}}
                                    {{--<p>We are an award winning and very unique concept inspired by street…</p>--}}
                                    {{--<div class="price-wrapper">--}}
                                        {{--<span class="prefix-text">Price</span><span class="price">$1,600</span>--}}
                                        {{--<span class="postfix-text">Monthly</span>--}}
                                    {{--</div>--}}
                                    {{--<a class="btn-default" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-description -->--}}
                            {{--</article>--}}
                            {{--<!-- .property-listing-simple-1 -->--}}
                            {{--<article class="property-listing-simple property-listing-simple-1 listing-post-even hentry clearfix">--}}
                                {{--<div class="property-thumbnail col-sm-4 zero-horizontal-padding">--}}
                                    {{--<a href="property-single.html"><img class="img-responsive" src="images/property/property-9-660x600.jpg" alt="Thumbnail"></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-thumbnail -->--}}
                                {{--<div class="title-and-meta col-sm-8">--}}
                                    {{--<header class="entry-header">--}}
                                        {{--<h3 class="entry-title"><a href="property-single.html" rel="bookmark">Villa on Hollywood Boulevard</a></h3>--}}
                                        {{--<div class="price-wrapper hidden-lg">--}}
                                            {{--<span class="prefix-text">From</span><span class="price">$740,000</span>--}}
                                            {{--<span class="postfix-text">/ Year</span>--}}
                                        {{--</div>--}}
                                        {{--<p class="property-address visible-lg">--}}
                                            {{--<i class="fa fa-map-marker"></i>Hatteras Lane, Hollywood, FL 33019, USA--}}
                                        {{--</p>--}}
                                    {{--</header>--}}
                                    {{--<div class="property-meta entry-meta clearfix">--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-area">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Area</span>--}}
                                                {{--<span class="meta-item-value">4530<sub class="meta-item-unit">Sq M</sub></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-bed">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"/>--}}
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
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Bathrooms</span>--}}
                                                {{--<span class="meta-item-value">4</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-garage">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Garages</span>--}}
                                                {{--<span class="meta-item-value">2</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-ptype">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Type</span>--}}
                                                {{--<span class="meta-item-value">Villa</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-tag">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Status</span>--}}
                                                {{--<span class="meta-item-value">For Sale</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-meta -->--}}
                                    {{--<a class="btn-default visible-md-inline-block" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .title-and-meta -->--}}
                                {{--<div class="property-description visible-lg">--}}
                                    {{--<h4 class="title-heading">Description</h4>--}}
                                    {{--<p>Enjoy the cool serenity of Deering Bay all day from this spectacular…</p>--}}
                                    {{--<div class="price-wrapper">--}}
                                        {{--<span class="prefix-text">Price</span><span class="price">$740,000</span>--}}
                                    {{--</div>--}}
                                    {{--<a class="btn-default" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-description -->--}}
                            {{--</article>--}}
                            {{--<!-- .property-listing-simple-1 -->--}}
                            {{--<article class="property-listing-simple property-listing-simple-1 listing-post-odd hentry clearfix">--}}
                                {{--<div class="property-thumbnail col-sm-4 zero-horizontal-padding">--}}
                                    {{--<a href="property-single.html"><img class="img-responsive" src="images/property/property-2-660x600.jpg" alt="Thumbnail"></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-thumbnail -->--}}
                                {{--<div class="title-and-meta col-sm-8">--}}
                                    {{--<header class="entry-header">--}}
                                        {{--<h3 class="entry-title"><a href="property-single.html" rel="bookmark">Villa on Grand Avenue</a></h3>--}}
                                        {{--<div class="price-wrapper hidden-lg">--}}
                                            {{--<span class="prefix-text">From</span><span class="price">$4,750</span>--}}
                                            {{--<span class="postfix-text">/ Year</span>--}}
                                        {{--</div>--}}
                                        {{--<p class="property-address visible-lg">--}}
                                            {{--<i class="fa fa-map-marker"></i>CocoWalk, 3015 Grand Avenue, Miami, FL 33133, USA--}}
                                        {{--</p>--}}
                                    {{--</header>--}}
                                    {{--<div class="property-meta entry-meta clearfix">--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-area">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Area</span>--}}
                                                {{--<span class="meta-item-value">9450<sub class="meta-item-unit">Sq M</sub></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-bed">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Bedrooms</span>--}}
                                                {{--<span class="meta-item-value">4</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-bath">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Bathrooms</span>--}}
                                                {{--<span class="meta-item-value">4</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-garage">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Garages</span>--}}
                                                {{--<span class="meta-item-value">2</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-ptype">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Type</span>--}}
                                                {{--<span class="meta-item-value">Villa</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-tag">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Status</span>--}}
                                                {{--<span class="meta-item-value">For Rent</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-meta -->--}}
                                    {{--<a class="btn-default visible-md-inline-block" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .title-and-meta -->--}}
                                {{--<div class="property-description visible-lg">--}}
                                    {{--<h4 class="title-heading">Description</h4>--}}
                                    {{--<p>Enjoy the cool serenity of Deering Bay all day from this spectacular…</p>--}}
                                    {{--<div class="price-wrapper">--}}
                                        {{--<span class="prefix-text">Price</span><span class="price">$4,750</span>--}}
                                        {{--<span class="postfix-text">Monthly</span>--}}
                                    {{--</div>--}}
                                    {{--<a class="btn-default" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-description -->--}}
                            {{--</article>--}}
                            {{--<!-- .property-listing-simple-1 -->--}}
                            {{--<article class="property-listing-simple property-listing-simple-1 listing-post-even hentry clearfix">--}}
                                {{--<div class="property-thumbnail col-sm-4 zero-horizontal-padding">--}}
                                    {{--<a href="property-single.html"><img class="img-responsive" src="images/property/property-8-660x600.jpg" alt="Thumbnail"></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-thumbnail -->--}}
                                {{--<div class="title-and-meta col-sm-8">--}}
                                    {{--<header class="entry-header">--}}
                                        {{--<h3 class="entry-title"><a href="property-single.html" rel="bookmark">Office Space at Northwest 107th Avenue</a></h3>--}}
                                        {{--<div class="price-wrapper hidden-lg">--}}
                                            {{--<span class="prefix-text">From</span><span class="price">$3,100</span>--}}
                                            {{--<span class="postfix-text">/ Year</span>--}}
                                        {{--</div>--}}
                                        {{--<p class="property-address visible-lg">--}}
                                            {{--<i class="fa fa-map-marker"></i>Northwest 107th Avenue, Doral, FL 33178, USA--}}
                                        {{--</p>--}}
                                    {{--</header>--}}
                                    {{--<div class="property-meta entry-meta clearfix">--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-area">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill="#cc0033" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Area</span>--}}
                                                {{--<span class="meta-item-value">2800<sub class="meta-item-unit">Sq M</sub></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-ptype">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M24 48.001c-13.255 0-24-10.745-24-24.001 0-13.254 10.745-24 24-24s24 10.746 24 24c0 13.256-10.745 24.001-24 24.001zm10-27.001l-10-8-10 8v11c0 1.03.888 2.001 2 2.001h3.999v-9h8.001v9h4c1.111 0 2-.839 2-2.001v-11z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Type</span>--}}
                                                {{--<span class="meta-item-value">Office</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="meta-item">--}}
                                            {{--<i class="meta-item-icon icon-tag">--}}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" class="meta-icon-container" width="30" height="30" viewBox="0 0 48 48">--}}
                                                    {{--<path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#cc0033" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"/>--}}
                                                {{--</svg>--}}
                                            {{--</i>--}}
                                            {{--<div class="meta-inner-wrapper">--}}
                                                {{--<span class="meta-item-label">Status</span>--}}
                                                {{--<span class="meta-item-value">For Rent</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- .property-meta -->--}}
                                    {{--<a class="btn-default visible-md-inline-block" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .title-and-meta -->--}}
                                {{--<div class="property-description visible-lg">--}}
                                    {{--<h4 class="title-heading">Description</h4>--}}
                                    {{--<p>Beautifully landscaped four story building and professionally decorated common areas. After hours…</p>--}}
                                    {{--<div class="price-wrapper">--}}
                                        {{--<span class="prefix-text">Price</span><span class="price">$3,100</span>--}}
                                        {{--<span class="postfix-text">Monthly</span>--}}
                                    {{--</div>--}}
                                    {{--<a class="btn-default" href="property-single.html">Show Details<i class="fa fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                                {{--<!-- .property-description -->--}}
                            {{--</article>--}}
                            {{--<!-- .property-listing-simple-1 -->--}}
                        </main>
                        <!-- .site-main -->
                    </div>
                    <!-- .site-main-content -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .site-content -->
    </div>
    <!-- .site-content-wrapper -->
@endsection