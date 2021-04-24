@extends('backend.layouts.app')

@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Create Events</h4>
                        </div>
                        <div class="card-body ">
                            <form method="post" action="{{route('admin.event.save')}}" enctype="multipart/form-data"> @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">Event Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                                <small class="form-text text-muted">A block of help text that breaks onto a new line.</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Description</label>
                                                <textarea name="description" class="form-control" rows="4" style="height: unset" required></textarea>
                                            </div>
                                            <div class="form-group d-flex mt-4">
                                                <span class="text-muted">Mode</span>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input mode" type="radio" name="mode" id="online" value="online">
                                                        <span class="form-check-sign"></span>
                                                        Online
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input mode" type="radio" name="mode" id="offline" value="offline" checked="">
                                                        <span class="form-check-sign"></span>
                                                        Offline
                                                    </label>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                                                <label class="">Streaming Link</label>
                                                <textarea name="streaming" class="form-control" rows="2" placeholder="This is optional" style="height: unset"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="title text-muted">EVENT DATE</h4>
                                                        <div class="form-group">
                                                            <input name="event_date" id="datetimepicker" type="text" class="form-control datetimepicker" placeholder="Datetime Picker Here">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-4">
                                                        <h4 class="title">Date Picker</h4>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control datepicker" placeholder="Date Picker Here">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4 class="title">Time Picker</h4>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control timepicker" placeholder="Time Picker Here">
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            
                                            <div class="form-group venue">
                                                <label class="">Address</label>
                                                <input type="text" name="address" placeholder="street and town" class="form-control">    
                                            </div>
                                            <div class="row venue">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">State</label>
                                                        <select class="form-control" name="state">
                                                            <option>Berlin</option>
                                                            <option>Aacheen</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">City</label>
                                                        <input type="text" name="city" class="form-control">
                                                    </div>
                                                </div>      
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Upload Event Photo/Banner</h4>
                                            <input type="file" name="file" id="cover" required>
                                            <h4> Image</h4>
                                            <img src="{{asset('backend/img/1.jpg')}}" alt="" style="height:400px;" class="w-100" data-format="image" id="featured">
                                            {{-- <input name="featured_image" id="featured_image" type="hidden">       --}}
                                        </div>
                                    </div>
                                    {{-- <div class="row"> --}}
                                        <div class="d-flex justify-content-center row">
                                            <button class="btn btn-primary btn-block col-md-4" type="submit">
                                                Save Event
                                            </button>
                                        </div>
                                    {{-- </div> --}}
                                </fieldset> 
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        
        $("#cover").change(function() {
            readURL(this,'featured');
            // $('#remove_image').show();
        });
        function readURL(input,output) {
            console.log(input.id);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                $('#'+output).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('.mode').click(function(){
            if($('#online').is(':checked'))
                $('.venue').hide();
            else $('.venue').show();
        })
    </script>
@endpush
          