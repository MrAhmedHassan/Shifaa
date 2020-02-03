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
    return view('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// this route is only for test
Route::get('/tests/{test}','Personal\PersonalController@show');
Route::post('/tests/{test}','Personal\PersonalController@store');



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
Route::get('/articles', 'Article\ArticleController@index')->name('articles.index');
Route::get('/articles/cat/{cat}', 'Article\ArticleController@category')->name('articles.category');
Route::get('/article/create', 'Article\ArticleController@create')->name('articles.create');
Route::post('/articles/store', 'Article\ArticleController@store')->name('articles.store');
Route::get('/articles/{article}/edit', 'Article\ArticleController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'Article\ArticleController@update')->name('articles.update');
Route::get('/articles/{article}', 'Article\ArticleController@show')->name('articles.show');
Route::delete('/articles/{id}', 'Article\ArticleController@destroy')->name('articles.destroy');

// Route::get('/comments', 'Comment\CommentController@index')->name('comments.index');
Route::post('/comments/store/{article_id}', 'Comment\CommentController@store')->name('comments.store');
//this is needs a different view to show
Route::get('/comments/{comment}/edit', 'Comment\CommentController@edit')->name('comments.edit');
Route::put('/comments/{comment}', 'Comment\CommentController@update');

Route::delete('/comment/{comment}', 'Comment\CommentController@destroy')->name('comment.destroy');

//Route::get('/test',function (){
//    $user = \App\User::find(auth()->user()->id);
//    $cat = \App\Category::find(7);
//    dd($cat->users[0]);
//    return view('profile/show');
//});

// Route::get('/profiles','Profile\ProfileController@showMyProfile')->name('profiles.showMy');;
Route::get('/profiles', 'Profile\ProfileController@showMyProfile')->name('profiles.show');
//route for rate
Route::post('/rate', 'Profile\ProfileController@addRate')->name('profiles.addRate');
Route::get('/profiles/{Profile}', 'Profile\ProfileController@showAnotherProfile');
Route::get('/profiles/{profile}/edit', 'Profile\ProfileController@edit')->name('profiles.edit');
Route::put('/profiles/{profile}', 'Profile\ProfileController@update')->name('profiles.update');

Route::get('/profile/complete', 'Complete\CompleteController@show')->name('profiles.create');
Route::post('/profiles', 'Complete\CompleteController@store')->name('profiles.complete');

// Route::put('/profiles/{profile}',"function(){dd('pooop')}");

Route::get('/doctors', 'Doctor\DoctorController@index');
Route::get('/doctors/{doctor}', 'Doctor\DoctorController@show');

//assistant
Route::get('/assistants', 'Assistant\AssistantController@index');
// assistanse create with c
Route::get('/assistants/create', 'Assistant\AssistantController@create');
Route::post('/assistants/store','Assistant\AssistantController@store');
Route::delete('/assistants/{assistant}', 'Assistant\AssistantController@delete');

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

Route::get('/dashboard',function(){
   return view('dashboard.index');
});
// Route::get('/assistant/create', 'Article\ArticleController@create')->name('articles.create');

