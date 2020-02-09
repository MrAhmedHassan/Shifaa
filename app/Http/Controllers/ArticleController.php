<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use BeyondCode\Comments\Traits\HasComments;
use BeyondCode\Comments\Comment;
class ArticleController extends Controller
{
    use HasComments;

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
