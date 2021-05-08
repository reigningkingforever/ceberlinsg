@extends('frontend.layouts.app')
@push('styles')
	<style>
		.gallery img,.gallery video{
			width:100px;
			height:80px;
		}
		.gallery a{
			margin:10px;
		}
	</style>
@endpush

@section('main')

	<section class="wrapper wrap-content">
		<div class="site-content">
			<div class="row">
				<div class="col-md-8">
					<div class="card">					
						<div class='image-full'>
							<img width="1280" height="854" src="{{asset('storage/images/'.$program->media->first()->name)}}" class="attachment-full size-full wp-post-image" alt="" loading="lazy" 
							sizes="(max-width: 1280px) 100vw, 1280px" />
						</div>
						<div class="card-body">
							<h3>{{$program->name}}</h3>
							<div>
								<a href="#"> 
									@if($program->mode == "offline")
									<i class="fa fa-map-marker"></i>
									{{$program->address.' '.$program->city.' '.$program->state}}
									@else 
									<i class="fa fa-circle"></i> Live Service
									@endif
								</a>	
							</div>
							<div class="d-flex justify-content-between">
								<div class=""> 
									<i class="fa fa-calendar"></i><span class="pl-1">{{$program->event_date->format('M d, Y')}}</span> <i class="fa fa-clock-o"></i> {{$program->event_date->format('h:i A')}}
								</div>
								
								<div>
									<span><i class="fa fa-eye"></i>{{$program->views}}</span>
									<span><i class="fa fa-comment"></i>{{$program->comments->count()}}</span>
									<span><i class="fa fa-users"></i>5</span>
								</div>
								
							</div>
						
							<div class="mt-5">
								<p>{{$program->description}}
								</p>
							</div>	
							@if($program->comments->isNotEmpty())
							<div class="mt-5">
								<h3 class="mb-4 font-weight-bold">{{$program->comments->count()}} Comment</h3>
								<ul class="list-unstyled">
									@foreach ($program->comments as $comment)
										<span class="d-block border border-dark mt-2"></span>
										<li class="py-3">
											<div class="d-flex justify-content-between">
												<h5 class="d-inline">{{$comment->name}}</h5>
												<small class="text-muted mb-2">{{$comment->created_at->format('M d, Y -  h:i A')}}</small>
											</div>
											{{-- <p class="" style="font-family:'Courier New', Courier, monospace">This is my message. I dont think the children are to blame. I think the government should look into the system of childcare and ensure that every child is properly represented in the community and school system etc. If you like  the rubbish i just posted, then give me some votes</p> --}}
											<p class="">{{$comment->body}}</p>
										</li>
									@endforeach
								</ul>	
							</div>
							@endif
							<div class="accordions" id="accordion">
								<div class="card">
									<button data-target="#collapseOne" href="#" data-toggle="collapse" class="collapsed p-0" aria-expanded="false">
									<div class="card-header">
										<h6 class="card-title">Click here to comment</h6>
									</div>
									</button>
									<div id="collapseOne" class="card-collapse collapse" style="">
										<div class="card-body">
											<form action="{{route('comment.save')}}" method="post">@csrf
												<input type="hidden" name="type" value="App\Program">
												<input type="hidden" name="id" value="{{$program->id}}">
												<div class="form-group">
													<textarea class="form-control" name="body" cols="45" rows="8" placeholder="Type comment here" required="required"></textarea>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="name">Name <span class="required">*</span></label> 
															<input id="name" name="name" type="text" class="form-control" maxlength="245" required='required' />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="phone">Phone <span class="required">*</span></label> 
															<input id="phone" name="phone" type="text" value="" class="form-control" maxlength="245" required='required' />
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
														<div class="form-group mt-5">
															<input name="consent" type="checkbox" value="1" /> 
															<label for="consent">Send me contents from this site</label>
														</div>
													</div>
												</div>
												
												
												<div class="form-group">
					
													<input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> 
												</div>
											</form>
										</div>
									</div>
								</div>
								
							</div>
						</div>	
					</div>
				</div>
				<div class="col-md-4">
					<div class="row d-flex justify-content-center">
						<div class="col-5 card m-xs-2 m-md-3 px-0">
							<a href="#" class="">
								<div class="card-body text-center">
									<i class="fa fa-share-alt rounded-circle bg-primary text-white p-3"></i>								
									<p>Invite Someone</p>
								</div>
							</a>
						</div>
						<div class="col-5 card m-xs-2 m-md-3 px-0">
							<a href="#" class="">
								<div class="card-body text-center">
									<i class="fa fa-user rounded-circle bg-info text-white p-3"></i>								
									<p>Attend Event</p>
								</div>
							</a>
						</div>
						<div class="col-5 card m-xs-2 m-md-3 px-0">
							<a href="#" class="">
								<div class="card-body text-center">
									<i class="fa fa-car rounded-circle bg-warning text-white p-3"></i>								
									<p>Get Free Ride</p>
								</div>
							</a>
						</div>
						<div class="col-5 card m-xs-2 m-md-3 px-0">
							<a href="#" class="">
								<div class="card-body text-center">
									<i class="fa fa-calendar rounded-circle bg-success text-white p-3"></i>								
									<p>Add to Calendar</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="card">
						<h2 class=" text-center mt-3 ">Event Gallery</h2>
						<span class="d-block border border-dark mt-2 mx-4"></span>
						
						<div class="card-body">
							<div class="d-flex gallery">
								<a href="#" class="gallery-modal">
									<img src="{{asset('storage/images/events-1.jpg')}}" />
								</a>
								<a href="#" class="gallery-modal">
									<video src="{{asset('storage/videos/test.webm')}}" poster="{{asset('frontend/img/video-icon.png')}}"/>
								</a>
								<a href="#" class="gallery-modal">
									<img src="{{asset('storage/images/events-3.jpg')}}" />
								</a>
								<a href="#" class="gallery-modal">
									<img src="{{asset('storage/images/events-4.jpg')}}"/>
								</a>
							</div>
						</div>	
					</div>
				</div>
			</div>	
		</div>
	</section>
	<div class="modal fade modal-primary" id="gallery-modal" tabindex="-1" role="dialog" aria-labelledby="gallery-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content gallery-content">
				<div class="modal-header justify-content-center">
					
				</div>
				<div class="modal-body text-center">
					<div id="result">Edit Testimony</div>
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div>
		
	</div>
@endsection

@push('scripts')
<script>
 $('.gallery-modal').click(function(){
	var content = $(this).clone();
	if(content.html().indexOf("<video") >= 0)
	$(content).find('video').attr({controls:true});
	$('#result').html(content);
	$('#gallery-modal').modal();
 })
</script>	
@endpush