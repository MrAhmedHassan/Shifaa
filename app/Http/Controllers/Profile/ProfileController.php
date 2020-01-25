<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
//        $user = User::find(auth()->user()->id);
//        dd($user);
//        return $user;
    }

    public function show($profile){
        $user = User::find($profile);
        dd($user);
    }

    public function edit($profile){
        if(auth()->user()->id == $profile){
            $user = User::find($profile);
            return view('test',['user'=>$user]);
            dd($user);
        }else{
            dd('Sorry,You Can\'t edit');
        }
    }
    public function update($profile){
//        if(auth()->user()->id == $profile){
            $user = User::find($profile);
            $user -> name = request()->input('name');
            $user -> email = request()->input('email');
            if(request()->has('avatar')) {
                $avatarUploaded = \request()->file('avatar');
                $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
                $avatarPath = public_path('/image/avatar');
                $avatarUploaded->move($avatarPath, $avatarName);
                $user -> avatar = '/image/avatar/'.$avatarName;
            }
            $user -> save();
            dd($user);
//        }else{
            dd('Sorry, Your can\'t update');
//        }

    }


}
