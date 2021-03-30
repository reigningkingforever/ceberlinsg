@extends('frontend.layouts.app')
@section('main')


<section class="wrapper event-section clearfix">
    <div class="event-wrapper">
        <div class="left-div what-section">
        <i class="fa fa-question-circle-o"></i>
            <h2>Upcoming Event</h2>
            <p>Easter Sunday</p>
        </div>
        <div class="left-div where-section">
            <i class="fa fa fa-map-marker"></i>
            <h2>Location</h2>
            <p>Aachen, Germany</p>                        
        </div>
        <div class="left-div when-section">
            <i class="fa fa fa-calendar"></i>
            <h2>Event Date</h2>
            <p>4 Apr, 2021</p>
        </div>
    </div>
</section> 

<section class="wrapper about-event-section clearfix">
    <div class="container-wrap">
        <div class="row">
            <div class="col-md-6">
                <div class="about-text">
                    <h2>Welcome</h2>
                    <p>Its not by accident that you got here today, ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec. Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec. Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna...</p>
                    <div class="btn-holder">
                        <a href="#" class="button">KNOW MORE</a>
                    </div>
                </div>
            </div>
            <div class="background-image col-md-6" style="background-image: url({{asset('frontend/img/pastor.jpg')}})";></div>
        </div>
    </div>
</section>
            
<section id="wrapper-activity" class="wrapper wrapper-activity">
    <div class="evt-title">
        <h2>Pastor's Notes</h2>
    </div>
    <div class="carousel-group">
        <div class="carousel-item singlethumb pad0lr">
            <a href="https://demo.evisionthemes.com/chrimbo/about-christmas/">

                <div class="thumb-holder">
                    <img class="desaturate" src="https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/child-577012_1280-340x231.jpg">
                </div>
                <div class="content-area">
                    <h2>about easter</h2>
                    <span class="divider"></span>
                    <div class="content-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at risus at lacus laoreet mollis sed id elit. Integer bibendum lobortis velit, eleifend commodo dui facilisis nec. Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Aliquam mi sapien,...                                        </div>
                </div>
            </a>
        </div>
        <div class="carousel-item singlethumb pad0lr">
            <a href="https://demo.evisionthemes.com/chrimbo/christmas-events/">

                <div class="thumb-holder">
                    <img class="desaturate" src="https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/christmas-3000057_1280.jpg">
                </div>
                <div class="content-area">
                    <h2>Jesus is Coming Soon</h2>
                    <span class="divider"></span>
                    <div class="content-text">
                        creatures from Alpine folklore – parade through the city wearing carved masks and extravagant fur costumes. St. Nicholas brings small gifts before Christmas and traditional Austrian “Turmbläser” (brass bands that play in the towers) and choirs add...                                        </div>
                </div>
            </a>
        </div>
        <div class="carousel-item singlethumb pad0lr">
            <a href="https://demo.evisionthemes.com/chrimbo/live-music-special-day/">

                <div class="thumb-holder">
                    <img class="desaturate" src="https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/new-years-eve-1905144_1280.jpg">
                </div>
                <div class="content-area">
                    <h2>Spiritual Warfare &#8211; In Christ </h2>
                    <span class="divider"></span>
                    <div class="content-text">
                        Aliquam mi sapien, ultrices a ultrices non, sodales ut diam. Fusce semper risus eu magna placerat pulvinar. Nullam ac odio non ligula semper auctor. Fusce semper risus eu magna placerat pulvinar. Aliquam mi sapien, ultrices a ultrices non, sodales ut...                                        </div>
                </div>
            </a>
        </div>
    </div>
</section>
                    

<section class="wrapper wrapper-callback" style="background-image: url({{asset('frontend/img/candles-2550688_1280-1.jpg')}})";>
    <div class="thumb-overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                    <h2>Subscribe to Our Mailing List</h2>
                    <div class="text-content">
                        You can receive our excerpts from church services and bible studies to edify you and improve your understanding about God and who you are in Christ Jesus. </div>
                    <div class="btn-holder"><a href="#" class="button"> Subscribe with Email</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection