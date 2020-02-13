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

}

