@extends('realplaces.layouts.home3')

@section('content')
    <div class="page-head " style="background: #494c53 no-repeat center top;  background-size: cover;">
        <div class="container">
            <div class="page-head-content">
                <h1 class="page-title"><span>Agents</span></h1>
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
                            <div class="agent-post-listing">
                                <div class="row zero-horizontal-margin">
                                    @php
                                        $iterator = 0;
                                    @endphp
                                    @foreach($agents as $agent)
                                        <div class="col-sm-6 zero-horizontal-padding">
                                            <article class="agent-listing-post {{ $iterator % 2 == 1 ? 'agent-post-odd' : 'agent-post-even' }} clearfix hentry">
                                                <div class="agent-content-wrapper agent-common-styles">
                                                    <div class="inner-wrapper clearfix">
                                                        <figure class="agent-image">
                                                            <a href="agent-single.html"><img class="img-circle" src="{{ asset('public/' . $agent->profile_photo) }}" alt="Nathan James"></a>
                                                        </figure>
                                                        <h3 class="agent-name"><a href="agent-single.html">{{ $agent->name }}</a><span>Sales Manager</span></h3>
                                                        <div class="agent-social-profiles">
                                                            {{--<a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>--}}
                                                            <a class="facebook" target="_blank" href="{{ $agent->facebook_url }}"><i class="fa fa-facebook"></i></a>
                                                            {{--<a class="gplus" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>--}}
                                                            {{--<a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>--}}
                                                            {{--<a class="pinterest" target="_blank" href="#"><i class="fa fa-pinterest"></i></a>--}}
                                                            {{--<a class="instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a>--}}
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
                                                                <path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0DBAE8" d="M17.001 23.999h-10.001c-1.657 0-3-1.343-3-2.999v-18c0-1.656 1.343-3 3-3h10.001c1.655 0 2.999 1.344 2.999 3v18c0 1.656-1.344 2.999-2.999 2.999zm.999-19.999c0-1.105-.896-2-2-2h-8c-1.105 0-2 .896-2 2v16c0 1.104.895 2 2 2h8c1.104 0 2-.896 2-2v-16zm-4 1h-4c-.552 0-1-.447-1-1 0-.552.448-1 1-1h4c.553 0 1.001.448 1.001 1 0 .553-.448 1-1.001 1zm-2 13c1.105 0 2 .672 2 1.499 0 .829-.895 1.501-2 1.501s-2-.672-2-1.501c0-.827.895-1.499 2-1.499z"/>
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
                                                    <p>Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Duis mollis, est non...</p>
                                                    <a class="btn-default show-details" href="{{ route('page.agent.profile', ['agent_id' => $agent->id]) }}">View Profile<i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </article>
                                            <!-- .agent-listing-post -->
                                        </div>
                                        @php
                                            $iterator++;
                                        @endphp
                                    @endforeach
                                    {{--<div class="col-sm-6 zero-horizontal-padding">--}}
                                        {{--<article class="agent-listing-post agent-post-even clearfix hentry">--}}
                                            {{--<div class="agent-content-wrapper agent-common-styles">--}}
                                                {{--<div class="inner-wrapper clearfix">--}}
                                                    {{--<figure class="agent-image">--}}
                                                        {{--<a href="agent-single.html"><img class="img-circle" src="{{ asset('public/agent-2.jpg') }}" alt="Melissa William"></a>--}}
                                                    {{--</figure>--}}
                                                    {{--<h3 class="agent-name"><a href="agent-single.html">Melissa William</a><span>Real Estate Agent</span></h3>--}}
                                                    {{--<div class="agent-social-profiles">--}}
                                                        {{--<a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>--}}
                                                        {{--<a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>--}}
                                                        {{--<a class="gplus" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>--}}
                                                        {{--<a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>--}}
                                                        {{--<a class="pinterest" target="_blank" href="#"><i class="fa fa-pinterest"></i></a>--}}
                                                        {{--<a class="instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<ul class="agent-contacts-list">--}}
                                                    {{--<li class="office">--}}
                                                        {{--<svg xmlns="http://www.w3.org/2000/svg" class="contacts-icon-container" width="24" height="24" viewBox="0 0 24 24">--}}
                                                            {{--<path class="contacts-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#0080BC" d="M1.027 4.846l-.018.37.01.181c.068 9.565 7.003 17.42 15.919 18.48.338.075 1.253.129 1.614.129.359 0 .744-.021 1.313-.318.328-.172.448-.688.308-1.016-.227-.528-.531-.578-.87-.625-.435-.061-.905 0-1.521 0-1.859 0-3.486-.835-4.386-1.192l.002.003-.076-.034c-.387-.156-.696-.304-.924-.422-3.702-1.765-6.653-4.943-8.186-8.896-.258-.568-1.13-2.731-1.152-6.009h.003l-.022-.223c0-1.727 1.343-3.128 2.999-3.128 1.658 0 3.001 1.401 3.001 3.128 0 1.56-1.096 2.841-2.526 3.079l.001.014c-.513.046-.914.488-.914 1.033 0 .281.251 1.028.251 1.028.015 0 .131.188.119.188-.194-.539 1.669 5.201 7.021 7.849-.001.011.636.309.636.309.47.3 1.083.145 1.37-.347.09-.151.133-.32.14-.488.356-1.306 1.495-2.271 2.863-2.271 1.652 0 2.991 1.398 2.991 3.12 0 .346-.066.671-.164.981-.3.594-.412 1.21.077 1.699.769.769 1.442-.144 1.442-.144.408-.755.643-1.625.643-2.554 0-2.884-2.24-5.222-5.007-5.222-1.947 0-3.633 1.164-4.46 2.858-2.536-1.342-4.556-3.59-5.656-6.344 1.848-.769 3.154-2.647 3.154-4.849 0-2.884-2.241-5.222-5.007-5.222-2.41 0-4.422 1.777-4.897 4.144l-.091.711z"/>--}}
                                                        {{--</svg>--}}
                                                        {{--<span>Office:</span>1-234-456-7892--}}
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
                                                        {{--900 Biscayne Blvd Way Miami, FL, USA--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                                {{--<p>Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Duis mollis, est non...</p>--}}
                                                {{--<a class="btn-default show-details" href="agent-single.html">View Profile<i class="fa fa-angle-right"></i></a>--}}
                                            {{--</div>--}}
                                        {{--</article>--}}
                                        {{--<!-- .agent-listing-post -->--}}
                                    {{--</div>--}}
                                </div>
                                <!-- .row-->
                            </div>
                            <!-- .property-listing-page -->
                            <!--<div class="pagination">
                               <a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a>
                               <span class="page-numbers current">1</span>
                               <a class="page-numbers" href="#">2</a>
                               <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                               </div>-->
                            <!-- .pagination -->
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
@endsection