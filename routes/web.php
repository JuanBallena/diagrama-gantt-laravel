<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/gantt', '\App\Http\Controllers\GanttController@index')->name('gantt.index');
Route::get('/data', '\App\Http\Controllers\GanttController@data');
//Route::match(['get', 'post'], '/data', "\App\Http\Controllers\GanttController@data");

// Route::resource('/tasks', '\App\Http\Controllers\TaskController');
// Route::resource('/links', '\App\Http\Controllers\LinkController');

// Route::resource('/task', '\App\Http\Controllers\GanttTaskController');
// Route::resource('/link', '\App\Http\Controllers\GanttLinkController');
Route::get('/save', '\App\Http\Controllers\GanttController@save');