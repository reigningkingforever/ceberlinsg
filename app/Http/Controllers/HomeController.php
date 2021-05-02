<?php

namespace App\Http\Controllers;

use App\Post;
use App\Program;
use App\Testimony;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function frontend(){
        $today = Carbon::today();
        $program = Program::where('event_date','>=',$today)->orderBy('event_date','asc')->first();
        $posts = Post::orderBy('created_at','desc')->take(6)->get();
        $testimonies = Testimony::orderBy('created_at','desc')->take(3)->get();
        return view('frontend.home',compact('program','posts','testimonies'));
    }
    public function backend()
    {
        return view('backend.dashboard');
    }
}
