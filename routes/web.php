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












route::get('/test','Test\TestController@index');

route::get('/profiles','Profile\ProfileController@index');
Route::get('/profiles/{Profile}','Profile\ProfileController@show')->name('profiles.show');
route::get('/profiles/{profile}/edit','Profile\ProfileController@edit');
Route::put('/profiles/{profile}','Profile\ProfileController@update')->name('profiles.update');


route::get('/doctors','Doctor\DoctorController@index');
route::get('/doctors/{doctor}','Doctor\DoctorController@show');
