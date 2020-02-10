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
            $reservations = Reservation::paginate(4);
            return view('/dashboard/reservations/index')->with('reservations', $reservations);

        } else if (auth()->user()->hasRole('Doctor')) {
            $reservations = Reservation::with('doctor')->where('doctor_id',auth()->user()->id)->paginate(4);
//            $reservations = auth()->user()->doctorReservations;
            return view('/dashboard/reservations/index')->with('reservations', $reservations);

        } else if (auth()->user()->hasRole('Assistant')) {
            $myDoctor = auth()->user()->doctor;
            $reservations = Reservation::with('doctor')->where('doctor_id',$myDoctor->id)->paginate(4);

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
                Reservation::create([
                    'patient_id' => auth()->user()->id,
                    'reveal_id' => $reveal,
                    'doctor_id' => $doctor
                ]);
                return response()->json(['message'=>'نجح الحجز']);
                // return redirect("profiles/$doctor");
            } else {
                return response()->json(['message'=>'الحجز ممتلئ ..يرجي الحجز في ميعاد اخر']);

            }
        } else {
            return response()->json(['message'=>'من فضلك يرجي التسجيل اولا']);
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
