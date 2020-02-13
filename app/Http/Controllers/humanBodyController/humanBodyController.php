<?php

namespace App\Http\Controllers\humanBodyController;
use App\Body;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class humanBodyController extends Controller
{
    public function index(){

        $humanbody = Body::all();

return view('/human_body/index');

    }

    public function show($id)
    {
        $humanbody = Body::find($id);
   return $humanbody['id'].$humanbody['title'].
 $humanbody['description']."<br>"."<img src=../images/".$humanbody['image'].">"."<br>";

    }
}
