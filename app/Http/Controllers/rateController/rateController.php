<?php

namespace App\Http\Controllers\rateController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class rateController extends Controller
{
    public function posts()

    {

        $posts = Post::all();

        return view('posts',compact('posts'));

    }


    public function show($id)

    {

        $post = Post::find($id);

        return view('postsShow',compact('post'));

    }


    public function postPost(Request $request)

    {
        //get the id of the user that made the rate
        $checkUserid=auth()->user()->id;
        //get all data from the rate table in database
        $rate=\willvincent\Rateable\Rating::all();
        //make an empty array to put all userid in it
       $arr=[];
       for($i=0;$i<count($rate);$i++)
       {
           $arr[$i]=$rate[$i]->user_id;
       }
     if(in_array($checkUserid, $arr))
     {
         return "you made rate before";
     }else{
        request()->validate(['rate' => 'required']);
        $post = Post::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $post->ratings()->save($rating);
        return redirect()->route("posts");
     }
    



    }

    public function exper($id)

    {

        $post = User::find($id);
        dd($post->article);
        echo $post."<br>";
        echo "the data of the articles that created by this user is<br> ";
        for($i=0;$i<count($post->article);$i++){
        echo "id :". $post->article[$i]->id."<br>";
        echo "title :".$post->article[$i]->title."<br>";
        echo "avatar :"."<img src=../images/". $post->article[$i]->avatar."><br>";
        echo "description :".$post->article[$i]->description."<br>";

    }
        //return view('postsShow',compact('post'));

    }
}
