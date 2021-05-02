<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\MediaManagementTrait;

class MediaController extends Controller
{
    use MediaManagementTrait;

    /** frontend  */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at','desc')->get();
        return view('frontend.gallery',compact('galleries'));
    }

    /** backend */
    public function list()
    {
        $galleries = Gallery::orderBy('created_at','desc')->get();
        return view('backend.gallery.list',compact('galleries'));
    }
    public function create()
    {
        return view('backend.gallery.create');
    }

    public function store(Request $request)
    {
    //    dd($request->all());
       $gallery = new Gallery;
       $gallery->title = $request->title;
       $gallery->description = $request->description;
       $gallery->tags = $request->tags;
       $gallery->save();
       $this->uploadMedia($request,$gallery->id,get_class($gallery));
       return redirect()->route('admin.gallery.list');
    }


    public function destroy(Request $request)
    {
        $ids = explode(',',$request->galleries);
        $galleries = Gallery::wherein('id',$ids)->get();
        foreach($galleries as $gallery){
            Storage::delete('public/'.$gallery->media->format.'s/'.$gallery->media->name);
            $gallery->media->delete();
            $gallery->delete();
        }
        return redirect()->back();
    }
}
