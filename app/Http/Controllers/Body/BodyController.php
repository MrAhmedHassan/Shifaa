<?php

namespace App\Http\Controllers\Body;
use App\Body;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function index(){
      
        $humanbody = Body::all();
        return view('human_body/index')->with('humanbody',$humanbody);
        // dd($humanbody);
      
    }


    public function show($id)
    {
        $humanbody = Body::find($id);
        return view('human_body/show')->with('humanbody',$humanbody);
        // dd($humanbody);
        
    }
}
