<?php

namespace App\Http\Controllers\Comment;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(){
        $comment = new Comment;
        $comment ->comment = request()->input('comment');
        $comment ->user_id= auth()->user()->id;
        $comment ->article_id= request()->article_id;
        $comment -> save();

        dd('your comment saved');
    }

    public function edit($comment_id){
            $comment = Comment::find($comment_id);
            return view('/articles/testcomment')->with(['comment'=>$comment]);
    }

    public function update($comment_id){
            $comment = Comment::find($comment_id);
            $comment -> comment = request()->input('comment');
            $comment -> save();
            return view('/articles/index');
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