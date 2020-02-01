<?php

namespace App\Http\Controllers\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\User;

class ArticleController extends Controller
{

    public function index(){
        $articles = Article::all();
         return view('/articles/index');

     }

     public function create(){
        $category = Category::all();

        return view('/articles/create')->with(['categories'=>$category]);
    }

     public function store(){

        $profile = new Article;
        $profile ->title = request()->input('title');
        $profile ->description= request() ->input('description');
        $profile ->category_id= request() ->input('category');

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
    

