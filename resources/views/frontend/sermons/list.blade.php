@extends('frontend.layouts.app')
@push('styles')
<link rel="stylesheet" href="{{asset('frontend/css/event_list_page.css')}}">
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
				<div class="col-md-9">
					{{-- <div class="row">
						<div class="col-md-12">
							<select name="" id="" multiple>
								<option>Christian Living</option>
								<option>Prosperity</option>
								<option>Faith</option>
								<option>Discipleship</option>
							</select>
						</div>
					</div> --}}
					<div class="row">
						@forelse ($posts as $post)
							<div class="col-md-4 mb-3">
								<div class="card m-b-20">
									<a href="{{route('article',$post)}}">
									<img class="card-img-top img-fluid" src="{{asset('storage/images/'.$post->media->first()->name)}}" alt="Card image cap">
									</a>
									<div class="card-body">
										<h5 class="card-title"><a href="{{route('article',$post)}}">{{$post->title}}</a></h5>
										<p class="card-text">{{Illuminate\Support\Str::words($post->body,10, '...')}}.</p>
										<p class="card-text">
											<small class="text-muted">Posted on {{$post->created_at->diffForHumans()}}</small>
										</p>
									</div>
								</div>
							</div>
						@empty
							<div class="col-md-12">
								<div class="card">
									
									<div class="card-body">
										
										<p class="text-center">No Sermon @if(request()->query()) with searched parameters. <a href="{{route('sermons')}}">Go back</a> @endif</p>
										
									</div>
								</div>
							</div>
						@endforelse
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="row mb-4">
						<div class="col-md-12">
							
							<div class="search-bar elevation-3 p-0">
								<form action="#" method="GET" class="d-inline">
									<input placeholder="Search" type="text" name="search">
								</form>
							</div>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-12">
							{{-- <h5 class="mb-2">Filter by Tags</h5> --}}
							<div class="">
								@if(isset($tags))
									@foreach ($tags as $tag)
										<form action="#" method="GET" class="d-inline">
											<input placeholder="Search" type="hidden" name="search" value="{{$tag}}">
											<button type="submit" class="btn btn-outline btn-outline-primary mb-1">{{$tag}}</button>
										</form>
									@endforeach
								@endif
								
								
							</div>
						</div>
					</div>
					
						
				</div>
			</div>	
		</div>
	</section>
@endsection




		