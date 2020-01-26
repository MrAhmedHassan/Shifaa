<?php

namespace App\Http\Controllers\Article;
use App\Article;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $articles = Article::find($id);
        dd($articles);
        //the dd below is to show the user data that created the article
       // dd($articles->user);
       
    }
    
}
