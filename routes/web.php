<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	$news = App\News::orderBy('created_at', 'desc')->orderBy('id', 'desc')->take(3)->get();
    return view('welcome', ['news' => $news]);
});

Route::get('blog', 'blogController@index');
Route::get('blog/{slug}', 'blogController@show');

Route::get('/team', function(){
	return view('team');
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/stream', function(){
	return view('stream');
});
Auth::routes();