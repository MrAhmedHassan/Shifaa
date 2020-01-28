<?php

namespace App\Http\Controllers\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use BeyondCode\Comments\Traits\HasComments;
use BeyondCode\Comments\Comment;
use App\Article;
use App\User;

class ArticleController extends Controller
{
    use HasComments;

    public function index(){
        $articles = Article::all();
        //  return view('/articles/index')->with('articles',$articles);
         return view('/test')->with('articles',$articles);

     }

     public function store(){
        Article::create([
            'title'=>request()->title,
            'description'=>request()->description,
            'avatar'=>request()->avatar,
            'user_id'=>auth()->user()->id,
        ]);
    }

    public function show($id)
    {
        // dd('shittt');
       $article = Article::find($id);
       $comments = $article->comments; 
    //    return view('/articles/index',['article'=> $article,'comments'=>$comments]);
       return view('/test2')->with(['article'=> $article,'comments'=>$comments]);

    }
  
    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles/index');
      }
}
    

