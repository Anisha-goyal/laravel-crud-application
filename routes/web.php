<?php

// use App\Example;

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

//   dd(app('foo'));
	// $tasks = ['task1','task2','task3'];

    return view('welcome');
});

Route::get('/about',function(){
	return view('about');
});

Route::get('/contact',function(){
	return view('contact');
});


Route::resource('/posts','PostsController')->middleware('auth');

Route::patch('/tasks/{task}','PostTaskController@update');

Route::get('/posts/{post}/task','PostTaskController@create');

Route::post('/posts/{post}/task','PostTaskController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
