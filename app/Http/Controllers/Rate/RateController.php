<?php

namespace App\Http\Controllers\Rate;
use willvincent\Rateable\Rateable;

use App\Post;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RateController extends Controller
{
   public function posts()

    {

        $users = User::all();

        return view('users',compact('users'));

    }


    public function show($id)

    {
        $user = User::find($id);
     
        return view('postsShow',compact('user'));
    }


    public function postPost(Request $request )

    {
       
        $newRating = request()->input('rate');
        
        $post = User::find($request->id);
        $rating = \willvincent\Rateable\Rating::where([
            ['user_id', auth()->user()->id],
            ['rateable_id', $request->id],
            ['rateable_type', 'App\User']
        ])->first();
       if( $rating){
        $rating->rating = $newRating;
        $post->ratings()->save($rating);
        return redirect()->route("posts");
      }else{
        request()->validate(['rate' => 'required']);
        $post = User::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $post->ratings()->save($rating);
        return redirect()->route("posts");
    }
    



    }

    
}
