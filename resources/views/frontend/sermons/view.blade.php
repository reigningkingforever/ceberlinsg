@extends('frontend.layouts.app')
@push('styles')
	
@endpush

@section('main')

	<div id="breadcrumb" class="wrapper wrap-breadcrumb">
		<div class="container">
			<div class="breadcrumb-inner">
				<div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
					<ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">
						<meta name="numberOfItems" content="5" />
						<meta name="itemListOrder" content="Ascending" />
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
							<a href="https://demo.evisionthemes.com/chrimbo" rel="home">
								<span itemprop="name">Home</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item">
							<a href="https://demo.evisionthemes.com/chrimbo/2017/"><span itemprop="name">2017</span></a>
							<meta itemprop="position" content="2" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item">
							<a href="https://demo.evisionthemes.com/chrimbo/2017/12/"><span itemprop="name">December</span></a>
							<meta itemprop="position" content="3" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item">
							<a href="https://demo.evisionthemes.com/chrimbo/2017/12/08/">
								<span itemprop="name">8</span>
							</a>
							<meta itemprop="position" content="4" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
							<span itemprop="name">Wish you a Merry Christmas and New Year 2018</span>
							<meta itemprop="position" content="5" />
						</li>
					</ul>
				</div>
			</div>
		</div><!-- .container-fluid -->
	</div><!-- #breadcrumb -->
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
									<span><i class="fa fa-comment"></i>5</span>
								</div>
								
							</div>
						
							<div class="mt-5">
								<p>{{$post->body}}
								</p>
							</div>	
							<div class="accordions" id="accordion">
								<div class="card">
									<button data-target="#collapseOne" href="#" data-toggle="collapse" class="collapsed p-0" aria-expanded="false">
									<div class="card-header">
										<h6 class="card-title">Click here to comment</h6>
									</div>
									</button>
									<div id="collapseOne" class="card-collapse collapse" style="">
										<div class="card-body">
											<form action="#" method="post">@csrf
								
												<div class="form-group">
													<textarea class="form-control" name="comment" cols="45" rows="8" placeholder="Type comment here" required="required"></textarea>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="author">Email <span class="required">*</span></label> 
															<input id="email" name="email" type="email" value="" class="form-control" maxlength="245" required='required' />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="author">Phone <span class="required">*</span></label> 
															<input id="phone" name="phone" type="text" value="" class="form-control" maxlength="245" required='required' />
														</div>
													</div>
												</div>
												
												<div class="form-group">
													<input name="wp-comment-cookies-consent" type="checkbox" value="yes" /> 
													<label for="wp-comment-cookies-consent">Send me posts, invites and invites from this site</label>
												</div>
												<div class="form-group">
													<input type='hidden' name='comment_post_ID' value='53' id='comment_post_ID' />
													<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
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