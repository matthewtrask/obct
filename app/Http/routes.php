<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Obct facing pages
Route::get('/', 'Obct\HomeController@home');
Route::get('/about', 'Obct\AboutController@about');
Route::get('/classes', 'Obct\ClassesController@classes');
Route::get('/teachers', 'Obct\TeacherController@teachers');
Route::get('/summer', 'Obct\SummerController@summer');
Route::get('/schools', 'Obct\SchoolController@schools');

// Admin pages
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
