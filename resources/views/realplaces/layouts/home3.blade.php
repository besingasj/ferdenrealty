<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME', "Ferden Realty Corporation") }}</title>
    <link rel="icon" href="{{ asset('public/realplaces/images/ferden-cropped-ms-icon-310x310-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('public/realplaces/images/ferden-cropped-ms-icon-310x310-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('public/realplaces/images/ferden-cropped-ms-icon-310x310-180x180.png') }}">
    <!-- Google font-->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,700,600,500' rel='stylesheet' type='text/css'>
    <!-- Include the flexslider stylesheet -->
    <link href="{{ asset('public/realplaces/js/flexslider/flexslider.css') }}" rel="stylesheet">
    <!-- Include the lightslider stylesheet -->
    <link href="{{ asset('public/realplaces/js/lightslider/css/lightslider.min.css') }}" rel="stylesheet">
    <!-- Include the owl-carousel stylesheet -->
    <link href="{{ asset('public/realplaces/js/owl.carousel/owl.carousel.css') }}" rel="stylesheet">
    <!-- Include the swipebox stylesheet -->
    <link href="{{ asset('public/realplaces/js/swipebox/css/swipebox.min.css') }}" rel="stylesheet">
    <!-- Include the select2 stylesheet -->
    <link href="{{ asset('public/realplaces/js/select2/select2.css') }}" rel="stylesheet">
    <!-- Include the font-awesome stylesheet -->
    <link href="{{ asset('public/realplaces/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Include the select2 stylesheet -->
    <link href="{{ asset('public/realplaces/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/realplaces/js/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/realplaces/css/main.css') }}"/>
    <!-- Default Theme stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/realplaces/css/theme.css') }}"/>
</head>
<body class="inspiry-slider-two">
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution="setup_tool"
  page_id="186086025080115"
  theme_color="#cc0033">
</div>
<div class="page-loader">
    <img class="page-loader-img" src="{{ asset('public/realplaces/images/page-loader-img.gif') }}" alt="Page Loader"/>
</div>
<div id="mobile-header" class="mobile-header hidden-md hidden-lg">
    <div class="contact-number">
        {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="10" height="16" viewBox="0 0 10 16">--}}
            {{--<path class="icon-phone-two" fill="#cc0033" d="M7.06452,16.0606h-3.997c-1.653 0-2.995-1.342-2.995-2.998v-9.99c0-1.654 1.342-2.998 2.996-2.998h3.997c1.655 0 2.997 1.344 2.997 2.998v9.99c0 1.656-1.342 2.998-2.997 2.998zm1-5.822v-7.166c0-.55-.447-1-1-1h-3.995c-.552 0-1 .448-1 1v9.991c0 .552.447 1 1 1h3.995c.552 0 1-.448 1-1v-2.825zm-2.997 2.824c-.55 0-1-.447-1-.998 0-.553.448-1 1-1s1 .447 1 1c0 .55-.448.998-1 .998z"/>--}}
        {{--</svg>--}}
        {{--<span class="desktop-version hidden-xs">1-800-555-1234</span>--}}
        {{--<a class="mobile-version visible-xs-inline-block" href="tel://1-800-555-1234" title="Make a Call">1-800-555-1234</a>--}}
    </div>
    <!-- .contact-number -->
    {{--<div class="mobile-header-nav">--}}
        {{--<ul class="user-nav">--}}
            {{--<li>--}}
                {{--<a href="mailto:agents@ferdenrealtycorporation.com">--}}
                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="16" height="10" viewBox="0 0 16 10">--}}
                        {{--<path class="icon-email-two" fill="#737a84" d="M15.09455,11.9789h-13.986c-.55 0-1-.447-1-1v-9.99c0-.55.448-.998 1-.998h13.986c.552 0 1 .447 1 1v9.99c0 .55-.448.998-1 .998zm-2.412-1.997l-3.02-3.02-.91.78c-.175.15-.402.24-.65.24-.25 0-.475-.09-.65-.24l-.913-.78-3.02 3.02h9.164zm-10.575-1.413l2.912-2.91-2.912-2.497v5.407zm1.703-6.58l4.291 3.679 4.293-3.68h-8.585zm7.375 3.67l2.912 2.91v-5.406l-2.912 2.495z"/>--}}
                    {{--</svg>--}}
                    {{--agents@ferdenrealtycorporation.com--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="login-register-link" href="#login-modal" data-toggle="modal">--}}
                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="12" height="16" viewBox="0 0 12 16">--}}
                        {{--<path class="icon-lock" fill="#737a84" d="M8.62046,16.09077h-4.994c-1.932 0-3.498-1.565-3.498-3.498v-6.494h2v-1.997c0-2.208 1.788-3.996 3.995-3.996s3.996 1.787 3.996 3.996v1.997h2v6.494c0 1.933-1.568 3.498-3.5 3.498zm-2.497-13.987c-1.104 0-2 .895-2 2v1.995h3.997v-1.998c0-1.104-.894-2-1.997-2zm3.996 5.995h-7.992v4.494c0 .828.67 1.5 1.5 1.5h4.993c.828 0 1.5-.672 1.5-1.5v-4.494zm-3.996 3.996c-.55 0-1-.447-1-1 0-.552.448-1 1-1s1 .448 1 1c0 .553-.448 1-1 1z"/>--}}
                    {{--</svg>--}}
                    {{--Login / Sign up--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<!--<li><a href="index.html"><i class="fa fa-sign-out"></i>Logout</a></li>-->--}}
            {{--<li><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>--}}
            {{--<li><a href="my-properties.html"><i class="fa fa-th-list"></i>My Properties</a></li>--}}
            {{--<li><a href="favorites.html"><i class="fa fa-star"></i>Favorites</a></li>--}}
            {{--<li><a class="submit-property-link" href="submit-property.html"><i class="fa fa-plus-circle"></i>Submit Property</a></li>--}}
        {{--</ul>--}}
        {{--<!-- .user-nav -->--}}
        {{--<div class="social-networks header-social-nav">--}}
            {{--<a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a><a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a><a class="gplus" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>--}}
        {{--</div>--}}
        {{--<!-- .social-networks -->--}}
    {{--</div>--}}
