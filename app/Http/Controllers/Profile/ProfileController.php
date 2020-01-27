<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    public function showMyProfile(){
        $user = User::find(auth()->user()->id);
//        dd($user);
//        return $user;
//        dd('here');
//        dd(auth()->user());
        return view('profile/show');
    }

    public function showAnotherProfile($profile){
        $user = User::find($profile);
        if(!$user->hasRole('Admin')){
            return view('test',['user'=>$user]);
            dd($user);
        }else{
            dd('Sorry You Can see the Admin Profile');
        }
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
