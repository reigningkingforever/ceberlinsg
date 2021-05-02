@extends('backend.layouts.app')
@push('styles')
    <style>
        table td{
            text-overflow: ellipsis;
            overflow: hidden;
            /* white-space: nowrap; */
        }
        form button{
            cursor: pointer;
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
                                <h4 class="card-title">Events</h4>
                                <a href="{{route('admin.event.create')}}" class="btn btn-primary mr-5">Add New</a>
                            </div>
                            
                            <p class="card-category">Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover ">
                                <thead>
                                    <th>Image</th>
                                    <th>Event</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($programs as $program)
                                    <tr>
                                        <td class="card-user w-10">
                                            @if(!$program->media->first())
                                            <img src="{{asset('backend/img/1.jpg')}}" class="avatar rounded">
                                            @elseif($program->media->first()->format == "image")
                                            <img @if($program->media->first()->external) src="{{$program->media->first()->name}}" @else src="{{asset('storage/images/'.$program->media->first()->name)}}" @endif class="avatar rounded">
                                            @else
                                            <img src="{{asset('storage/videos/events-1.jpg')}}" class="avatar rounded">
                                            @endif
                                        </td>
                                            
                                        <td class="w-50">
                                            <h4 class="mt-0"><a href="{{route('services.show',$program)}}">{{$program->name}}</a></h4>
                                            <h5>{{$program->description}}</h5>
                                        </td>
                                        <td class="w-30">
                                            <span class="d-block">{{$program->event_date->format('l d F')}}</span>
                                            <span>{{$program->event_date->format('h:i A')}}</span>
                                        </td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <form class="d-inline" action="{{route('admin.event.duplicate',$program)}}" method="POST">@csrf
                                                    <button type="submit" class="btn btn-primary btn-outline mb-2 rounded" rel="tooltip" title="duplicate event" data-placement="left">
                                                    <span class="btn-label">
                                                        <i class="fa fa-clone"></i>
                                                    </span>
                                                    
                                                    </button>
                                                </form>
                                                <a href="{{route('admin.event.edit',$program)}}" rel="tooltip" title="edit event" data-placement="left" class="btn btn-info btn-outline mb-2 rounded">
                                                    <span class="btn-label">
                                                        <i class="fa fa-pencil"></i>
                                                    </span>
                                                    
                                                </a>
                                                
                                                <button type="button" data-toggle="modal" data-target="#delete-event{{$event->id}}" class="btn btn-danger btn-outline rounded" rel="tooltip" title="delete event" data-placement="left">
                                                    <span class="btn-label">
                                                        <i class="fa fa-trash"></i>
                                                    </span>
                                                </button>
                                                <div class="modal fade modal-mini modal-primary" id="delete-event{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="delete-event{{$event->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header justify-content-center">
                                                                <p>Delete Event</p>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <p>Are you sure you want to delete this event</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form class="d-inline" action="{{route('admin.event.delete',$event)}}" method="POST">@csrf
                                                                    <button type="submit" class="btn btn-danger">Yes</button>
                                                                </form>
                                                                <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>   
                                        </td>
                                        
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No Events</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@push('scripts')
{{-- <script src="{{vendors/datatables.net/jquery.dataTables.js}}"></script>
<script src="../../../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>    --}}
@endpush
          