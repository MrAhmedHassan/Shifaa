<?php

namespace App\Http\Controllers\Assistant;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AssistantController extends Controller
{
    public function index()
    {
                $user = auth()->user();
                if ($user->hasRole('Admin')) {
                $assistants = User::role('Assistant')->paginate(4);
                return view('/dashboard/assistants/index')->with('assistants',$assistants);
                }

        elseif($user->hasRole('Doctor')) {
            $assistants = auth()->user()->with('assistants')->where('doctor_id_assistant',auth()->user()->id )->paginate(4);
            return view('/dashboard/assistants/index')->with('assistants',$assistants);
             }
        }

    public function create()
    {
        // return response()->json(User::with("roles")->get());
       return view('dashboard/assistants/create');
    }

    public function store(Request $request)
    {
        $avatarName = 'default.jpg';
        if (request()->has('avatar')) {
            $avatarUploaded = \request()->file('avatar');
            $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
            $avatarPath = public_path('/image/avatar');
            $avatarUploaded->move($avatarPath, $avatarName);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => '/image/avatar/' . $avatarName,
            'password' =>  Hash::make($request->password),
            'doctor_id_assistant' => auth()->user()->id,
        ]);

        $user->assignRole('Assistant');
        return redirect('/assistants');
    }

    public function delete($assistant)
    {
        $user = User::find($assistant);
        $user->delete();
        return redirect('assistants');
    }
}
