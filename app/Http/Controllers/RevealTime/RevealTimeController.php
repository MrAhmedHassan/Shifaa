<?php

namespace App\Http\Controllers\RevealTime;

use App\Http\Requests\RevealValidation;
use App\Http\Requests\TestVlidation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reveal;

class RevealTimeController extends Controller
{

    public function index(){
        $reveal = Reveal::all();
        echo "<a href='/reveals/create'>create new reveal</a>";
        dd( $reveal);
      // $doctor =$reveal[0]->doctor;
       // dd($doctor );
       
    }
    public function create()
    {
      
     return view('gemytest/gemytest');
    
    }

    public function create2()
    {
      
     return view('gemytest2/gemytest2');
    
    }

    public function store(RevealValidation $request )
    {
      
        $reveal = new Reveal;
       
        $reveal ->date = $request->input('date');
        $reveal ->from=  $request ->input('from');
        $reveal ->to=  $request ->input('to');
        $reveal ->limit = $request->input('limit');
        $reveal ->doctor_id = auth()->user()->id;
        $reveal -> save() ;

       
        //return redirect('/reaval');
    }

    public function store2(TestVlidation $request1)
    {
      
      $answer=[];
      $answer1= $request1->input('gender');
      $answer2= $request1->input('a');
      $answer3= $request1->input('b');
      $answer4= $request1->input('c');
     
      $answer[]=$answer1;
      $answer[]=$answer2;
      $answer[]=$answer3;
      $answer[]=$answer4;

      return view('gemytest2/result')->with('answer' , $answer);
    //return redirect('/reaval');
    }


    public  function edit($id)
    {
        $reveal = Reveal::find($id);
       // dd($reveal);
       return view ('gemytest/gemytest',['reveal'=>$reveal] );
    }


    public function update($id)
    {
        $reveal =  Reveal::find($id);
        
        $reveal ->date =request()->input('date');
        $reveal ->from= request() ->input('from');
        $reveal ->to= request() ->input('to');
        $reveal ->limit =request() ->input('limit');
        $reveal ->doctor_id = auth()->user()->id;
        $reveal -> save() ;
        //return redirect('/teachers');
    }


    public function destroy($id)
    {
        $reveal = Reveal::find($id);
        $reveal -> delete();
        //return redirect('/teachers');
    }
}
