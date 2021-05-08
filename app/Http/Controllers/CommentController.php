<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save(Request $request){
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->phone = $request->phone;
        $comment->body = $request->body;
        $comment->commentable_type = $request->type;
        $comment->commentable_id = $request->id;
        $comment->subscribe = $request->consent;
        $comment->save();
        return redirect()->back();
    }

    public function run(){
        
        $today = Carbon::today();
        $nextweek = $today->addDays(7);
            if($today->format('l') == 'Wednesday' || $today->format('l') == 'Sunday' ){
                $programs = \App\Program::whereDate('event_date',$nextweek )->get();
                if($programs->isEmpty()){
                    $program = \App\Program::create(['user_id' => 1,'name' => $today->format('l').' Service'  ,'description' => $today->format('l').' Service','event_date'=> $nextweek]);
                    $media = \App\Media::create(['name'=> 'service.jpg','format'=> 'image','mediable_id'=> $program->id,'mediable_type'=> 'App\Program']);
                }
            }
        return "ok";
    }
}
