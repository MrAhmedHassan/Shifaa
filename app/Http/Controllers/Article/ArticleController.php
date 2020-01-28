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

    public function show($id)
    {
        $articles = Article::find($id);
        // dd($articles);
        // return view('/articles/index')->with('articles',$articles);
       return view('/articles/index',['articles'=> $articles]);
    }

    public function indexarticle($id)
    {
        $art = Article::find($id);
        dd($art->comments);
    }

    public function storearticle(){
        Article::create([
            'title'=>request()->title,
            'description'=>request()->description,
            'avatar'=>request()->avatar,
            'user_id'=>auth()->user()->id,
        ]);
    }
    

    public function createcomment(){
      $post = Article::find(1);
      $comment = $post->comment('This is a comment from a user.');
      return redirect('/comments');
  }
  public function indexcomment(){
      $comments = Comment::all();
      return view('/comments/index')->with('comments',$comments);
  }
  public function approvecomment($id){
      $post = Comment::find($id);
      $post->approve();
      return redirect('/comments');
  }
  public function destroycomment($id){
      $post = Comment::find($id);
      $post->delete();
      return redirect('/comments');
    }
   

    
}
