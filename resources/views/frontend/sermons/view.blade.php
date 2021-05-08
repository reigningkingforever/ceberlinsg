@extends('frontend.layouts.app')
@push('styles')
	
@endpush

@section('main')

	<section class="wrapper wrap-content">
		<div class="site-content">
			<div class="row">
				<div class="col-md-8">
					<div class="card">					
						<img src="{{asset('storage/images/'.$post->media->first()->name)}}" class="card-img-top img-fluid" alt="" loading="lazy" />
						<div class="card-body">
							<h3>{{$post->name}}</h3>
							<div>
								<a href="#"> 
									<i class="fa fa-circle"></i>
									{{$post->tags}}	
								</a>	
							</div>
							<div class="d-flex justify-content-between">
								<div class=""> 
									Posted on <span class="pl-1">{{$post->created_at->format('M d, Y')}}</span> 
								</div>
								
								<div>
									<span><i class="fa fa-eye"></i>{{$post->views}}</span>
									<span><i class="fa fa-comment"></i>{{$post->comments->count()}}</span>
								</div>
								
							</div>
						
							<div class="mt-5">
								<p>{{$post->body}}
								</p>
							</div>
							@if($post->comments->isNotEmpty())
							<div class="mt-5">
								<h3 class="mb-4 font-weight-bold">{{$post->comments->count()}} Comment</h3>
								<ul class="list-unstyled">
									@foreach ($post->comments as $comment)
										<span class="d-block border border-dark mt-2"></span>
										<li class="py-3">
											<div class="d-flex justify-content-between">
												<h5 class="d-inline">{{$comment->name}}</h5>
												<small class="text-muted mb-2">{{$comment->created_at->format('M d,Y h:i A')}}</small>
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
												<input type="hidden" name="type" value="App\Post">
												<input type="hidden" name="id" value="{{$post->id}}">
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
					<div class="card">
						<div class="card-header">
							<h4>Ministry Materials</h4>
						</div>
						<div class="card-body">

						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>
@endsection
@push('scripts')
	
@endpush