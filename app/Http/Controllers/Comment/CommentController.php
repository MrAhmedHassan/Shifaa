<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentController extends Controller
{
    public function store($art_id){
        $article = $art_id;
        $comment = new Comment;
        $comment ->comment = request()->input('comment');
        $comment ->user_id= auth()->user()->id;
        $comment ->article_id= $article;
        $comment -> save();
        return redirect("/articles/{$article}");

    }

    // public function edit($comment_id){
    //         $comment = Comment::find($comment_id);
    //         // return view('/articles/testcomment')->with(['comment'=>$comment]);
    //         return view('/articles/show')->with(['article'=>$article,'comments'=>$comment]);

    // }

    public function update($comment_id){
            $comment = Comment::find($comment_id);
            $comment -> comment = request()->input('comment');
            $comment -> save();
            return view('/articles/index');
}

public function destroy($id)
{
    $comment = Comment::find($id);
    $comment->delete();
    $article = $comment->article->id;
    
    return redirect("/articles/{$article}");
}

  // test user relation with comments
    // public function index(){
    //     $cat = Comment::find(1);
    //     dd($cat->user_id);
    // }

    // test user relation with comments
    // public function index(){
    //     $cat = Comment::find(1);
    //     dd($cat->article);
    // }

}