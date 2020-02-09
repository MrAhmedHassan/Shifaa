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

 $topRated=User::all();
 $arr2=[];
 foreach($topRated as $topRate)
 {
    $arr2[]=User::all()->avg('rating');
    //$arr2[]= Rating::where('rateable_id',$topRate->id)->avg('rating');
 }

 //dd( $arr2);

 $trends = Trend::all();

    /* $topRated =Rating::select('*')
            ->orderBy('average', 'desc')
            ->groupBy('rateable_id')
            ->get()->take(4);*/
           // dd($topRated);

     /*$usrAvgRate=User::all();
        $avgRate = Rating::all();
        //  dd($avgRate);
        $avgRate = Rating::max('average');
        $topRated= Rating::where([
            ['average',$avgRate ]


        ])->offset(0)->limit(4)->get();

        if( count($topRated)<4)
        {
            $avgRate-=1;
            $topRated= Rating::where([
                ['rating',$avgRate ]


            ])->offset(0)->limit(4)->get();
        }*/



  return view('/home/index',['topRated'=> $topRated, 'trends'=>$trends ]);

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

