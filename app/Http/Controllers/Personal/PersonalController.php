<?php

namespace App\Http\Controllers\Personal;

use App\Http\Requests\TestVlidation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Test;
use App\Question;
use App\Result;

class PersonalController extends Controller
{

  
    public function show($id)

    {
        $test = Test::find($id);

        return view('gemytest2/gemytest2', compact('test'));


        // return view('gemytest2/gemytest',compact('results'));
    }

    public function index1()
    {


        $questions = Question::all();

        return view('gemytest2/gemytest2', compact('questions'));
    }

    public function store($id ,TestVlidation $request)
    {

        ///////////////////////////////////////////////////
       
        $test = Test::find($id);
      /*  if($test->id==3)
        {
         
           PersonalController::store($id);
        }else{
           // dd("222");
        }*/
     
        $doing =  $request->doing;
        $wedding = $request->wedding;
        $friend = $request->friend;
        $car =    $request->car;
        $angry = $request->angry;

        $doing2 = request()->doing2;
        $wedding2 = request()->wedding2;
        $friend2 = request()->friend2;
        $car2 =  request()->car2;
        $angry2 =  request()->angry2;

        $doing3 = request()->doing3;
        $wedding3 = request()->wedding3;
        $friend3 = request()->friend3;
        $car3 =   request()->car3;
        $angry3 = request()->angry3;

        $doing4 = request()->doing4;
        $wedding4 = request()->wedding4;
        $friend4 = request()->friend4;
        $car4 = request()->car4;
        $angry4 =  request()->angry4;

        $doing5 = request()->doing5;
        $wedding5 = request()->wedding5;
        $friend5 = request()->friend5;
        $car5 =   request()->car5;
        $angry5 =  request()->angry5;


        $doing6 = request()->doing6;
        $wedding6 = request()->wedding6;
        $friend6 = request()->friend6;
        $car6 =   request()->car6;
        $angry6 =  request()->angry6;


        $sum = 0;

        $arr = [];
        $arr2 = [];
        $arr[] = $doing;
        $arr[] = $wedding;
        $arr[] = $friend;
        $arr[] = $angry;
        $arr[] = $car;

        $arr[] = $doing2;
        $arr[] = $wedding2;
        $arr[] = $friend2;
        $arr[] = $angry2;
        $arr[] = $car2;

        $arr[] = $doing3;
        $arr[] = $wedding3;
        $arr[] = $friend3;
        $arr[] = $angry3;
        $arr[] = $car3;

        $arr[] = $doing4;
        $arr[] = $wedding4;
        $arr[] = $friend4;
        $arr[] = $angry4;
        $arr[] = $car4;

        $arr[] = $doing5;
        $arr[] = $wedding5;
        $arr[] = $friend5;
        $arr[] = $angry5;
        $arr[] = $car5;


        $arr[] = $doing6;
        $arr[] = $wedding6;
        $arr[] = $friend6;
        $arr[] = $angry6;
        $arr[] = $car6;

        // $arr2[]=$test_id;

        for ($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i];
        }

        $test = Test::where([
            ['id', $id],

        ])->first();

        $id = $test['id'];
        ($id);

        $results = Result::where([
            ['test_id', $id],
        ])->get();
        return view('gemytest2/result', ['results' => $results, 'sum' => $sum]);
    }
}
