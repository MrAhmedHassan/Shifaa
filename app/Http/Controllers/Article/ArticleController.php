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
    

