<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagingController extends Controller
{
    public function list(){
        return view('backend.messaging.list');
    }
}
