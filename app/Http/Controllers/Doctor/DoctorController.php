<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
         $doctors = User::role('Doctor')->where('approve','<>', null)->paginate(20);

        return view('doctors/index',['doctors'=>$doctors]);
    }

    public function dashboardDoctors(){
//        $doctors = User::role('Doctor')->paginate(4);
        $doctors = User::role('Doctor')->get();

        return view('dashboard.doctors.index',['doctors'=>$doctors]);
    }

    public function dashboardWaitingDoctors(){
        $doctors = User::role('Doctor')->where('approve','=', null)->get();
        return view('dashboard.doctors.waiting',['doctors'=>$doctors]);
    }

    public function approve($id){
        $doctor = User::find($id);
        $doctor->approve = "approved";
        $doctor->save();
        return redirect('/dashboardDoctors');
    }



public function dashboardDoctorshow($id){
    $user = User::find($id);
    return view('dashboard.doctors.show', ['user' => $user]);
}



    public function delete($doctor)
    {
        $user = User::find($doctor);
        $user->delete();
        return redirect('/dashboardDoctors');
    }
}
