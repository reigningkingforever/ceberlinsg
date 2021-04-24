<?php

namespace App\Http\Controllers;

use App\Giving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\MediaManagementTrait;

class GivingController extends Controller
{
    use MediaManagementTrait;
    /**
     * Frontend
     */
    public function index()
    {
        //show partnership page
        return view('frontend.giving');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Backend
     */
    public function list()
    {
        $givings = Giving::orderBy('status','asc')->orderBy('created_at','DESC')->get();
        return view('backend.giving',compact('givings'));
    }

    public function seen(Giving $giving)
    {
        $giving->status = true;
        $giving->save();
        return redirect()->back();
    }

    public function destroy(Giving $giving)
    {
        Storage::delete('public/'.$giving->media->format.'s/'.$giving->media->name);
        $giving->media->delete();
        $giving->delete();
        return redirect()->route('admin.giving.list');
    }
}
