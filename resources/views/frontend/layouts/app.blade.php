<!DOCTYPE html>
<html lang="en-US">
    <head>
	    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Christ Embassy &#8211; @if(Illuminate\Support\Str::contains(url('/'), 'aachen')) Aachen @else Maxvorstadt @endif</title>
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
		<link rel='stylesheet' id='contact-form-7-css'  href="{{asset('vendors/contact-form-7/css/styles.css?ver=4.9.2')}}" type='text/css' media='all' />
		<link rel='stylesheet' id='wow-animate-css-css'  href='{{asset("vendors/wow/css/animate.min.css?ver=3.4.0")}}' type='text/css' media='all' />
		<link rel='stylesheet' id='slick-css-css'  href='{{asset("vendors/slick/slick.css?ver=3.4.0")}}' type='text/css' media='all' />
		<link rel='stylesheet' id='chrimbo-style-css'  href="{{asset('frontend/css/style.css?ver=5.7')}}" type='text/css' media='all' />
		<link rel='stylesheet' id='chrimbo-google-fonts-css' href='https://fonts.googleapis.com/css?family=Oxygen%3A400%2C300%2C700%7CPlayfair%2BDisplay%3A400%2C400i%2C700%2C700i%2C900&#038;ver=5.7' type='text/css' media='all' />
		<link rel='stylesheet'  href='{{asset("frontend/css/custom.css")}}' type='text/css' />
        <link rel='stylesheet' id='wow-animate-css-css'  href='{{asset("vendors/wow/css/animate.min.css?ver=3.4.0")}}' type='text/css' media='all' />
        <link rel='stylesheet' href='{{asset("backend/css/bootstrap.min.css")}}' type='text/css' media='all' />
        <script type='text/javascript' src="{{asset('vendors/jquery/jquery.min.js?ver=3.5.1')}}" id='jquery-core-js'></script>
		<script type='text/javascript' src="{{asset('vendors/jquery/jquery-migrate.min.js?ver=3.3.2')}}" id='jquery-migrate-js'></script>
		 @stack('styles')
</head>

@if(request()->is('/')) 
<body class="home page-template-default page page-id-114">
@else <body class="post-template-default single single-post postid-53 single-format-standard evision-right-sidebar">
@endif

    <div id="page">
        <section id="wraploader" class="wraploader">
            <div id="loader" class="loader-outer">
            <svg id="wrapcircle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="71.333px" height="12.667px" viewBox="0 0 71.333 12.667" enable-background="new 0 0 71.333 12.667" xml:space="preserve">
            <circle fill="#FFFFFF" cx="5" cy="6.727" r="5" id="firstcircle"></circle>
            <circle fill="#FFFFFF" cx="20" cy="6.487" r="5" id="secondcircle"></circle>
            <circle fill="#FFFFFF" cx="35" cy="6.487" r="5" id="thirthcircle"></circle>
            <circle fill="#FFFFFF" cx="50" cy="6.487" r="5" id="forthcircle"></circle>
            <circle fill="#FFFFFF" cx="65" cy="6.487" r="5" id="fifthcircle"></circle>
            </svg>
            </div>
        </section>
    
        <div class="social-widget evision-social-section social-icon-only">
            <div class="menu-social-links-menu-container">
                <ul id="primary-menu" class="menu">
                    <li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24">
                        <a href="https://www.yelp.com"><span>Yelp</span></a>
                    </li>
                    <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25">
                        <a href="https://www.facebook.com/wordpress"><span>Facebook</span></a>
                    </li>
                    <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="https://twitter.com/wordpress"><span>Twitter</span></a></li>
                    <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="https://www.instagram.com/explore/tags/wordcamp/"><span>Instagram</span></a></li>
                    <li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="mailto:wordpress@example.com"><span>Email</span></a></li>
                </ul>
            </div>            
        </div>

        {{-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> --}}
        
        @include('frontend.layouts.header')

        @yield('main')
    </div>        
    <!-- *****************************************
            Footer before section
    ****************************************** -->
    <section class="wrapper block-section wrap-contact footer-widget">
        <div class="container overhidden">
            <div class="contact-inner evision-animate fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="contact-list col-md-4 col-sm-4 col-xs-12">
                                <aside id="text-6" class="widget widget_text">
                                    <h1 class="widget-title">About LoveWorld Inc</h1>			
                                    <div class="textwidget">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec. Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna placerat pulvinar.</p>
                                    </div>
                                </aside>                                    
                            </div>
                            <div class="contact-list col-md-4 col-sm-4 col-xs-12">    
                                <aside id="recent-posts-3" class="widget widget_recent_entries">
                                    <h1 class="widget-title">Testimonies</h1>
                                    <ul>
                                        @foreach ($testimonies as $testimony)
                                        <li>
                                            <a href="{{route('testimonies.show',$testimony)}}">{{$testimony->title}}</a>
                                            <span class="post-date">{{$testimony->created_at->format('F d, Y')}}</span>
                                        </li>
                                        @endforeach
                                    </ul>

                                </aside>                                    
                            </div>
                            <div class="contact-list col-md-4 col-sm-4 col-xs-12">
                                <aside id="text-4" class="widget widget_text">
                                    <h1 class="widget-title">Find Us</h1>			
                                    <div class="textwidget">
                                        <p><strong>Address</strong><br />
                                            123 Main Street<br />
                                            New York, NY 10001</p>
                                            <p><strong>Hours</strong><br />
                                            Monday&mdash;Friday: 9:00AM&ndash;5:00PM<br />
                                            Saturday &amp; Sunday: 11:00AM&ndash;3:00PM</p>
                                    </div>
                                </aside>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- *****************************************
                Footer before section ends
    ****************************************** -->
        <!-- *****************************************
            Footer section starts
    ****************************************** -->
    @include('frontend.layouts.footer')
    <!-- *****************************************
                Footer section ends
    ****************************************** -->
    <a id="gotop" class="evision-back-to-top" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>

    <script type='text/javascript' src='{{asset("backend/js/core/popper.min.js")}}'></script>
    <script type='text/javascript' src='{{asset("backend/js/core/jquery.3.2.1.min.js")}}'></script>
    <script type='text/javascript' src='{{asset("backend/js/core/bootstrap.min.js")}}'></script>
    <script type='text/javascript' src='{{asset("frontend/js/modernizr.min.js?ver=2.8.3' id='modernizr-js")}}'></script>
    <script type='text/javascript' src='{{asset("frontend/js/menu2016.js?ver=20120206' id='navigation-js-js")}}'></script>
    <script type='text/javascript' src='{{asset("vendors/jquery.easing/jquery.easing.js?ver=0.3.6")}}' id='easing-js-js'></script>
    <script type='text/javascript' src='{{asset("vendors/wow/js/wow.min.js?ver=1.1.2")}}' id='wow-js'></script>
    <script type='text/javascript' src='{{asset("vendors/slick/slick.min.js?ver=1.6.0")}}' id='slick-js'></script>
    <script type='text/javascript' src='{{asset("vendors/waypoints/jquery.waypoints.min.js?ver=4.0.0")}}' id='waypoints-js'></script>
    <script type='text/javascript' src='{{asset("frontend/js/evision-custom.js?ver=1.0.1")}}' id='evision-custom-js'></script>
    @stack('scripts')
</body>
</html>