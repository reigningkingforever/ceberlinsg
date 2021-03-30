<div class="wrapper header-wrapper">
    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-md-2 " style="padding:0px;">
                            <img src="{{asset('frontend/img/logo.jpg')}}">
                        </div>
                        <div class="col-md-10" style="padding:10px 0 0;">
                            <div class="site-branding">
                                <p class="site-title" >
                                    <a href="#" rel="home">Christ Embassy Berlin</a>
                                </p>
                                <h2 class="site-description"><i>giving your life a meaning</i></h2>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="row">
                        <div class="nav-holder">
                            <div class="col-xs-12 mb-device go-left">
                                <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="fa fa-bars"></span></button>
                                <div id="site-header-menu" class="site-header-menu">
                                    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
                                        <div class="menu-top-menu-container">
                                            <ul id="primary-menu" class="primary-menu">
                                                <li id="menu-item-20" class="menu-item current-menu-item current_page_item">
                                                    <a href="{{url('/')}}" aria-current="page">Home</a>
                                                    
                                                </li>
                                                <li id="menu-item-21" class="menu-item menu-item-has-children menu-item-21">
                                                    <a href="#">Events</a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                                            <a href="{{route('services')}}">Upcoming Services</a>
                                                        </li>
                                                        <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                                                            <a href="{{route('birthdays')}}">Upcoming Birthdays</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children menu-item-21">
                                                    <a href="#">Articles</a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                                            <a href="{{route('services')}}">Sermons</a>
                                                        </li>
                                                        <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                                                            <a href="{{route('salvation')}}">Prayer of Salvation</a>
                                                        </li> 
                                                        <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                                                            <a href="{{route('testimonies')}}">Share Testimony</a>
                                                        </li>  
                                                    </ul>
                                                </li>
                                                <li id="menu-item-21" class="menu-item menu-item-has-children menu-item-21">
                                                    <a href="#">Church Activities</a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                                            <a href="{{route('cell')}}">Find a Cell</a>
                                                        </li>
                                                        <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                                                            <a href="{{route('foundation.school')}}">Enrol in Foundation School</a>
                                                        </li>
                                                        <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                                                            <a href="{{route('baptism')}}">Get Baptised</a>
                                                        </li>
                                                        <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                                                            <a href="{{route('givings')}}">Give Seed/Partnership</a>
                                                        </li> 
                                                        
                                                        
                                                    </ul>
                                                </li>
                                                <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
                                                    <a href="{{route('gallery')}}">Gallery</a></li>
                                                <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
                                                    <a href="{{route('contact')}}">Contact</a></li>
                                                
                                            </ul>
                                        </div>                                                
                                    </nav><!-- #site-navigation -->
                                </div><!-- site-header-menu -->
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>                
</div>

@if(request()->is('/')) 
    <section class="wrapper wrapper-slider" style="background-image: url({{asset('frontend/img/front.jpg')}});">
        <div class="overlay-background clearfix">
            <div class="slide-item">
                                        <div id="snow"></div>
                                        <div class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 banner-content">
                    <div class="banner-content-holder">
                        <div class="banner-content-inner">
                            <h1 class="slider-title">Welcome to LoveWorld</h1>
                            
                            <div class="text-content">
                                Taking the divine presence of God to the nations of the world                                    </div>
                                
                            <div class="btn-holder"><a href="{{route('live')}}" class="button">JOIN LIVE SERVICE</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@else
    <div class="wrapper page-inner-title">
        <div class="thumb-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <header class="entry-header">
                            <h1 class="entry-title">Wish you a Merry Christmas and New Year 2018</h1>				</header><!-- .entry-header -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