</div>
<header class="site-header header header-variation-three">
    <div class="container">
        <div class="row zero-horizontal-margin">
            <div class="col-lg-3 zero-horizontal-padding">
                <div id="site-logo" class="site-logo">
                    <div class="logo-inner-wrapper">
                        <a href="{{ route('page.index') }}"><img src="{{ asset('public/realplaces/images/ferden-logo.png') }}" alt="Logo"/></a>
                        <small class="tag-line">Where Dreams Come Home</small>
                    </div>
                </div>
            </div>
            <!-- .left-column -->
            <div class="col-lg-9 zero-horizontal-padding hidden-xs hidden-sm">
                <div class="header-top clearfix">
                    <div class="social-networks header-social-nav">
                        <a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a><a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a><a class="gplus" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                    </div><!-- .social-networks -->
                    <ul class="user-nav">
                        <li><a href="mailto:sales@yourwebsite.com"><svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="16" height="10" viewBox="0 0 16 10"><path class="icon-email-two" fill="#737a84" d="M15.09455,11.9789h-13.986c-.55 0-1-.447-1-1v-9.99c0-.55.448-.998 1-.998h13.986c.552 0 1 .447 1 1v9.99c0 .55-.448.998-1 .998zm-2.412-1.997l-3.02-3.02-.91.78c-.175.15-.402.24-.65.24-.25 0-.475-.09-.65-.24l-.913-.78-3.02 3.02h9.164zm-10.575-1.413l2.912-2.91-2.912-2.497v5.407zm1.703-6.58l4.291 3.679 4.293-3.68h-8.585zm7.375 3.67l2.912 2.91v-5.406l-2.912 2.495z"></path></svg>agents@ferdenrealtycorporation.com</a></li>
                        {{--<li><a class="login-register-link" href="#login-modal" data-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="12" height="16" viewBox="0 0 12 16"><path class="icon-lock" fill="#737a84" d="M8.62046,16.09077h-4.994c-1.932 0-3.498-1.565-3.498-3.498v-6.494h2v-1.997c0-2.208 1.788-3.996 3.995-3.996s3.996 1.787 3.996 3.996v1.997h2v6.494c0 1.933-1.568 3.498-3.5 3.498zm-2.497-13.987c-1.104 0-2 .895-2 2v1.995h3.997v-1.998c0-1.104-.894-2-1.997-2zm3.996 5.995h-7.992v4.494c0 .828.67 1.5 1.5 1.5h4.993c.828 0 1.5-.672 1.5-1.5v-4.494zm-3.996 3.996c-.55 0-1-.447-1-1 0-.552.448-1 1-1s1 .448 1 1c0 .553-.448 1-1 1z"></path></svg>Login / Sign up</a></li>--}}
                        {{--<!--<li><a href="index.php"><i class="fa fa-sign-out"></i>Logout</a></li>-->--}}
                        <li><a href="{{ route('page.agents') }}"><i class="fa fa-users"></i>Agents</a></li>
                        {{--<li><a href="my-properties.php"><i class="fa fa-th-list"></i>My Properties</a></li>--}}
                        {{--<li><a href="favorites.php"><i class="fa fa-star"></i>Favorites</a></li>--}}
                        {{--<li><a class="submit-property-link" href="submit-property.php"><i class="fa fa-plus-circle"></i>Submit</a></li>--}}
                    </ul><!-- .user-nav -->
                </div>
                <!-- .header-top -->
                <div class="header-bottom clearfix">
                    {{--<div class="contact-number">--}}
                        {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="10" height="16" viewBox="0 0 10 16">--}}
                            {{--<path class="icon-phone-two" fill="#cc0033" d="M7.06452,16.0606h-3.997c-1.653 0-2.995-1.342-2.995-2.998v-9.99c0-1.654 1.342-2.998 2.996-2.998h3.997c1.655 0 2.997 1.344 2.997 2.998v9.99c0 1.656-1.342 2.998-2.997 2.998zm1-5.822v-7.166c0-.55-.447-1-1-1h-3.995c-.552 0-1 .448-1 1v9.991c0 .552.447 1 1 1h3.995c.552 0 1-.448 1-1v-2.825zm-2.997 2.824c-.55 0-1-.447-1-.998 0-.553.448-1 1-1s1 .447 1 1c0 .55-.448.998-1 .998z"/>--}}
                        {{--</svg>--}}
                        {{--<span class="desktop-version hidden-xs">1-800-555-1234</span>--}}
                        {{--<a class="mobile-version visible-xs-inline-block" href="tel://1-800-555-1234" title="Make a Call">1-800-555-1234</a>--}}
                    {{--</div>--}}
                    <!-- .contact-number -->
                    <nav id="site-main-nav" class="site-main-nav">
                        <ul class="main-menu clearfix">
                            <li class="{{ Request::is('/') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('page.index') }}">Home</a>
                            </li>
                            <li class="{{ strpos(url()->current(), 'taytay') > 0 ? 'current-menu-item' : '' }}">
                                <a href="{{ route('page.properties', ['city' => "taytay"]) }}">Taytay</a>
                            </li>
                            <li class="{{ strpos(url()->current(), 'cainta') > 0 ? 'current-menu-item' : '' }}">
                                <a href="{{ route('page.properties', ['city' => "cainta"]) }}">Cainta</a>
                            </li>
                            <li class="{{ strpos(url()->current(), 'antipolo') > 0 ? 'current-menu-item' : '' }}">
                                <a href="{{ route('page.properties', ['city' => "antipolo"]) }}">Antipolo</a>
                            </li>
                            <li class="{{ strpos(url()->current(), 'binangonan') > 0 ? 'current-menu-item' : '' }}">
                                <a href="{{ route('page.properties', ['city' => "binangonan"]) }}">Binangonan</a>
                            </li>
                            <li class="{{ strpos(url()->current(), 'teresa') > 0 ? 'current-menu-item' : '' }}">
                                <a href="{{ route('page.properties', ['city' => "teresa"]) }}">Teresa</a>
                            </li>
                            <li class="{{ strpos(url()->current(), 'pasig') > 0 ? 'current-menu-item' : '' }}">
                                <a href="{{ route('page.properties', ['city' => "pasig"]) }}">Pasig</a>
                            </li>
                            <li class="{{ strpos(url()->current(), 'quezon') > 0 ? 'current-menu-item' : '' }}">
                                <a href="{{ route('page.properties', ['city' => "quezon"]) }}">Quezon City</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- .header-bottom -->
            </div>
            <!-- .right-column -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</header>
