<?php

namespace App\Http\Controllers\Complete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Reservation;

class CompleteController extends Controller
{

    public function show()
    {

        $user = auth()->user();
        return view('profile.doctor.complete', ['user' => $user]);
    }

    public function store()
    {
        $user = User::find(auth()->user()->id);
        $all = Reservation::withTrashed()->where('doctor_id', '=', $user->id)->get();

        $profile = Profile::where('user_id', auth()->user()->id)->first();
        $profile->abstract = request()->input('abstract');
        $profile->address = request()->input('address');
        $profile->price = request()->input('price');
        $profile->save();
        return view('profile.doctor.show', ['user' => auth()->user(), 'all' => $all]);
    }
}
