<?php

namespace App\Http\Controllers\Reservation;
use App\Http\Controllers\Controller;
use App\Reservation;
use App\Reveal;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        //        forAdmin
        if (auth()->user()->hasRole('Admin')) {
            $reservations = Reservation::all();
            return view('/dashboard/reservations/index')->with('reservations', $reservations);

        } else if (auth()->user()->hasRole('Doctor')) {
            $reservations = auth()->user()->doctorReservations;
            return view('/dashboard/reservations/index')->with('reservations', $reservations);

        } else if (auth()->user()->hasRole('Assistant')) {
            $myDoctor = auth()->user()->doctor;
            $reservations = $myDoctor->doctorReservations;
            return view('/dashboard/reservations/index')->with('reservations', $reservations);

        }
    }

    public function create()
    {
    }



    public function store($reveal, $doctor)
    {
        if (auth()->user()) {
            $limit = Reveal::find($reveal)->limit;

            $checkLimit = Reservation::where('reveal_id', $reveal)->count();
            if ($checkLimit < $limit) {
                Reservation::create([
                    'patient_id' => auth()->user()->id,
                    'reveal_id' => $reveal,
                    'doctor_id' => $doctor
                ]);
                return view('home.index');
            } else {
                return dd('this day is completed');
            }
        } else {
            return view('auth.login');
        }
    }

    public function softDelete($reveal)
    {
        $reservations = Reservation::where('reveal_id', $reveal)->get();
        dd($reservations);
        foreach ($reservations as $reservation) {
            $reservation->delete();
        }
        $reveal = Reveal::find($reveal)->delete();

        return redirect('/reservations');
    }
}
