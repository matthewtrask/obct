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
Route::get('/currentshow', 'Obct\CurrentShowController@currentShow');
Route::get('/cast', 'Obct\CastController@cast');
Route::get('/auditions', 'Obct\AuditionsController@auditions');
Route::get('/troupe', 'Obct\TroupeController@troupe');
Route::get('/jrtroupe', 'Obct\JrTroupeController@jrTroupe');
Route::get('/faq', 'Obct\FaqController@faq');
Route::get('/contact', 'Obct\ContactController@contact');

Route::post('/contactMsg', 'Obct\ContactController@postContact');



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

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    
    // Admin
    Route::get('/admin/cast', 'Admin\CastController@cast');
    Route::post('/admin/cast', 'Admin\CastController@addCast');
    Route::patch('/admin/editCast', 'Admin\CastController@editCast');


    // User
    Route::get('/user', 'Users\DashboardController@index');
    Route::get('/user/{id}/edit', 'Users\UsersController@editInfo');


    Route::get('/user/{id}/signup', 'Users\StudentController@registerStudent');
    Route::post('/user/{id}/singup/add', 'Users\StudentController@addStudent');
    Route::get('/user/{id}/view', 'Users\StudentController@viewInfo');
    Route::get('/user/{id}/register', 'Users\RegisterController@index');

    Route::get('/admin', 'Admin\AdminController@index');
    route::get('/admin/about', 'Admin\AboutController@index');
});
