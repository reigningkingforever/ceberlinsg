@extends('frontend.layouts.app')
@push('styles')
	<link rel="stylesheet" href="{{asset('frontend/css/event_list_page.css')}}">
@endpush
		
{{-- <body class="post-template-default single single-post postid-53 single-format-standard evision-right-sidebar"> --}}
@section('main')

	<section class="wrapper wrap-content">
		<div class="site-content">
			<div class="row">
				<div class="col-md-8">
					<div class="search-bar elevation-3">
						<form action="#" method="GET" class="d-inline">
							<input placeholder="Search" type="text" name="search">
						</form>
						
					</div>
					<div class="align-center" style="width: 100%;">
						 <!-- Tabs navs -->
						<ul class="nav nav-tabs my-3" id="ex1" role="tablist">
							<li class="nav-item" role="presentation">
								<a	class="nav-link active" data-toggle="tab" href="#upcoming"	role="tab" aria-controls="upcoming" aria-selected="true">Upcoming Events</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-toggle="tab" href="#past" role="tab" aria-controls="past" aria-selected="false">Past Events</a>
							</li>
							
						</ul>
						<div class="tab-content" id="ex1-content">
							<div class="tab-pane fade show active" id="upcoming" role="tabpanel" aria-labelledby="upcoming">
								<div class="row">
									<div class="col-md-12">
										<ul class="event-card-list pl-0 pl-md-5">
											@forelse ($programs->where('event_date','>',now())->sortBy('event_date') as $program)
												<li style="opacity: 1; height: 100%; transform: scale(1);" class="">
													<div class="event-card v-card">
														<div class="row no-gutters">
															<a href="{{route('services.show',$program)}}" class="col-xs-12 col-md-4" style="background: url({{asset('storage/images/'.$program->media->first()->name)}});background-size: cover;background-position: center center;background-repeat: no-repeat;min-height:200px;">
																<div class="date-ribbon">
																	<h2>{{$program->event_date->format('M')}}</h2> 
																	<h1>{{$program->event_date->format('d')}}</h1>
																</div>
															</a>
															<div class="d-flex flex-column justify-content-between col-xs-12 col-md-6 pt-2 pl-3" style="max-width: 390px;">
																<div>
																	<h2 class="name"><a href="{{route('services.show',$program)}}">{{$program->name}}</a></h2> 
																	<h6 class="text-muted">{{$program->event_date->format('M d')}} | {{$program->event_date->format('h:i A')}}</h6>
																	<p class="desc">
																		{{$program->description}}
									
																	</p> 
																</div> 
																<div class="text-muted pb-1">
																	@if($program->mode == "offline")
																	<i class="fa fa-map-marker"></i>
																	{{$program->address.' '.$program->city.' '.$program->state}}
																	@else 
																	{{$program->streaming}}
																	@endif
																</div>
															</div>
															
														</div>
													</div>
												</li>
												@empty
												<li style="opacity: 1; height: 100%; transform: scale(1);" class="">
													<div class="event-card v-card">
														<div class="row">
															<div class="col-12 pt-3 text-center">
																<p>No Upcoming Events @if(request()->query()) for searched parameters. <a href="{{route('services')}}">Go back</a> @endif</p>
															</div>
														</div>
													</div>
												</li>
											@endforelse
											
										</ul>
										
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="ex1-tab-2">
								<div class="row">
									<div class="col-md-12">
										<ul class="event-card-list pl-0 pl-md-5">
											@forelse ($programs->where('event_date','<',now())->sortBy('event_date') as $program)
												<li style="opacity: 1; height: 100%; transform: scale(1);" class="">
													<div class="event-card v-card">
														<div class="row no-gutters">
															<a href="{{route('services.show',$program)}}" class="col-xs-12 col-md-4" style="background: url({{asset('storage/images/'.$program->media->first()->name)}});background-size: cover;background-position: center center;background-repeat: no-repeat;min-height:200px;">
																<div class="date-ribbon">
																	<h2>{{$program->event_date->format('M')}}</h2> 
																	<h1>{{$program->event_date->format('d')}}</h1>
																</div>
															</a>
															<div class="d-flex flex-column justify-content-between col-xs-12 col-md-6 pt-2 pl-3" style="max-width: 390px;">
																<div>
																	<h2 class="name"><a href="{{route('services.show',$program)}}">{{$program->name}}</a></h2> 
																	<h6 class="text-muted">{{$program->event_date->format('M d')}} | {{$program->event_date->format('h:i A')}}</h6>
																	<p class="desc">
																		{{$program->description}}
																		{{-- Pre-req: Requirement 1a, 2b, 4ab --}}
																	</p> 
																</div> 
																<div class="text-muted pb-1">
																	@if($program->mode == "offline")
																	<i class="fa fa-map-marker"></i>
																	{{$program->address.' '.$program->city.' '.$program->state}}
																	@else 
																	{{$program->streaming}}
																	@endif
																</div>
															</div>
															
														</div>
													</div>
												</li>
											@empty
												<li style="opacity: 1; height: 100%; transform: scale(1);" class="">
													<div class="event-card v-card">
														<div class="row">
															<div class="col-12 pt-3 text-center">
																<p>No Past Events @if(request()->query()) for searched parameters. <a href="{{route('services')}}">Go back</a> @endif</p>
															</div>
														</div>
													</div>
												</li>
											@endforelse
										</ul>	
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<section id="text-2" class="widget widget_text">
						<h2 class="widget-title">Find Us</h2>			
						<div class="textwidget">
							<p><strong>Address</strong><br />
								123 Main Street<br />
								New York, NY 10001
							</p>
							<p><strong>Hours</strong><br />
								Monday&mdash;Friday: 9:00AM&ndash;5:00PM<br />
								Saturday &amp; Sunday: 11:00AM&ndash;3:00PM
							</p>
						</div>
					</section>
					<section id="search-3" class="widget widget_search">
						<h2 class="widget-title">Search</h2>
						<form role="search" method="get" class="search-form" action="https://demo.evisionthemes.com/chrimbo/">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
							</label>
							<input type="submit" class="search-submit" value="Search" />
						</form>
					</section>
					<section id="text-3" class="widget widget_text">
						<h2 class="widget-title">Send Santa Gifts</h2>			
						<div class="textwidget">
							<p>This may be a good place to introduce yourself and your site or include some credits.</p>
						</div>
					</section>
					<section id="media_image-3" class="widget widget_media_image">
						<h2 class="widget-title">Coffee Christmas</h2>
						<a href="http://evisionthemes.com">
							<img width="300" height="180" src="https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee-300x180.jpg" class="image wp-image-7  attachment-medium size-medium" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee-300x180.jpg 300w, https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee-768x461.jpg 768w, https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee-1024x614.jpg 1024w, https://demo.evisionthemes.com/chrimbo/wp-content/uploads/2017/12/coffee.jpg 2000w" sizes="(max-width: 300px) 100vw, 300px" />
						</a>
					</section>
				</div>
			</div>
		</div>
	</section>
@endsection
		