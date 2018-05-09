@extends('realplaces.layouts.home3')

@section('content')
    <div class="page-head " style="background: #494c53 no-repeat center top;  background-size: cover;">
        <div class="container">
            <div class="page-head-content">
                <h2 class="page-title"><span>About Us</span></h2>
            </div>
        </div>
    </div>
    <div id="content-wrapper" class="site-content-wrapper site-pages">
        <div id="content" class="site-content layout-boxed">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 site-main-content">
                        <main id="main" class="site-main default-page blog-single-post clearfix">
                            <article class="blog-post clearfix hentry format-image">
                                <figure>
                                    <a class="swipebox" href="{{ asset('public/ferdenrealty-header1.jpg') }}">
                                        <img class="img-responsive" src="{{ asset('public/ferdenrealty-header1.jpg') }}">
                                    </a>
                                </figure>
                                <header class="entry-header blog-post-entry-header">
                                    <h1 class="entry-title">Ferden Realty Corporation</h1>
                                    <div class="entry-meta blog-post-entry-meta">
                                        {{-- By <a class="vcard fn" href="#">John Doe</a> Posted in <a href="#" rel="category tag">Luxury</a> On <time class="entry-date published" datetime="2015-07-13T19:57:19+00:00">Jul 13, 2015</time> --}}
                                        About the company
                                    </div>
                                </header>
                                <div class="entry-content clearfix">
                                    <p>
                                        Ferden Realty Corporation was established in 1999. Our Company's president has been the Chairman of the Board of REBAP from 2012 to 2014.
                                    </p>
                                    <h3>Ferden Realty Corporation can provide the following services to our clients</h3>
                                    <ol>
                                        <li>Lots (Residential, Commercial)</li>
                                        <li>House and Lot</li>
                                        <li>Condominium (Residential, Commercial)</li>
                                        <li>Land Survey (by Appointment)</li>
                                        <li>Transfer of Title</li>
                                        <li>Title Verification</li>
                                        <li>Loan Assistance</li>
                                    </ol>
                                </div>
                            </article>
                        </main>
                        <!-- .site-main -->
                    </div>
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .site-content -->
    </div>
@endsection