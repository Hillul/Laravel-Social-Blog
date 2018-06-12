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



Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
    return view('welcome');
	})->name('home');
    //
    Route::post('/signup','UserController@postSignUp');
    Route::get('/dashboard','PostController@dashboard')->middleware('auth');
    Route::post('/signin','UserController@postSignIn');
    Route::post('/createpost','PostController@postCreatePost');
    Route::get('/delete/{id}','PostController@getDeletePost');
    Route::get('/logout','PostController@getLogout');
    Route::post('/edit','PostController@postEditPost');
    Route::get('/account','UserController@getAccount');
    Route::post('/account_save','UserController@postSaveAccount');
    Route::get('/account_image/{filename}','UserController@getUserImage');
    Route::post('/like','PostController@postLikePost');
   //Route::post('/createpost', function () { echo "OK"; });s
});

