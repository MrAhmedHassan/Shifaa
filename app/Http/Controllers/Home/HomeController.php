<?php

namespace App\Http\Controllers\Home;
use App\Rating;
use App\User;
use App\Trend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function topRated(){

        $trends = Trend::all();

        $topDoctors = User::with('category')
            ->where('average_rate', '<>', null)->where('approve','<>',null)
            ->orderBy('average_rate', 'desc')
            ->take(4)
            ->get();



  return view('/home/index',['topDoctors'=> $topDoctors , 'trends'=>$trends ]);

    }


   /* public function avgRate()
    {

        $users=User::all();
        $arr2=[];
        $arr4=[];

       foreach($users as $user)
       {
        $arr2[] = Rating::select('rating')->where('rateable_id',$user->id)->avg('rating');
        $arr4[]=Rating::where([
            ['rateable_id',$user->id]
        ])->get();

       }

       /*foreach($rate as $rat)
     //  {
           dd($rat);
      // }


       foreach($arr4 as $exper)
       //{
           foreach( $exper as $exp)
          // {
              // echo "rate :".$exp->rating."<br>";
             // echo "id :". $exp->rateable_id;

           //}

       }*/

      // dd($arr2);

       // $users = DB::table('users')->distinct()->get();


  //}



}

