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
         return view('/articles/index');

     }

     public function create(){
        return view('/articles/create');
    }

     public function store(){

        $profile = new Article;
        $profile ->title = request()->input('title');
        $profile ->description= request() ->input('description');
        // $profile ->avatar= request()->input('avatar');

        if(request()->has('avatar')) {
            $avatarUploaded = request()->file('avatar');
            $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
            $avatarPath = public_path('/image/avatar');
            $avatarUploaded->move($avatarPath, $avatarName);
            $profile->avatar = '/image/avatar/'.$avatarName;
        }
        
        $profile ->user_id = auth()->user()->id;
        $profile -> save() ;

        dd('saved successfuly');
        
    }

    public function edit($id){

            $article = Article::find($id);
            return view('articles/edit')->with(['article'=>$article]);

    }

    public function update($id){
             $article = Article::find($id);
             $article -> title = request()->input('title');
             $article -> description = request()->input('description');
            //  dd(request()->input('avatar'));

             
             if(request()->has('avatar')) {
                 $avatarUploaded = request()->file('avatar');
                 $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
                 $avatarPath = public_path('/image/avatar');
                 $avatarUploaded->move($avatarPath, $avatarName);
                 $article->avatar = '/image/avatar/'.$avatarName;
             }
             $article -> save();
           
             return view('/articles/index',['article'=>$article]);
 
            }
     

    public function show($id)
    {
       $article = Article::find($id);
       $comments = $article->comments; 
       return view('/test2')->with(['article'=> $article,'comments'=>$comments]);
    }
  
    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles/index');
      }

}
    

