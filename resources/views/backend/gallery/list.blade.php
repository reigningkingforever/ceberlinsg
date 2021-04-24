@extends('backend.layouts.app')
@push('styles')
    <style>
        .form-check{
            margin-bottom:0px;
        }
        .form-check .form-check-label{
            bottom:15px;
            
        }
    </style>
@endpush
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Gallery</h4>
                                <a href="{{route('admin.gallery.create')}}" class="btn btn-primary mr-5">Add Media</a>
                            </div>
                            
                            <p class="card-category">Here is a subtitle for this table</p>
                            <form id="delete-media-form" class="d-inline" action="{{route('admin.gallery.delete')}}" method="POST">@csrf
                                <input type="hidden" name="galleries" id="galleries">
                                <button type="button" class="btn btn-danger mt-3" id="delete-media">Delete Media</button>
                            </form>
                            
                        </div>
                        
                        <div class="card-body all-icons">
                            <div class="row">
                                @forelse ($galleries as $gallery)
                                    <div class="card-user col-lg-2 col-md-3 col-sm-4 col-6 ">
                                        <div class="border text-center bg-light">
                                            
                                            @if($gallery->media->format == "image")
                                            <img @if($gallery->media->external) src="{{$gallery->media->name}}" @else src="{{asset('storage/images/'.$gallery->media->name)}}" @endif class="avatar rounded m-0">
                                            @else
                                            <img src="{{asset('storage/videos/events-1.jpg')}}" class="avatar rounded">
                                            @endif

                                            <span>{{$gallery->title}}</span>
                                            <div class="form-check checkbox-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input gallery-input" type="checkbox" name="gallery{{$gallery->id}}" value="{{$gallery->id}}">
                                                    <span class="form-check-sign"></span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 text-center">No Media in Gallery</div>
                                @endforelse
                                {{-- <div class="card-user col-lg-2 col-md-3 col-sm-4 col-6 ">
                                    <div class="border text-center bg-light">
                                        <img src="{{asset('storage/images/events-2.jpg')}}" class="avatar rounded m-0">
                                        <span>Office Pictures</span>
                                        <div class="form-check checkbox-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="option1">
                                                <span class="form-check-sign"></span> 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-user col-lg-2 col-md-3 col-sm-4 col-6 ">
                                    <div class="border text-center bg-light">
                                        <img src="{{asset('storage/images/events-3.jpg')}}" class="avatar rounded m-0">
                                        <span>Office Pictures</span>
                                        <div class="form-check checkbox-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="option1">
                                                <span class="form-check-sign"></span> 
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $('#delete-media').click(function(){
        var galleries = [];
        $('.gallery-input:checked').each(function(index){
            galleries.push($(this).val());
        })
        $('#galleries').val(galleries);
        $('#delete-media-form').submit();
    })
</script>
@endpush
          