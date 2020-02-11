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

    public function store($id )
    {

        ///////////////////////////////////////////////////
       
        $test = Test::find($id);
        $doing = request()->doing;
        $wedding =request()->wedding;
        $friend =request()->friend;
        $car =   request()->car;
        $angry =request()->angry;
        
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

        if(!($doing&&$wedding&&$friend&& $car&&$angry)&&$test->id==1)
        {
            $validatedData = request()->validate([
                'doing' => 'required',
                'wedding' => 'required',
                'friend' => 'required',
                'car' => 'required',
                'angry' => 'required',
            ]);

        }else if(!($doing2&&$wedding2&&$friend2&& $car2&&$angry2)&&$test->id==2)
        {
            $validatedData = request()->validate([
                'donig.required' => 'the question  is required',
                'wedding2' => 'required',
                'friend2' => 'required',
                'car2' => 'required',
                'angry2' => 'required',
               // 'title.required' => 'A title is required',
            ]);

        }else if(!($doing3&&$wedding3&&$friend3&& $car3&&$angry3)&&$test->id==3)
        {
            $validatedData = request()->validate([
                'doing3' => 'required',
                'wedding3' => 'required',
                'friend3' => 'required',
                'car3' => 'required',
                'angry3' => 'required',
            ]);

        }else if(!($doing4&&$wedding4&&$friend4&& $car4&&$angry4)&&$test->id==4)
        {
            $validatedData = request()->validate([
                'doing4' => 'required',
                'wedding4' => 'required',
                'friend4' => 'required',
                'car4' => 'required',
                'angry4' => 'required',
            ]);

        }else if(!($doing5&&$wedding5&&$friend5&& $car5&&$angry5)&&$test->id==5)
        {
            $validatedData = request()->validate([
                'doing5' => 'required',
                'wedding5' => 'required',
                'friend5' => 'required',
                'car5' => 'required',
                'angry5' => 'required',
            ]);

        }else if(!($doing6&&$wedding6&&$friend6&& $car6&&$angry6)&&$test->id==6)
        {
            $validatedData = request()->validate([
                'doing6' => 'required',
                'wedding6' => 'required',
                'friend6' => 'required',
                'car6' => 'required',
                'angry6' => 'required',
            ]);

        }

       

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
