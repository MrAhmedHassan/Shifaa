<?php

namespace App\Http\Controllers\Profile;
use App\Rating;

use App\Http\Controllers\Controller;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class   ProfileController extends Controller
{

//    public function __construct()
//
//    {
//        $this->middleware(['auth', 'verified']);
//    }

    public function addRate(Request $request)

    {

        $newRating = request()->input('rate');

        if ($newRating > 5) {
            $newRating = 5;
        } elseif ($newRating < 1) {
            $newRating = 1;
        }

        $user = User::find($request->id);
        $rating = \willvincent\Rateable\Rating::where([
            ['user_id', auth()->user()->id],
            ['rateable_id', $request->id],
            ['rateable_type', 'App\User']
        ])->first(););

       if($rating){
        $rating->rating = $newRating;

        $user->ratings()->save($rating);
        $user->average_rate = $user->averageRating;
        $user->save();

           return redirect()->route('profiles.another', $request->id);
      }else{
        request()->validate(['rate' => 'required']);
        $user = User::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $user->ratings()->save($rating);
        $user->average_rate = $user->averageRating;
        $user->save();
        return redirect()->route('profiles.another', $request->id);
    }

    }
    // end ratind

    public function showMyProfile()
    {
        $user = User::find(auth()->user()->id);
        if ($user->hasRole('Doctor')) {
            //dd('fuck');
            return view('profile/doctor/show', ['user' => $user]);
        } else if ($user->hasRole('Patient')) {
            return view('profile/patient/show', ['user' => $user]);
        }
    }


    public function showAnotherProfile($profile)
    {
        $user = User::find($profile);

        if ($user->hasRole('Admin')) {
        } else if ($user->hasRole('Doctor')) {
            return view('profile/doctor/show', ['user' => $user]);
        }else{
        }
    }


    public function edit($profile)
    {
        if (auth()->user()->id == $profile) {
            $user = User::find($profile);
            return view('profile.edit', ['user' => $user]);
        } else {
            dd('Sorry,You Can\'t edit');
        }
    }

    public function update($profile)
    {
        if (auth()->user()->id == $profile) {
            $user = User::find($profile);
            $user->name = request()->input('name');
            $user->email = request()->input('email');

            if (request()->has('avatar')) {
                $avatarUploaded = \request()->file('avatar');
                $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
                $avatarPath = public_path('/image/avatar');
                $avatarUploaded->move($avatarPath, $avatarName);
                $user->avatar = '/image/avatar/' . $avatarName;
            }
            $user->save();

            if ($user->hasRole('Doctor')) {
                return view('profile.doctor.show', ['user' => $user]);
            } else if ($user->hasRole('Patient')) {
                return view('profile.patient.show', ['user' => $user]);
            }
        } else {
            dd('Sorry, Your can\'t update');
        }
    }
}
