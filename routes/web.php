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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/humanbody', 'humanBodyController\humanBodyController@index')->name('humanbody.index');
Route::get('/humanbody/{humanbody}','humanBodyController\humanBodyController@show')->name('teachers.show');
Route::get('/articles/{id}', 'articlesController\articlesController@show')->name('articles.show');

//this routes for rate
Route::get('posts', 'rateController\rateController@posts')->name('posts');

Route::post('posts', 'rateController\rateController@postPost')->name('posts.post');

Route::get('posts/{id}', 'rateController\rateController@show')->name('posts.show');

//get the user data with their articles
Route::get('userart/{id}', 'rateController\rateController@exper')->name('posts.exper');
Route::get('/diseases', 'DiseaseController@index')->name('diseases.index');

Route::get('/diseases/{disease}','DiseaseController@show')->name('diseases.show');

// Route::get('/test','CategoryController@index');

Route::get('/comments', 'ArticleController@indexcomment')->name('comments.index');
Route::get('/comments/create', 'ArticleController@createcomment')->name('comments.create');
Route::get('/comments/approve/{id}', 'ArticleController@approvecomment')->name('comments.approve');
Route::delete('/comments/{id}', 'ArticleController@destroycomment')->name('comments.destroy');

//Route::get('/test/{id}','Profile\ProfileController@showAnotherProfile');
//Route::get('/test',function (){
//    $user = \App\User::find(auth()->user()->id);
//    $cat = \App\Category::find(7);
//    dd($cat->users[0]);
//    return view('profile/show');
//});

Route::get('/profiles','Profile\ProfileController@showMyProfile');
Route::get('/profiles/{Profile}','Profile\ProfileController@show')->name('profiles.show');
Route::get('/profiles/{profile}/edit','Profile\ProfileController@edit');
Route::put('/profiles/{profile}','Profile\ProfileController@update')->name('profiles.update');

Route::get('/doctors','Doctor\DoctorController@index');
Route::get('/doctors/{doctor}','Doctor\DoctorController@show');
