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
					<div class="row">
						<div class="col-md-4">
							<div class="card m-b-20">
								<img class="card-img-top img-fluid" src="{{asset('frontend/img/gallery(5).jpg')}}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as
										a natural lead-in to additional content. .</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card m-b-20">
								<img class="card-img-top img-fluid" src="{{asset('frontend/img/gallery(5).jpg')}}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as
										a natural lead-in to additional content. .</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card m-b-20">
								<img class="card-img-top img-fluid" src="{{asset('frontend/img/gallery(5).jpg')}}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as
										a natural lead-in to additional content. .</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card m-b-20">
								<img class="card-img-top img-fluid" src="{{asset('frontend/img/gallery(5).jpg')}}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as
										a natural lead-in to additional content. .</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card m-b-20">
								<img class="card-img-top img-fluid" src="{{asset('frontend/img/gallery(5).jpg')}}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">This is a wider card with supporting text below as
										a natural lead-in to additional content. .</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>	
		</div>
	</section>
@endsection




		