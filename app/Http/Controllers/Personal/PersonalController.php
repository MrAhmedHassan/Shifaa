<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Test;
use App\Question;
use App\Result;

class PersonalController extends Controller
{

    public function index(){


        $tests = Test::all();

        return view('gemytest2/showtest',compact('tests'));

      
    }
    public function show($id)

    {
        $test = Test::find($id);
       
       
        return view('gemytest2/gemytest2',compact('test'));

        
       // return view('gemytest2/gemytest',compact('results'));
    }

   public function index1(){


        $questions = Question::all();

        return view('gemytest2/gemytest2',compact('questions'));

      
    } 

    public function store($id)
    {

      ///////////////////////////////////////////////////
    //  اللى شغاله
    

   $test = Test::find($id);
    $aa=request()->aa;
    $bb=request()->bb;
    $test_id=request()->test_id;

    $sum=0;

    $arr=[];
    $arr2=[];
    $arr[]=$aa;
    $arr[]=$bb;
    $arr2[]=$test_id;

    for($i=0;$i<count($arr);$i++)
    {
        $sum+=$arr[$i];
    }
 
   $test= Test::where([
     ['id',$arr2[0]],
     
 ])->first();

  $id=$test['id'];
($id);

     $results=Result::where([
         ['test_id', $id],
     ])->get();
 return view('gemytest2/result' , ['results' => $results ,'sum' => $sum ]);
       


    }
}
