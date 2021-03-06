<?php

namespace App\Http\Controllers\Profile;

use App\Rating;

use App\Http\Controllers\Controller;
use App\User;
use App\Profile;
use App\Reservation;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class   ProfileController extends Controller
{

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
        ])->first();

        if ($rating) {
            $rating->rating = $newRating;

            $user->ratings()->save($rating);
            $user->average_rate = $user->averageRating;
            $user->save();

            return redirect()->route('profiles.another', $request->id);
        } else {
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

    public function showMyProfile()
    {
        $user = User::find(auth()->user()->id);
        $all = Reservation::withTrashed()->where('doctor_id', '=', $user->id)->get();
        if ($user->hasRole('Doctor')) {
            return view('profile/doctor/show', ['user' => $user, 'all' => $all]);
        } else if ($user->hasRole('Patient')) {
            return view('profile/patient/show', ['user' => $user, 'all' => $all]);
        }
    }


    public function showAnotherProfile($profile)
    {
        $user = User::find($profile);
        $all = Reservation::withTrashed()->where('doctor_id', '=', $profile)->get();
        if ($user->hasRole('Admin')) {
            return redirect('/');
        } else if ($user->hasRole('Doctor')) {
            return view('profile/doctor/show', ['user' => $user, 'all' => $all]);
        } else {
        }
    }


    public function edit($profile)

    {
        if (auth()->user()->id == $profile) {
            $user = User::find($profile);
            return view('profile.edit', ['user' => $user]);
        } else {
            return view('auth.login');
        }
    }

    public function update($profile)

    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',  Rule::unique('users')->ignore($profile),],
            'avatar' => ['mimes:jpeg,jpg,png', 'max:2000'],
        ]);

        if (auth()->user()->id == $profile) {
            $user = User::find($profile);
            $user->name = request()->input('name');
            $user->email = request()->input('email');
            $all = Reservation::withTrashed()->where('doctor_id', '=', $profile)->get();

            if (request()->has('avatar')) {
                $avatarUploaded = \request()->file('avatar');
                $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
                $avatarPath = public_path('/image/avatar');
                $avatarUploaded->move($avatarPath, $avatarName);
                $user->avatar = '/image/avatar/' . $avatarName;
            }
            $user->save();

            if ($user->hasRole('Doctor')) {
                return view('profile.doctor.show', ['user' => $user, 'all' => $all]);
            } else if ($user->hasRole('Patient')) {
                return view('profile.patient.show', ['user' => $user, 'all' => $all]);
            }
        } else {
            return redirect('\login');
        }
    }
}
