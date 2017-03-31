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

Route::get('/task_tracker', function () {
    return view('task_tracker');
});

Route::group(["middleware" => "auth"], function(){
	Route::get('/tasks', "TaskController@index");

	Route::get('/task/new', "TaskController@create");

	Route::post('/task', "TaskController@store");

	Route::get('/task/{id?}',"TaskController@show");

	Route::get("/task/update/{id}", "TaskController@edit");

	Route::post("/task/update/{id}", "TaskController@update");

	Route::post("/task/delete/{id}", "TaskController@destroy");

	Route::get('/home', 'HomeController@index');
});

Auth::routes();
