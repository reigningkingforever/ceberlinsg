<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\MediaManagementTrait;

class SubmissionController extends Controller
{
    
    use MediaManagementTrait;
    /**
     * Frontend
     */
    
    public function foundationschool()
    {
        return view('frontend.foundationschool');
    }
    public function baptism()
    {
        return view('frontend.baptism');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $submission = new Submission;
        $submission->name = $request->name;
        $submission->email = $request->email;
        $submission->phone = $request->phone;
        $submission->type = $request->type;
        $submission->birthday_month = $request->birthday_month;
        $submission->birthday_date = $request->birthday_date;
        $submission->save();
        $this->uploadMedia($request,$submission->id,get_class($submission));
        return redirect()->back();
    }

    /**
     * Backend
     */
    public function list()
    {
        $submissions = Submission::orderBy('status','asc')->orderBy('created_at','DESC')->get();
        return view('backend.submissions',compact('submissions'));
    }

    public function seen(Submission $submission)
    {
        $submission->status = true;
        $submission->save();
        return redirect()->back();
    }

    public function destroy(Submission $submission)
    {
        Storage::delete('public/'.$submission->media->format.'s/'.$submission->media->name);
        $submission->media->delete();
        $submission->delete();
        return redirect()->route('admin.submission.list');
    }
}
