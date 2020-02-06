<?php

namespace App\Http\Controllers;
use willvincent\Rateable\Rateable;
use Illuminate\Http\Request;
use App\Post;
use App\User;
class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware(['auth','verified']);

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        return view('home/index');
    }


}
