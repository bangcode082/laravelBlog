<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/ldirect', 'DashboardController@directWelcome');
Route::get('welcome','DashboardController@welcome');

Route::get('/berhasil',function(){
	return view('berhasil');
});

Route::get('user/index',['as'=>'user.index','uses'=>'UserController@index']);
Route::get('user/edit/{id}',['as'=>'user.edit','uses'=>'UserController@edit']);


Route::get('admin',function(){
	return view('layouts.partial.sample');
});

//route auth

Route::get('/change-password', 'PasswordController@changePassword');
Route::put('/change-password', 'PasswordController@updatePassword');


//tes doangg
//tes lagi