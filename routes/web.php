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

//Route::get('/', function () {


//});



// Route::get('/','Trend\TrendController@home');

// Route::get('/', function () {

//     return view('home.index');
// });

Auth::routes(['verify'=>true]);

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes(['verify'=>true]);

//retreve the top rateable doctors in the main page
Route::get('/', 'Home\HomeController@topRated');


// this route is only for test
Route::get('/tests/{test}', 'Personal\PersonalController@show');
Route::post('/tests/{test}', 'Personal\PersonalController@store');


//for the contact us

Route::post('/contact', 'Contact\ContactController@store');
Route::get('/contacts', 'Contact\ContactController@index');
// Route::get('/contacts', function(){
//     dd('fuck');
// });

Route::delete('/contacts/{id}', 'Contact\ContactController@destroy');



// Route::get('/articles/{id}', 'Article\ArticleController@indexarticle')->name('articles.index');

Route::get('/bodies', 'Body\BodyController@index')->name('body.index');
Route::get('/bodies/{body}', 'Body\BodyController@show')->name('body.show');
Route::get('/articles/{id}', 'Article\ArticleController@show')->name('articles.show');

//get the user data with their articles
// Route::get('/diseases', 'Disease\DiseaseController@index')->name('diseases.index');
Route::get('/diseases/{disease}', 'Disease\DiseaseController@show')->name('diseases.show');

// test route
// Route::get('/cat', 'Category\CategoryController@index');
// test route cat with article
// Route::get('/cat', 'Category\CategoryController@index');
// test route user with comment
// Route::get('/user', 'Comment\CommentController@index');

Route::get('/prof', 'Profile\ProfileController@index');

// test route
// Route::get('/art/{id}', 'Article\ArticleController@indexarticle')->name('articles.index');

//test here without controller
// Route::get('/art/{id}', function(){
//     $art = Article::find(2);
//     dd($art->comments);
// });

// articles
Route::group(['namespace' => 'Article'], function () {
    // Controllers Within The "App\Http\Controllers\Article" Namespace
    Route::get('/articles', 'ArticleController@index')->name('articles.index');
    Route::get('/doctor_article/{doctor}', 'ArticleController@doctor_article')->name('doctor.article');
    Route::get('/article/create', 'ArticleController@create')->name('articles.create')->middleware(['role:Admin|Doctor','auth']);
    Route::post('/articles/store', 'ArticleController@store')->name('articles.store')->middleware(['role:Admin|Doctor','auth']);
    Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('articles.edit')->middleware(['role:Admin|Doctor','auth']);
    Route::put('/articles/{article}', 'ArticleController@update')->name('articles.update')->middleware(['role:Admin|Doctor','auth']);
    Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');
    Route::delete('/articles/{id}', 'ArticleController@destroy')->name('articles.destroy')->middleware(['role:Admin|Doctor', 'auth']);
    Route::get('/articles/cat/{cat}', 'ArticleController@category')->name('articles.category');
});


// Route::get('/comments', 'Comment\CommentController@index')->name('comments.index');
Route::post('/comments/store/{article_id}', 'Comment\CommentController@store')->name('comments.store');
//this is needs a different view to show
Route::get('/comments/{comment}/edit', 'Comment\CommentController@edit')->name('comments.edit');
Route::put('/comments/{comment}', 'Comment\CommentController@update');

Route::delete('/comment/{comment}', 'Comment\CommentController@destroy')->name('comment.destroy');


// Route::get('/profiles','Profile\ProfileController@showMyProfile')->name('profiles.showMy');;
//route for rate
// Route::get('/profiles/{Profile}', 'Profile\ProfileController@showAnotherProfile');

