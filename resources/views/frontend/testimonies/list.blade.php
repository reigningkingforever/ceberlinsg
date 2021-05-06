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
					<div class="accordions mb-5" id="accordion">
						<div class="card">
							<button data-target="#collapseOne" href="#" data-toggle="collapse" class="collapsed p-0" aria-expanded="false">
							<div class="card-header">
								<h6 class="card-title">Click here Add your testimony</h6>
							</div>
							</button>
							<div id="collapseOne" class="card-collapse collapse" style="">
								<div class="card-body">
									<form action="{{route('testimonies.save')}}" method="post" enctype="multipart/form-data">@csrf
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="name">Your Name <span class="required">*</span></label> 
													<input id="name" name="name" type="text" value="" class="form-control" maxlength="245" required='required' />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="title">Subject of Testimony </label> 
													<input id="title" name="title" type="text" value="" class="form-control" maxlength="245"/>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="email">Email <span class="required">*</span></label> 
													<input id="email" name="email" type="email" value="" class="form-control" maxlength="245" required='required' />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="phone">Phone <span class="required">*</span></label> 
													<input id="phone" name="phone" type="text" value="" class="form-control" maxlength="245" required='required' />
												</div>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" name="body" cols="45" rows="8" placeholder="Details of your testimony here" required="required"></textarea>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="photo">Your picture </label> 
													<input id="photo" name="file" type="file" class="form-control"/>
													<small class="text-muted">You can add only one image of yourself here</small>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="author">Before & After Image/Video</label> 
													<input id="media" name="media[]" type="file" class="form-control" multiple/>
													<small class="text-muted">You can add multiple files here</small>
												</div>
											</div>
										</div>
							
										<div class="form-group">
											<input name="contactme" type="checkbox" value="yes" checked/> 
											<label for="contactme">You may contact me to get more details on my testimony</label>
										</div>
										<div class="form-group">
											<input name="submit" type="submit" id="submit" class="submit" value="Add Testimony" /> 
										</div>
									</form>
								</div>
							</div>
						</div>
						
					</div>
					<div class="search-bar elevation-3">
						<form action="#" method="GET" class="d-inline">
							<input placeholder="Search testimonies" type="text" name="search">
						</form>
						
					</div>
					<div class="align-center" style="width: 100%;">	 
						<div class="row">
							<div class="col-md-12">
								<ul class="event-card-list pl-0">
									@forelse ($testimonies->sortBy('created_at') as $testimony)
										<li style="opacity: 1; height: 100%; transform: scale(1);" class="">
											<div class="event-card v-card">
												<div class="row no-gutters">
													<div class=" col-xs-12  pt-2 px-3">
														<h2 class="name"><a href="{{route('testimonies.show',$testimony)}}">{{$testimony->title}}</a></h2> 
														<div class="d-flex flex-column flex-md-row">
															@if($testimony->media->isNotEmpty())
															<a href="{{route('testimonies.show',$testimony)}}" class="mx-auto pr-md-2">
																<img src="{{asset('storage/images/'.$testimony->media->first()->name)}}" class="rounded-circle" style="height:90%;">
															</a>
															@endif
															<div>
																<h6 class="text-muted text-center text-md-left mt-2 mt-md-0">{{$testimony->name}}</h6>
																<p class="desc">
																	{{Illuminate\Support\Str::words($testimony->body,40, '...')}}
																</p> 
															</div> 
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
														<p>No Testimonies @if(request()->query()) with searched parameters. <a href="{{route('testimonies')}}">Go back</a> @endif</p>
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
		
		
