<?php

namespace App\Http\Controllers;

use App\Program;
use App\Submission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\MediaManagementTrait;

class ProgramController extends Controller
{
    use MediaManagementTrait;
    
    public function birthdays()
    {   
        $submissions = Submission::has('media')->orderBy('birthday_month','asc')->orderBy('birthday_date','asc')->get()->unique('email');
        // dd($celebrants);
        return view('frontend.events.birthdays',compact('submissions'));
    }
    public function services()
    {
        if($query = request()->query('search'))
        $programs = Program::where('name','LIKE',"%$query%")->orWhere('description','LIKE',"%$query%")->get();
        else
        $programs = Program::all();
        return view('frontend.events.list',compact('programs'));
    }

    public function show(Program $program){
        return view('frontend.events.view',compact('program'));
    }

    public function live(){
        $today = Carbon::today();
        $program = Program::whereDate('event_date',$today)->whereTime('event_date','<',now())->orderBy('event_date','asc')->first();
        return view('frontend.live',compact('program'));
    }

    /* Backend*/
    public function list(){
        $today = Carbon::today();
        // $programs = Program::whereDate('event_date',$today->addDays(7))->get();
        $programs = Program::all();
        // dd($programs);
        // if($today->addDays(7));
        // check todays date and check if 7days time service is in database, if not add it,
        return view('backend.events.list',compact('programs'));  
    }

    public function create(){
        return view('backend.events.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $program = new Program;
        $program->user_id = Auth::id();
        $program->name = $request->name;
        $program->description = $request->description;
        $program->mode = $request->mode;
        $program->streaming = $request->streaming;
        $program->address = $request->address;
        $program->state = $request->state;
        $program->city = $request->city;
        $program->event_date = Carbon::createFromFormat('m/d/Y h:i A',$request->event_date);
        $program->save();
        $this->uploadMedia($request,$program->id,get_class($program));
        return redirect()->route('admin.event.list');
    }

    public function edit(Program $program){
        return view('backend.events.edit',compact('program'));
    }

    public function update(Program $program,Request $request){
        $program->name = $request->name;
        $program->description = $request->description;
        $program->mode = $request->mode;
        $program->streaming = $request->streaming;
        $program->address = $request->address;
        $program->state = $request->state;
        $program->city = $request->city;
        $program->event_date = Carbon::createFromFormat('m/d/Y h:i A',$request->event_date);
        $program->save();
        if($request->file || $request->link)
        $this->uploadMedia($request,$program->id,get_class($program));
        return redirect()->route('admin.event.list');
    }

    public function duplicate(Program $program){
        $newProgram = $program->replicate();
        $newProgram->save();
        return view('backend.events.edit')->with(['program'=> $newProgram]);
    }

    public function destroy(Program $program){
        foreach($program->media as $media){
            Storage::delete('public/'.$media->format.'s/'.$media->name);
            $media->delete();
        }
        $program->delete();
        return redirect()->route('admin.event.list');
    }
}