// Route::post('/rate', 'Profile\ProfileController@addRate')->name('profiles.addRate');
// Route::get('/profiles/{profile}/edit', 'Profile\ProfileController@edit')->name('profiles.edit');
// Route::put('/profiles/{profile}', 'Profile\ProfileController@update')->name('profiles.update');
//--------------------------------------------------------
Route::get('/profiles', 'Profile\ProfileController@showMyProfile')->name('profiles.show')->middleware(['role:Doctor', 'auth']);
Route::get('/profiles/{profile}/edit', 'Profile\ProfileController@edit')->name('profiles.edit')->middleware(['role:Doctor', 'auth']);
Route::put('/profiles/{profile}', 'Profile\ProfileController@update')->name('profiles.update')->middleware(['role:Doctor', 'auth']);
Route::get('/profiles/{Profile}', 'Profile\ProfileController@showAnotherProfile')->name('profiles.another');
Route::post('/rate', 'Profile\ProfileController@addRate')->name('profiles.addRate');
//--------------------------------------------------------------
Route::get('/profile/complete', 'Complete\CompleteController@show')->name('profiles.create')->middleware(['role:Doctor', 'auth']);
Route::post('/profiles', 'Complete\CompleteController@store')->name('profiles.complete')->middleware(['role:Doctor', 'auth']);


//doctor
Route::group([
    'namespace' => 'Doctor',
], function () {
    Route::get('/doctors', 'DoctorController@index');
    Route::get('/dashboardDoctors', 'DoctorController@dashboardDoctors')->middleware(['role:Admin', 'auth']);
    Route::get('/doctors/{doctor}', 'DoctorController@show');
    Route::delete('/doctors/{doctor}', 'DoctorController@delete')->middleware(['role:Admin', 'auth']);
});

//assistant
Route::group([
    'middleware' => ['auth', 'role:Admin|Doctor'],
    'namespace' => 'Assistant',
    'prefix' => 'assistants'
], function () {
    Route::get('/', 'AssistantController@index');
    Route::get('create', 'AssistantController@create');
    Route::post('store', 'AssistantController@store');
    Route::delete('{assistant}', 'AssistantController@delete');
});

//create routes for and reveal time
Route::get('/reveals', 'RevealTime\RevealTimeController@index')->name('reveal.index');
Route::get('/reveals/create', 'RevealTime\RevealTimeController@create')->name('reveal.create');
Route::post('/reveals/store', 'RevealTime\RevealTimeController@store');

Route::get('/reveals/{reveal}/edit', 'RevealTime\RevealTimeController@edit')->name('reveals.edit');
Route::put('/reveals/{reveal}', 'RevealTime\RevealTimeController@update')->name('reveals.update');
Route::delete('/reveals/{reveal}', 'RevealTime\RevealTimeController@destroy')->name('reveals.delete');


//Route::get('/doctors/{doctor}','Doctor\DoctorController@show');

//reservation
Route::get('/reservations', 'Reservation\ReservationController@index');
// Route::get('/reservations', function(){
//     return dd('ssss');
// });

Route::post('reservations/{reveal}/{doctor}', 'Reservation\ReservationController@store');
Route::delete('reservations/{reveal}', 'Reservation\ReservationController@softDelete');

// Dashboard
Route::get('/dash', function () {
    return view('/dashboard/index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
// Route::get('/assistant/create', 'Article\ArticleController@create')->name('articles.create');
Route::get('/a',function (){

    return response()->json(['success'=>'Got Simple Ajax Request.']);

});

Route::get('/ajax',function (){

    return view('test');

});

// not found page redirect to home page
Route::fallback(function () {
    return  redirect('/');
});

//just for admin
// Route::get('/trends/create', dd('web now'));

Route::get('/trends', 'Trend\TrendController@index')->middleware(['role:Admin','auth']);
Route::get('/trends/create',function(){return view('dashboard.trends.create');})->middleware(['role:Admin','auth']);
Route::post('/trends/store', 'Trend\TrendController@store')->name('trends.store')->middleware(['role:Admin','auth']);
Route::delete('/trends/{trend}', 'Trend\TrendController@destroy')->name('trends.delete')->middleware(['role:Admin','auth']);

// Route::get('/trends/{trend}/edit', 'Trend\TrendController@edit')->name('trends.edit');
// Route::put('/profiles/{profile}', 'Profile\ProfileController@update')->name('profiles.update');




