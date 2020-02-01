<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Comment;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();


        return view('/articles/index')->with(['articles' => $articles,'categories'=>$categories]);
    }

    public function category($cat)
    {
        $category = Category::where(['id'=>$cat])->first();
        return view('/articles/category')->with(['category' => $category]);
    }

    public function create()
    {
        $category = Category::all();

        return view('/articles/create')->with(['categories' => $category]);
    }

    public function store()
    {

        $profile = new Article;
        $profile->title = request()->input('title');
        $profile->description = request()->input('description');
        $profile->category_id = request()->input('category');

        if (request()->has('avatar')) {
            $avatarUploaded = request()->file('avatar');
            $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
            $avatarPath = public_path('/image/article');
            $avatarUploaded->move($avatarPath, $avatarName);
            $profile->avatar = '/image/article/' . $avatarName;
        }

        $profile->user_id = auth()->user()->id;
        $profile->save();

        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        $category = Category::all();
        return view('articles/edit')->with(['article' => $article, 'categories' => $category]);

    }

    public function update($id)
    {
        $article = Article::find($id);
        $article->title = request()->input('title');
        $article->description = request()->input('description');

        if (request()->has('avatar')) {
            $avatarUploaded = request()->file('avatar');
            $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
            $avatarPath = public_path('/image/article');
            $avatarUploaded->move($avatarPath, $avatarName);
            $article->avatar = '/image/article/' . $avatarName;
        }
       $article->save();
        return redirect("/articles/{$article->id}");
    }

    public function show($id)
    {
        $article = Article::find($id);
        $comments = $article->comments;
        return view("/articles/show")->with(['article' => $article, 'comments' => $comments]);
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/articles');
    }


}
