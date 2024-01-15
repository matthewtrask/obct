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

Route::group(['middleware' => 'adminAuth'], function () {
    Route::get('/admin', 'Admin\AdminController@index');

    Route::post('/admin/whatsNew', 'Admin\AdminController@newUpdate');
    Route::post('/admin/alert', 'Admin\AdminController@newAlert');
    Route::post('/admin/removeAlert', 'Admin\AdminController@removeAlert');

    Route::get('/admin/boxoffice', 'Admin\BoxOfficeController@index');

    Route::get('/admin/performances', 'Admin\PerformanceController@index');
    Route::post('/admin/newPerformance', 'Admin\PerformanceController@addNewPerformance');
    Route::post('/admin/editPerformance', 'Admin\PerformanceController@editPerformance');
    Route::post('/admin/deletePerformance', 'Admin\PerformanceController@archivePerformance');

    Route::get('/admin/summer', 'Admin\SummerController@index');
    Route::post('/admin/summer', 'Admin\SummerController@create');
    Route::post('/admin/summer/{id}', 'Admin\SummerController@edit');
    Route::delete('/admin/summer/{id}', '\Admin\SummerController@destroy');

    Route::get('/admin/schools', 'Admin\SchoolsController@index');
    Route::post('/admin/schools', 'Admin\SchoolsController@add');
    Route::put('/admin/schools/{id}', 'Admin\SchoolsController@edit');
    Route::delete('/admin/schools', 'Admin\SchoolsController@delete');

    Route::get('/admin/cast', 'Admin\CastController@cast');
    Route::post('/admin/cast', 'Admin\CastController@addCast');
    Route::put('/admin/editCast', 'Admin\CastController@editCast');
});

Route::group(['middleware' => ['web']], function () {
    Route::auth();

    // User
    Route::get('/user', 'Users\DashboardController@index');
    Route::get('/user/{id}/edit', 'Users\DashboardController@editInfo');


    Route::get('/user/{id}/signup', 'Users\StudentController@registerStudent');
    Route::post('/user/{id}/singup/add', 'Users\StudentController@addStudent'); 
    Route::get('/user/{id}/view', 'Users\StudentController@viewInfo');

});
