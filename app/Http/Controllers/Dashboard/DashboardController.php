<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Article;


class DashboardController extends Controller
{

    public function index(){
        $users = count(User::all());
        $articles = count(Article::all());
        $current = Carbon::now();
        $start_time = \Carbon\Carbon::parse($current);
        $finish_time = \Carbon\Carbon::parse('02/01/2020');
        $result = $finish_time->diffInDays($start_time, false);

       return view('dashboard/index',['users'=>$users, 'articles'=>$articles, 'result'=>$result]);
   }
}
