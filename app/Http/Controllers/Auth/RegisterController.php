<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UsersValidation;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:1', 'confirmed'],
            'avatar' => ['mimes:jpeg,jpg,png','max:2000'],
            'certification' => ['required' , 'mimes:jpeg,jpg,png' , 'max:2000'],
            'role'=>['required'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(request()->has('certification')) {
            $certificationUploaded = \request()->file('certification');
            $certificationName = time() . '.' . $certificationUploaded->getClientOriginalExtension();
            $certificationPath = public_path('/image/certification');
            $certificationUploaded->move($certificationPath, $certificationName);
        }

        $avatarName='default.jpg';
        if(request()->has('avatar')) {
            $avatarUploaded = \request()->file('avatar');
            $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
            $avatarPath = public_path('/image/avatar');
            $avatarUploaded->move($avatarPath, $avatarName);
        }

        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'DoctorCertificate' => '/image/certification/'.$certificationName,
            'avatar' => '/image/avatar/'.$avatarName,
            'category_id'=> \request()->category
        ]);

        $roleInput = request()->role;
        $role =  Role::where('name','=',$roleInput)->first();
        $user->assignRole([$role->name]);
        return $user;
    }
}
