<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return view('backend.subscribers');
    }

    
    
    public function store(Request $request)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
