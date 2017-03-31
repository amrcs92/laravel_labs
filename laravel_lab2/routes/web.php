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

Route::get('/task_tracker', function () {
    return view('task_tracker');
});

Route::get('/view', "ViewContrl@showTasks");

Route::get('/add_task', "NewCtrl@ay7aga");
Route::post('/add_task', "NewCtrl@addNewTasks");

Route::get('/task/{id}', "TaskCtrl@showTaskDetails");