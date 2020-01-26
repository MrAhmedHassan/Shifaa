<?php

namespace App\Http\Controllers\Body;
use App\Body;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function index(){
      
        $humanbody = Body::all();
        dd($humanbody);
      
    }


    public function show($id)
    {
        $humanbody = Body::find($id);
        dd($humanbody);
        
    }
}
