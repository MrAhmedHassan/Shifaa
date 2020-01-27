<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $resrvations = Reservation::all();
        if(auth()->user()->hasRole('Admin')){
            $resrvations = Reservation::all();
            dd($resrvations);
        }else if(auth()->user()->hasRole('Doctor')){

        }
        dd($resrvations);
    }


}
