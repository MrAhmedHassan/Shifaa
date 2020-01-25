<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
       $users =  User::all();
        return view('test',[
            'users'=> $users
        ]);
    }
}
