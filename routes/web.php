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

Route::get('/training', function(){
	return view('training');
});

Route::post('/sendContact', 'EmailController@sendContact');

Route::get('/enroll', 'EnrollController@index');
Route::post('/register', 'EnrollController@sendForm');