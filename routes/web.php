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

Route::get('/login_form', function () {
    return view('login_form');
});
    //register_form
Route::get('/register_form', function () {
    return view('register_form');
});

  
Route::get('/Home', 'HomeController@Home');
Route::get('/test', 'HomeController@test');

Route::get('/process_login', 'LoginController@attemptLogin');
Route::get('/process_register', 'LoginController@attemptRegister');