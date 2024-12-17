<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from html.dynamiclayers.net/dl/charitify/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 11:51:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content="DynamicLayers">
    <title>{{config('app.name')}} || @yield('title',"Page")</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/elegant-font-icons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/elegant-line-icons.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/venobox/venobox.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/css-animation.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/nivo-slider.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    @stack('stylesheets')
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class="site-preloader-wrap">
    <div class="spinner"></div>
</div>
@include('layouts.classic._inc.navbar')
<div class="header-height"></div>

{{--<section class="slider-section">
    <div class="slider-wrapper">
        <div id="main-slider" class="nivoSlider">
            <img src="{{asset('assets/img/slider-1.jpg')}}" alt title="#slider-caption-1"/>
            <img src="{{asset('assets/img/slider-2.jpg')}}" alt title="#slider-caption-2"/>
            <img src="{{asset('assets/img/slider-3.jpg')}}" alt title="#slider-caption-3"/>
        </div>
        <div id="slider-caption-1" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                            <h1 class="wow cssanimation leFadeInRight sequence">Better Life for People</h1>
                            <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you
                                may be the one who needs helping! <br>Forget what you can get and see what you can give.
                            </p>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                With Us</a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-caption-2" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                                Together we <br>can make a Difference</h1>
                            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow you
                                may be the one who needs helping! <br>Forget what you can get and see what you can give.
                            </p>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                With Us</a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-caption-3" class="nivo-html-caption slider-caption">
            <div class="display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                            <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a little.
                                Change a lot.</h1>
                            <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you
                                may be the one who needs helping! <br>Forget what you can get and see what you can give.
                            </p>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                With Us</a>
                            <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="promo-section-2 padding bd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="promo-content">
                    <img src="img/icon-1.png" alt="prmo icon">
                    <h3>Make Donetion</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="promo-content">
                    <img src="img/icon-2.png" alt="prmo icon">
                    <h3>Fundrising</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="promo-content">
                    <img src="img/icon-3.png" alt="prmo icon">
                    <h3>Become A Volunteer</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>--}}
@yield('content')

@include('layouts.classic._inc.footer')
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script src="{{asset("assets/js/vendor/jquery-1.12.4.min.js")}}"></script>

<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/tether.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.isotope.v3.0.2.js')}}"></script>

<script src="{{asset('assets/js/vendor/smooth-scroll.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/venobox.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.counterup.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.waypoints.v2.0.3.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.slicknav.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.nivo.slider.pack.js')}}"></script>

<script src="{{asset('assets/js/vendor/letteranimation.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>

<script src="{{asset('assets/js/contact.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
@stack('scripts')
</body>

<!-- Mirrored from html.dynamiclayers.net/dl/charitify/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 11:52:03 GMT -->
</html>
