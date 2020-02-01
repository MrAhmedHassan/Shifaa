<?php

namespace App\Http\Controllers\Complete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class CompleteController extends Controller
{

    public function show()
    {
        $user = auth()->user();
       return view('/profile/complete',['user'=>$user]);
    }

    public function store()
    {
        $profile = Profile::where('user_id', auth()->user()->id)->first();
        $profile->abstract = request()->input('abstract');
        $profile->address= request() ->input('address');
        $profile->price= request() ->input('price');
        $profile-> save();
                return view('profile.show',['user' => auth()->user()]);
    }

}
