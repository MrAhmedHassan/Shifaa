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
        $reveals = Reveal::all();
        //    return view('/reveals');
        return view('/dashboard/reveals/index')->with('reveals', $reveals);
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
        // $reveal ->doctor_id = auth()->user()->id;
        $reveal->save();

        //    dd($reveal);
        return redirect('/reveals');
    }




    public  function edit($id)
    {
        $reveal = Reveal::find($id);
        // dd($reveal);
        return view('gemytest/gemytest', ['reveal' => $reveal]);
    }


    public function update($id)
    {
        $reveal =  Reveal::find($id);

        $reveal->date = request()->input('date');
        $reveal->from = request()->input('from');
        $reveal->to = request()->input('to');
        $reveal->limit = request()->input('limit');
        $reveal->doctor_id = auth()->user()->id;
        $reveal->save();
        //return redirect('/teachers');
    }


    public function destroy($id)
    {
        // dd("poop");
        // $reveal = Reveal::find($id);
        // $reveal->delete();

        $reservations = Reservation::where('reveal_id', $id)->get();
        // dd($reservations);
        foreach ($reservations as $reservation) {
            $reservation->delete();
        }
        $reveal = Reveal::find($id)->delete();

        return redirect('/reveals');
    }
}
