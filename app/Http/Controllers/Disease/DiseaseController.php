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
       $category_id = $diseases->category->id;
        $doctors = User::with('category')->where('category_id','=',$category_id)->where('approve','<>', null)->get();
       return view('/diseases/index')->with(['diseases'=>$diseases,'doctors'=>$doctors]);
    }
}
