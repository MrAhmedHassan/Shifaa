<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Article;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/humanbody', 'humanBodyController\humanBodyController@index')->name('humanbody.index');
Route::get('/humanbody/{humanbody}','humanBodyController\humanBodyController@show')->name('teachers.show');
Route::get('/articles/{id}', 'Article\ArticleController@show')->name('articles.show');
// Route::get('/articles/{id}', 'Article\ArticleController@indexarticle')->name('articles.index');


//this routes for rate
Route::get('posts', 'rateController\rateController@posts')->name('posts');

Route::post('posts', 'rateController\rateController@postPost')->name('posts.post');
Route::get('posts/{id}', 'rateController\rateController@show')->name('posts.show');

//get the user data with their articles
Route::get('userart/{id}', 'rateController\rateController@exper')->name('posts.exper');
Route::get('/diseases', 'Disease\DiseaseController@index')->name('diseases.index');

Route::get('/diseases/{disease}','Disease\DiseaseController@show')->name('diseases.show');

// test route
// Route::get('/cat', 'Category\CategoryController@index');

// test route
// Route::get('/art/{id}', 'Article\ArticleController@indexarticle')->name('articles.index');

//test here without controller
// Route::get('/art/{id}', function(){
//     $art = Article::find(2);
//     dd($art->comments);
// });






Route::get('/comments', 'Article\ArticleController@indexcomment')->name('comments.index');
Route::get('/comments/create', 'Article\ArticleController@createcomment')->name('comments.create');
Route::get('/comments/approve/{id}', 'Article\ArticleController@approvecomment')->name('comments.approve');
Route::delete('/comments/{id}', 'Article\ArticleController@destroycomment')->name('comments.destroy');

Route::get('/test','Test\TestController@index');

Route::get('/profiles','Profile\ProfileController@index');
Route::get('/profiles/{Profile}','Profile\ProfileController@show')->name('profiles.show');
Route::get('/profiles/{profile}/edit','Profile\ProfileController@edit');
Route::put('/profiles/{profile}','Profile\ProfileController@update')->name('profiles.update');

Route::get('/doctors','Doctor\DoctorController@index');
Route::get('/doctors/{doctor}','Doctor\DoctorController@show');