@yield('content')
<footer class="site-footer site-footer-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 footer-logo">
                <a href="#">
                    <img class="img-responsive" src="{{ asset('public/realplaces/images/ferden-logo.png') }}" alt="Footer Logo"/>
                </a>
                <p class="copyright-text">
                © Copyright 2018 All right reserved 
                </p>
            </div>
            <div class="col-lg-9 footer-widget-area">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <section class="widget clearfix widget_lc_taxonomy">
                            <h3 class="widget-title">Locations</h3>
                            <ul>
                                <li>
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
                                    <ul>
                                    @foreach ($cities as $city)
                                        <li><a href="{{ route('page.properties', ['city' => $city]) }}">{{ $city }}</a></li>
                                    @endforeach
                                    </ul>
                                    {{--<a href="#">Miami</a> (12)--}}
                                    {{--<ul class="children">--}}
                                        {{--<li><a href="#">Little Havana</a> (2)</li>--}}
                                        {{--<li><a href="#">Perrine</a> (1)</li>--}}
                                        {{--<li><a href="#">Doral</a> (1)</li>--}}
                                    {{--</ul>--}}
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <section class="widget clearfix widget_lc_taxonomy">
                            <h3 class="widget-title">Property Types</h3>
                            <ul>
                                <li>
                                    <a href="">House N Lot</a>
                                </li>
                                <li>
                                    <a href="#">Commercial Space</a>
                                </li>
                                <li>
                                    <a href="#">Condo</a>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<section class="widget clearfix widget_lc_taxonomy">--}}
                            {{--<h3 class="widget-title">Property Statuses</h3>--}}
                            {{--<ul>--}}
                                {{--<li><a href="#">For Rent</a> (6)</li>--}}
                                {{--<li><a href="#">For Sale</a> (6)</li>--}}
                            {{--</ul>--}}
                        {{--</section>--}}
                    {{--</div>--}}
                    <div class="col-sm-6 col-md-4">
                        <section id="inspiry_social_media_icons-1" class="widget clearfix widget_inspiry_social_media_icons">
                            <h3 class="widget-title">Connect With Us</h3>
                            <div class="social-networks clearfix">
                                <a class="twitter" href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                <a class="facebook" href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                <a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a class="google-plus" href="#" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a class="instagram" href="#" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                                <a class="youtube-square" href="#" target="_blank"><i class="fa fa-youtube-square fa-lg"></i></a>
                                <a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a class="rss" href="#" target="_blank"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- .footer -->
