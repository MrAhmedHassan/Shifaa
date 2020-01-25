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

Route::get('/diseases', 'DiseaseController@index')->name('diseases.index');

Route::get('/diseases/{disease}','DiseaseController@show')->name('diseases.show');

// Route::get('/test','CategoryController@index');

Route::get('/comments', 'ArticleController@indexcomment')->name('comments.index');
Route::get('/comments/create', 'ArticleController@createcomment')->name('comments.create');
Route::get('/comments/approve/{id}', 'ArticleController@approvecomment')->name('comments.approve');
Route::delete('/comments/{id}', 'ArticleController@destroycomment')->name('comments.destroy');




