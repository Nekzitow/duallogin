<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/docente/login','Docente\HomeController@showLoginForm');
Route::post('/docente/login','Docente\HomeController@login');
Route::get('/docente/logout', 'Docente\HomeController@logout');
Route::group(['middleware' => ['auth:docente']], function () {
    Route::get('/docente/dashboard', 'Docente\HomeController@index');
});
Route::group(['middleware' => ['auth','super']], function () {
    Route::get('/admin/dashboard', function(){
        return "otro lugar";
    });
});
