<?php

namespace App\Http\Controllers\RevealTime;

use App\Http\Requests\RevealValidation;
use App\Http\Requests\TestVlidation;
use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;
use App\Reveal;

class RevealTimeController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        if ($user->hasRole('Admin')) {
            $reveals = Reveal::all();
            return view('/dashboard/reveals/index')->with('reveals', $reveals);
        } else if ($user->hasRole('Doctor')) {
            $reveals = Reveal::with('doctor')->where('doctor_id', '=', $user->id)->get();
            return view('/dashboard/reveals/index')->with('reveals', $reveals);
        } else if ($user->hasRole('Assistant')) {
            $reveals = Reveal::with('doctor')->where('doctor_id', '=', $user->doctor->id)->get();
            return view('/dashboard/reveals/index')->with('reveals', $reveals);
        }
    }

    public function create()
    {

        return view('dashboard/reveals/create');
    }

    public function store()

    {

        $reveal = new Reveal;

        $reveal->date = request()->input('date');
        $reveal->start =  request()->input('start');
        $reveal->end =  request()->input('end');
        $reveal->limit = request()->input('limit');
        if (auth()->user()->hasRole('Doctor')) {
            $reveal->doctor_id = auth()->user()->id;
        } else if (auth()->user()->hasRole('Assistant')) {
            $reveal->doctor_id = auth()->user()->doctor->id;
        }
        $reveal->save();
        return redirect('/reveals');
    }

    public function edit($id)
    {
        $reveal = Reveal::find($id);
        return view('dashboard/reveals/edit')->with(['reveal' => $reveal]);
    }

    public function update($id)
    {
        $reveal =  Reveal::find($id);

        $reveal->date = request()->input('date');
        $reveal->start = request()->input('start');
        $reveal->end = request()->input('end');
        $reveal->limit = request()->input('limit');
        if (auth()->user()->hasRole('Doctor')) {
            $reveal->doctor_id = auth()->user()->id;
        } else if (auth()->user()->hasRole('Assistant')) {
            $reveal->doctor_id = auth()->user()->doctor->id;
        }
        $reveal->save();
        return redirect('/reveals');
    }

    public function destroy($id)

    {
        $reservations = Reservation::where('reveal_id', $id)->get();
        foreach ($reservations as $reservation) {
            $reservation->delete();
        }

        $reveal = Reveal::find($id)->delete();

        return redirect('/reveals');
    }
}
