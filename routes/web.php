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
