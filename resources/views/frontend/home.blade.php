@extends('frontend.layouts.app')
@section('main')


<section class="wrapper event-section clearfix">
    <div class="event-wrapper">
        <div class="left-div what-section">
        <i class="fa fa-question-circle-o"></i>
            <h2>Upcoming Event</h2>
            <p>{{$program->name}}</p>
        </div>
        <div class="left-div where-section">
            <i class="fa fa fa-map-marker"></i>
            <h2>Location</h2>
            <p>{{$program->city.' '.$program->state}}</p>                        
        </div>
        <div class="left-div when-section">
            <i class="fa fa fa-calendar"></i>
            <h2>Event Date</h2>
            <p>{{$program->event_date->format('d F, Y')}}</p>
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
        @forelse ($posts as $post)
            <div class="carousel-item singlethumb pad0lr">
                <a href="{{route('article',$post)}}">
                    <div class="thumb-holder">
                        {{-- <img class="desaturate" src="{{asset('frontend/img/christmas-3000057_1280.jpg')}}"> --}}
                        @if(!$post->media->first())
                            <img src="{{asset('backend/img/1.jpg')}}" class="desaturate" style="max-height: 300px;">
                        @elseif($post->media->first()->format == "image")
                            <img @if($post->media->first()->external) src="{{$post->media->first()->name}}" @else src="{{asset('storage/images/'.$post->media->first()->name)}}" @endif class="desaturate" style="max-height: 300px;">
                        @else
                            <img src="{{asset('storage/videos/events-1.jpg')}}" class="avatar rounded" style="max-height: 300px;">
                        @endif
                    </div>
                    <div class="content-area">
                        <h2>{{$post->title}}</h2>
                        <span class="divider"></span>
                        <div class="content-text">
                            {{Illuminate\Support\Str::words($post->body,50, '...')}}                                        
                        </div>
                    </div>
                </a>
            </div>
        @empty
          <div class="text-center">No Sermon</div>  
        @endforelse
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