<script src="{{ asset('public/realplaces/js/jquery-1.12.3.min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/flexslider/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/lightslider/js/lightslider.min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/select2/select2.min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/swipebox/js/jquery.swipebox.min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/jquery.hoverIntent.js') }}"></script>
<script src="{{ asset('public/realplaces/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/jquery.form.js') }}"></script>
<script src="{{ asset('public/realplaces/js/transition.js') }}"></script>
<script src="{{ asset('public/realplaces/js/jquery.appear.js') }}"></script>
<script src="{{ asset('public/realplaces/js/modal.js') }}"></script>
<script src="{{ asset('public/realplaces/js/meanmenu/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('public/realplaces/js/custom.js') }}"></script>
<script>
    // (function ($) {
    //     "use strict";
    //
    //     // if (jQuery().validate) {
    //     //
    //     //     //Login
    //     //     $('#login-form').validate();
    //     //
    //     //     //Register
    //     //     $('#register-form').validate();
    //     //
    //     //     //Forgot Password
    //     //     $('#forgot-form').validate();
    //     // }
    //     //
    //     // /*-----------------------------------------------------------------------------------*/
    //     // /* Modal dialog for Login and Register
    //     //  /*-----------------------------------------------------------------------------------*/
    //     // var loginModal = $('#login-modal'),
    //     //     modalSections = loginModal.find('.modal-section');
    //     //
    //     // $('.activate-section').on('click', function (event) {
    //     //     var targetSection = $(this).data('section');
    //     //     modalSections.slideUp();
    //     //     loginModal.find('.' + targetSection).slideDown();
    //     //     event.preventDefault();
    //     // });
    //
    // })(jQuery);
</script>
</body>
</html>
