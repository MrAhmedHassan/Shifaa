<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $cat = Category::find(1);
        dd($cat->diseases);
        dd($cat);
    }
}
