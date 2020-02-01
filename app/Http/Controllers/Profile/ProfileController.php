<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
//   test profile relation with user
    // public function index(){
    //     $prof = Profile::find(3);
    //     dd($prof->user);
    // }

    public function showMyProfile()
    {
       $user = User::find(auth()->user()->id);
       if($user->hasRole('Doctor'))
       {
           return view('profile/doctor/show',['user'=>$user]);
       }else if($user->hasRole('Patient'))
       {
           return view('profile/patient/show',['user'=>$user]);
       }
    }

    public function showAnotherProfile($profile){
        $user = User::find($profile);
        if($user->hasRole('Admin')){
            dd('funk');
        }else if($user->hasRole('Doctor')){
            return view('profile/doctor/show',['user'=>$user]);
        }
    }

    public function edit($profile){
        if(auth()->user()->id == $profile){
            $user = User::find($profile);
            return view('profile/edit',['user'=>$user]);
            dd($user);
        }else{
            dd('Sorry,You Can\'t edit');
        }
    }

    public function update($profile){
       if(auth()->user()->id == $profile){
            $user = User::find($profile);
//            $mypro = $user->profile->id;
//            $myProfile = Profile::find($mypro);
            // dd($myProfile);
// dd(request()->input('address'));
            $user -> name = request()->input('name');
            $user -> email = request()->input('email');
//            $myProfile ->abstract = request()->input('abstract');
//            $myProfile -> address = request()->input('address');
//            $myProfile -> price = request()->input('price');

            if(request()->has('avatar')) {
                $avatarUploaded = \request()->file('avatar');
                $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
                $avatarPath = public_path('/image/avatar');
                $avatarUploaded->move($avatarPath, $avatarName);
                $user -> avatar = '/image/avatar/'.$avatarName;
            }
            $user -> save();
            // $myProfile -> save();

            return view('/profile/show',['user'=>$user]);

       }else{
            dd('Sorry, Your can\'t update');
       }

    }


}
