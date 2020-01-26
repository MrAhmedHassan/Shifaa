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

Route::get('/bodies', 'Body\BodyController@index')->name('body.index');
Route::get('/bodies/{body}','Body\BodyController@show')->name('body.show');
Route::get('/articles/{id}', 'Article\ArticleController@show')->name('articles.show');

//this routes for rate
Route::get('posts', 'Rate\RateController@posts')->name('posts');

Route::post('posts', 'Rate\RateController@postPost')->name('posts.post');

Route::get('posts/{id}', 'Rate\RateController@show')->name('posts.show');


Route::get('/diseases', 'DiseaseController@index')->name('diseases.index');

Route::get('/diseases/{disease}','DiseaseController@show')->name('diseases.show');

// Route::get('/test','CategoryController@index');

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
