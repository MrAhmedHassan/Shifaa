<?php

namespace App\Http\Controllers\Disease;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Disease;

class DiseaseController extends Controller
{
    
    public function index(){
      
       $diseases = Disease::all();
       return view('/diseases/index')->with('diseases',$diseases);
    }
    
    public function show($id)
    {
       $diseases = Disease::find($id);
       return view('/diseases/show')->with('diseases',$diseases);
    }
}
