<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
         $doctors=[];
         $users = User::with('reveals')->paginate(2);
         foreach ($users as $user){
             if($user->hasRole('Doctor')){
                 $doctors[] = $user;
             }
         }
//         dd($doctors);
//         return $doctors;
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
//        dd($user->getRoleNames()[0]);
//        if($user->getRoleNames()[0]='Admin'){
//            dd('Sorry Man I am Admin');
//        }else{
//
//        }
//        return response()->json($user);
    }
}
