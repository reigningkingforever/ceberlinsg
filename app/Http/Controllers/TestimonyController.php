<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\MediaManagementTrait;

class TestimonyController extends Controller
{
    use MediaManagementTrait;
    
    public function index()
    {
        return view('frontend.testimonies');
    }


    public function show(Testimony $testimony)
    {
        return view('frontend.testimony');
    }
    public function store(Request $request)
    {
        //
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
