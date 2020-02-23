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
            $reservations = Reservation::with('doctor')->where('doctor_id',auth()->user()->id)->get();
//            $reservations = auth()->user()->doctorReservations;
            return view('/dashboard/reservations/index')->with('reservations', $reservations);

        } else if (auth()->user()->hasRole('Assistant')) {
            $myDoctor = auth()->user()->doctor;
            $reservations = Reservation::with('doctor')->where('doctor_id',$myDoctor->id)->get();

//            $reservations = $myDoctor->doctorReservations;
            return view('/dashboard/reservations/index')->with('reservations', $reservations);

        }
    }

    public function create()
    {
    }



    public function store($reveal, $doctor,Request $request)
    {
        if (auth()->user()) {
            $limit = Reveal::find($reveal)->limit;

            $checkLimit = Reservation::where('reveal_id', $reveal)->count();
            if ($checkLimit < $limit) {
              $reservation =   Reservation::create([
                    'patient_id' => auth()->user()->id,
                    'reveal_id' => $reveal,
                    'doctor_id' => $doctor
                ]);
                return response()->json(['message'=>"تم الحجز ورقم حجز حضرتكم هو ($reservation->id)"]);
            } else {
                return response()->json(['message'=>'الحجز ممتلئ ..يرجي الحجز في ميعاد اخر']);

            }
        } else {
            return response()->json(['message'=>'من فضلك يرجي التسجيل اولا']);
        }
    }

    public function softDelete($reservation)
    {
        Reservation::where('id',$reservation)->delete();
        return redirect('/reservations');
    }
}
