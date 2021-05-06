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
							@if($testimony->media->isNotEmpty() && $testimony->media->count() > 1)
							<h2 class=" text-center mt-3 ">Testimony Gallery</h2>
								<div class="d-flex gallery">
									@foreach ($testimony->media as $media)
										@if($media->format == "image")
											<a href="#" class="gallery-modal">
												<img src="{{asset('storage/images/'.$media->name)}}" />
											</a>
										@else
											<a href="#" class="gallery-modal">
												<video src="{{asset('storage/videos/'.$media->name)}}" poster="{{asset('frontend/img/video-icon.png')}}"/>
											</a>
										@endif
									@endforeach
								</div>
								<span class="d-block border border-dark mt-2 mx-4"></span>
							@endif
							
						</div>
						<div class="card-body">
							<h3>{{$testimony->title}}</h3>
							<div class="d-flex justify-content-between">
								<span class="text-muted">by {{$testimony->name}}</span>
								<div class=""> on
									<span class="px-1">{{$testimony->created_at->format('M d, Y')}}</span> |
									<span class="px-1"><i class="fa fa-eye"></i> {{$testimony->views}}</span>
								</div>
							</div>
							<div class="mt-5">
								@if($testimony->media->isNotEmpty())
									<img src="{{asset('storage/images/'.$testimony->media->first()->name)}}" class="img-thumbnail float-right mx-3" width="300px"/>
								@endif
								<p>{{$testimony->body}}</p>
							</div>	
							
						</div>	
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							<h4>Free Download</h4>
							
						</div>
						<img src="{{asset('frontend/img/born-again.jpg')}}" class="w-100">
						<div class="card-body">
							<p>Click to download e-book</p>
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