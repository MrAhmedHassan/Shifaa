<?php

namespace App\Http\Controllers\Complete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class CompleteController extends Controller
{

    public function show()
    {
       return view('/profile/complete');
    }
    
    // public function store($request){
    //     dd('kkkkk');

    //     Profile::create([
    //         'abstract'=>request()->abstract,
    //         'address'=>auth()->user()->address,
    //         'price'=>request()->price,
    //         'user_id'=>auth()->user()->id,
    //     ]);

    //     return view('/profile/show',['user'=>auth()->user()->id]);
    // }

    public function store()
    {
        $data = Profile::find(auth()->user());
        if ($data){dd('you are signed before');}
        else { 
        $profile = new Profile;
       
        $profile ->abstract = request()->input('abstract');
        $profile ->address= request() ->input('address');
        $profile ->price= request() ->input('price');
        $profile ->user_id = auth()->user()->id;
        $profile -> save() ;

        dd('saved success');
        }
       
        //return redirect('/reaval');
    }

}
