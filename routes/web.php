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

	$tasks = ['task1','task2','task3','<script>alert("Warning");</script>'];

    return view('welcome',compact('tasks'));
});

Route::get('/about',function(){
	return view('about');
});

Route::get('/contact',function(){
	return view('contact');
});


Route::resource('/projects','ProjectController');

Route::resource('/posts','PostsController');

