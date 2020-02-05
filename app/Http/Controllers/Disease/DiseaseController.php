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
// $cat = Disease::find('category_id');
// dd($cat);
//       $users = User::where(['category_id', $id])->first();
//       dd($users);


       $diseases = Disease::find($id);
       return view('/diseases/index')->with('diseases',$diseases);
    }
}
