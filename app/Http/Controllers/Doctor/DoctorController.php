<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
         $doctors = User::role('Doctor')->get();
        return view('doctors/index',['doctors'=>$doctors]);
    }

    public function show($doctor){
        $user = User::find($doctor);
        if($user->getRoleNames()[0] === "Doctor"){
            dd($user);
            return $user ;
        }else{
            dd('Your Can see the data of this user');
        }
    }
}
