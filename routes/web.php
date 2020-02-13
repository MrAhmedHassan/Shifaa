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
use App\Rating;

Auth::routes(['verify'=>true]);

Route::get('/', 'Home\HomeController@topRated')->name('home.index');
//-----------------------------------------------------------------------
//test
Route::get('/tests/{test}', 'Personal\PersonalController@show');
Route::post('/tests/{test}', 'Personal\PersonalController@store');
//-----------------------------------------------------------------------
//contact us
Route::post('/contact', 'Contact\ContactController@store');
Route::get('/contacts', 'Contact\ContactController@index');
Route::delete('/contacts/{id}', 'Contact\ContactController@destroy');
//------------------------------------------------------------------------
//human body
Route::get('/bodies', 'Body\BodyController@index')->name('body.index');
Route::get('/bodies/{body}', 'Body\BodyController@show')->name('body.show');
Route::get('/diseases/{disease}', 'Disease\DiseaseController@show')->name('diseases.show');

//------------------------------------------------------------------------
// articles
Route::group(['namespace' => 'Article'], function () {
    // Controllers Within The "App\Http\Controllers\Article" Namespace
    Route::get('/articles', 'ArticleController@index')->name('articles.index');
    Route::get('/doctor_article/{doctor}', 'ArticleController@doctor_article')->name('doctor.article');
    Route::get('/article/create', 'ArticleController@create')->name('articles.create')->middleware(['role:Admin|Doctor','auth','verified']);
    Route::post('/articles/store', 'ArticleController@store')->name('articles.store')->middleware(['role:Admin|Doctor','auth','verified']);
    Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('articles.edit')->middleware(['role:Admin|Doctor','auth','verified']);
    Route::put('/articles/{article}', 'ArticleController@update')->name('articles.update')->middleware(['role:Admin|Doctor','auth','verified']);
    Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');
    Route::delete('/articles/{id}', 'ArticleController@destroy')->name('articles.destroy')->middleware(['role:Admin|Doctor', 'auth','verified']);
    Route::get('/articles/cat/{cat}', 'ArticleController@category')->name('articles.category');
});
//-------------------------------------------------------------------------------
//comments
Route::post('/comments/store/{article_id}', 'Comment\CommentController@store')->name('comments.store')->middleware(['auth','verified']);
Route::get('/comments/{comment}/edit', 'Comment\CommentController@edit')->name('comments.edit')->middleware(['auth','verified']);
Route::put('/comments/{comment}', 'Comment\CommentController@update')->middleware(['verified']);
Route::delete('/comment/{comment}', 'Comment\CommentController@destroy')->name('comment.destroy')->middleware(['auth','verified']);

//--------------------------------------------------------
// profile
Route::get('/profiles', 'Profile\ProfileController@showMyProfile')->name('profiles.show')->middleware(['role:Doctor', 'auth']);
Route::get('/profiles/{profile}/edit', 'Profile\ProfileController@edit')->name('profiles.edit')->middleware(['role:Doctor', 'auth']);
Route::put('/profiles/{profile}', 'Profile\ProfileController@update')->name('profiles.update')->middleware(['role:Doctor', 'auth']);
Route::get('/profiles/{profile}', 'Profile\ProfileController@showAnotherProfile')->name('profiles.another');
Route::post('/rate', 'Profile\ProfileController@addRate')->name('profiles.addRate')->middleware(['auth','verified']);

//-----------------------------------
//complete profile
Route::get('/profile/complete', 'Complete\CompleteController@show')->name('profiles.create')->middleware(['role:Doctor', 'auth']);
Route::post('/profiles', 'Complete\CompleteController@store')->name('profiles.complete')->middleware(['role:Doctor', 'auth']);
//----------------------------------------------------------------------------------
//doctor
Route::group([
    'namespace' => 'Doctor',
], function () {
    Route::get('/doctors', 'DoctorController@index');
    Route::get('/dashboardDoctors', 'DoctorController@dashboardDoctors')->middleware(['role:Admin', 'auth','verified']);
    Route::get('/dashboardDoctors/{doctor}', 'DoctorController@dashboardDoctorshow')->middleware(['role:Admin', 'auth','verified']);
    Route::get('/dashboardWaitingDoctors', 'DoctorController@dashboardWaitingDoctors')->middleware(['role:Admin', 'auth','verified']);
    Route::post('/doctors/{doctor}', 'DoctorController@approve')->middleware(['role:Admin', 'auth','verified']);
    Route::delete('/doctors/{doctor}', 'DoctorController@delete')->middleware(['role:Admin', 'auth','verified']);
});
//-----------------------------------------------------------------------------------
//assistant
Route::group([
    'middleware' => ['auth', 'role:Admin|Doctor','verified'],
    'namespace' => 'Assistant',
    'prefix' => 'assistants'
], function () {
    Route::get('/', 'AssistantController@index');
    Route::get('create', 'AssistantController@create');
    Route::post('store', 'AssistantController@store');
    Route::delete('{assistant}', 'AssistantController@delete');
});
//----------------------------------------------------------------------------
//create routes for and reveal time
Route::group([
    'middleware' => ['auth', 'role:Admin|Doctor|Assistant','verified'],
], function () {
Route::get('/reveals', 'RevealTime\RevealTimeController@index')->name('reveal.index');
Route::get('/reveals/create', 'RevealTime\RevealTimeController@create')->name('reveal.create');
Route::post('/reveals/store', 'RevealTime\RevealTimeController@store');
Route::get('/reveals/{reveal}/edit', 'RevealTime\RevealTimeController@edit')->name('reveals.edit');
Route::put('/reveals/{reveal}', 'RevealTime\RevealTimeController@update')->name('reveals.update');
Route::delete('/reveals/{reveal}', 'RevealTime\RevealTimeController@destroy')->name('reveals.delete');

});
//-------------------------------------------------------------------------------------
//reservation
Route::get('/reservations', 'Reservation\ReservationController@index')->middleware(['auth','verified']);
Route::post('reservations/{reveal}/{doctor}', 'Reservation\ReservationController@store')->middleware(['auth','verified']);
Route::delete('reservations/{reveal}', 'Reservation\ReservationController@softDelete')->middleware(['auth','verified']);
//----------------------------------------------------------------------------------
// Dashboard
Route::get('/dashboard', 'Dashboard\DashboardController@index')->middleware(['role:Admin|Doctor|Assistant','auth','verified']);

//trends
Route::get('/trends/all', 'Trend\TrendController@index')->middleware(['role:Admin','auth']);
Route::get('/trends/create',function(){return view('dashboard.trends.create');})->middleware(['role:Admin','auth']);
Route::post('/trends/store', 'Trend\TrendController@store')->name('trends.store')->middleware(['role:Admin','auth']);
Route::delete('/trends/{trend}', 'Trend\TrendController@destroy')->name('trends.delete')->middleware(['role:Admin','auth']);
Route::get('/trends/{trend}', 'Trend\TrendController@show')->name('trends.show');
//---------------------------------------------------------------------------------
//map
Route::get('/map',function(){return view('map.index');});

// not found page redirect to home page
Route::fallback(function () {
    return  redirect('/');
});


