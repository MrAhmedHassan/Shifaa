<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{

    // public function index(){
    //     $comments = Comment::all();
    //     return view('/comments/index')->with('comments',$comments);
    // }

    public function store($id){
        Comment::create([
            'comment'=>request()->comment,
            'user_id'=>auth()->user()->id,
            'article_id'=>request()->article_id,
        ]);
    }

    // public function approvecomment($id){
    //     $post = Comment::find($id);
    //     $post->approve();
    //     return redirect('/comments');
    // }
    // public function destroycomment($id){
    //     $post = Comment::find($id);
    //     $post->delete();
    //     return redirect('/comments');
    //   }
}
