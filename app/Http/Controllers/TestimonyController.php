<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\MediaManagementTrait;

class TestimonyController extends Controller
{
    use MediaManagementTrait;
    
    public function index()
    {
        if($query = request()->query('search'))
        $testimonies = Testimony::where('status',true)->where('title','LIKE',"%$query%")->orWhere('name','LIKE',"%$query%")->orWhere('body','LIKE',"%$query%")->orderBy('created_at','desc')->get();
        // Program::where('name','LIKE',"%$query%")->orWhere('description','LIKE',"%$query%")->get();
        else
        $testimonies = Testimony::where('status',true)->orderBy('created_at','desc')->get();
        
        return view('frontend.testimonies.list',compact('testimonies'));
    }


    public function show(Testimony $testimony)
    {
        return view('frontend.testimonies.view',compact('testimony'));
    }
    public function store(Request $request)
    {
        $testimony = new Testimony;
        $testimony->name = $request->name;
        $testimony->email = $request->email;
        $testimony->phone = $request->phone;
        $testimony->title = $request->title?$request->title:Str::limit($testimony->body,20, '...');
        $testimony->body = $request->body;
        $testimony->save();
        if($request->hasFile('file')){
            $this->uploadMedia($request,$testimony->id,get_class($testimony));
        }
        if($request->hasFile('media')){
            $this->multipleUpload($request,$testimony->id,get_class($testimony));
        }
        return redirect()->back();
    }

    
    public function list()
    {
        $testimonies = Testimony::all();
        return view('backend.testimonies',compact('testimonies'));
    }
    
    public function status(Testimony $testimony)
    {
        if($testimony->status) $testimony->status = false;
        else $testimony->status = true;
        $testimony->save();
        return redirect()->route('admin.testimony.list');
    }

    public function update(Testimony $testimony,Request $request)
    {
        $testimony->title = $request->title;
        $testimony->body = $request->body;
        $testimony->save();
        return redirect()->route('admin.testimony.list');
    }

    public function destroy(Testimony $testimony)
    {
        foreach($testimony->media as $media){
            Storage::delete('public/'.$media->format.'s/'.$media->name);
            $media->delete();
        }
        $testimony->delete();
        return redirect()->route('admin.testimony.list');
    }
}
