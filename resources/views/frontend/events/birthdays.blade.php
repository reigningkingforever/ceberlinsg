@extends('frontend.layouts.app')
@push('styles')
	<style>
		.event-dash-card-icon {
    font-size: 14px;
    vertical-align: top;
	float:right;
}
.card-title .day {
    font-size: 2em;
	opacity:1.0 !important;
}
.card-title small {
    font-size: 0.75em;
    text-align: left;
    float: right;
    margin-right: 45px;
    margin-top: 15px;
}
.card-text {
    padding: 0 5px 0 20px;
}
.celebrant-thumbs li a img {
    width: 32px;
    height: 32px;
    border-radius: 100%;
}
.todays-celebrant li a img {
    width: 100%;
    height: 70px;
    /* border-radius: 100%; */
}
li.extra{
    max-width: 32px;
    border-radius: 100%;
	background-color:gray;
	padding-right:2px;
	color:white;
	font-size: 14px;
	text-align: center;
}
.celebrant{
	position: relative;
	display: none;
	max-height: 270px;
}
.date{
	position: absolute;
	top:10px;
	left:10px;
	padding:10px 18px;;
	border-radius: 50%;
	font-weight: 600;
}
.celebrant-name{
	position: absolute;
	bottom:0px;
	left:10px;
	color:white;
	font-weight: 600;
}

</style>
@endpush
		
{{-- <body class="post-template-default single single-post postid-53 single-format-standard evision-right-sidebar"> --}}
@section('main')

	<section class="wrapper wrap-content">
		<div class="site-content">
			<div class="row">
				<div class="col-md-9">
					<div class="row no-gutters">
						@if($submissions->isNotEmpty())
							@for ($m = 1; $m <=12; $m++)
								@for ($d = 1; $d <=31; $d++)
									@if ($submissions->where('birthday_month',$m)->where('birthday_date',$d)->isNotEmpty())
											<div class="col-md-4 p-2">
												<div class="card">
													<div class="celebrant">
														<img src="" class="card-img-top">
														<span class="date bg-primary text-white">{{\Carbon\Carbon::createFromDate(null, $m, $d)->format('M')}} <br>{{$d.date("S", mktime(0, 0, 0, 0, $d, 0))}}</span>
														<p class="celebrant-name">Idera Oluwadamilola</p>
													</div>
													<div class="card-body">
														<span class="event-dash-card-icon">
															<i class="fa fa-birthday-cake"></i> 
														</span>
														<h1 class="card-title px-4">
															<span class="day"><i class="fa fa-calendar"></i></span>
															<small class="text-center">{{$d}}  <br> <span class="font-weight-bold">{{\Carbon\Carbon::createFromDate(null, $m, $d)->format('M')}}</span></small>
														</h1>
														<p class="card-text">Birthday Celebrants </p>
															
													</div>
													<div class="card-footer border-0 bg-white  pb-1">
														<ul class="list-inline row no-gutters celebrant-thumbs">
															@foreach($submissions->where('birthday_month',$m)->where('birthday_date',$d) as $submission)
																<li class="col-2">
																	<a href="#" class="pop"><img src="{{asset('storage/images/'.$submission->media->name)}}" alt="{{$submission->name}}"></a>
																</li>
															@endforeach
															{{-- <li class="col-2 extra bg-dark d-flex flex-column justify-content-center">
																<a href="#" class="text-white"><span>+99</span></a>
															</li> --}}
											
														</ul>
													</div>
												</div>
											</div>
										{{-- @endif --}}
									@endif
								@endfor
							@endfor
						@else
							<div class="col-12 text-center">
								<p>No Birthdays</p>
							</div>
						@endif	
					</div>
				</div>
				<div class="col-md-3 px-0">
					<div class="card bg-primary text-white">
						<div class="card-body">
							<p class="card-text">New Orleans Jazz &amp; Herritage Festival Herritage Festival</p>
							<h1 class="card-title">
								
								<span class="day">TODAY</span>
								
							</h1>
							
							<ul class="list-inline row no-gutters todays-celebrant">
								<li class="col-3 mb-1">
								  <a href="#"><img src="{{asset('frontend/img/gallery(14).jpg')}}" class="img-thumbnail"></a>
								</li>
								<li class="col-3 mb-1">
									<a href="#"><img src="{{asset('frontend/img/gallery(12).jpg')}}" class="img-thumbnail"></a>
								</li>
								<li class="col-3 mb-1">
									<a href="#"><img src="{{asset('frontend/img/gallery(13).jpg')}}" class="img-thumbnail"></a>
								</li>
								<li class="col-3 mb-1">
									<a href="#"><img src="{{asset('frontend/img/gallery(14).jpg')}}" class="img-thumbnail"></a>
								</li>
								<li class="col-3 mb-1">
									<a href="#"><img src="{{asset('frontend/img/gallery(15).jpg')}}" class="img-thumbnail"></a>
								</li>
								<li class="col-3 mb-1">
									<a href="#"><img src="{{asset('frontend/img/gallery(26).png')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3 mb-1 ">
									  <a href="#"><img src="{{asset('frontend/img/gallery(22).jpg')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3 mb-1">
									  <a href="#"><img src="{{asset('frontend/img/gallery(23).jpg')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3 mb-1">
									  <a href="#"><img src="{{asset('frontend/img/gallery(24).png')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3 mb-1">
									  <a href="#"><img src="{{asset('frontend/img/gallery(25).png')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3 mb-1">
									<a href="#"><img src="{{asset('frontend/img/gallery(11).jpg')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3 mb-1">
									  <a href="#"><img src="{{asset('frontend/img/gallery(2).jpg')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3 mb-1">
									  <a href="#"><img src="{{asset('frontend/img/gallery(3).jpg')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3">
									  <a href="#"><img src="{{asset('frontend/img/gallery(4).jpg')}}" class="img-thumbnail"></a>
								  </li>
								  <li class="col-3">
									  <a href="#"><img src="{{asset('frontend/img/gallery(5).jpg')}}" class="img-thumbnail"></a>
								  </li>

								
				
							  </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@push('scripts')
	<script>
		$('.pop').click(function(event){
			event.preventDefault();
			$('.card-body').show();
			// $('.celebrant').slideUp('slow');
			$('.celebrant').hide();
			$(this).closest('.card').find('.celebrant img').attr('src',$(this).find('img').attr('src'));
			$(this).closest('.card').find('.celebrant p').html($(this).find('img').attr('alt'));
			$(this).closest('.card').find('.card-body').hide();
			$(this).closest('.card').find('.celebrant').slideDown('slow');
		});
	</script>
@endpush
		