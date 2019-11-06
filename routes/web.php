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

// auth login
Route::get('/login', 'AuthController@login');
Route::post('/checkLogin', 'AuthController@logincheck');
Route::get('/registration', 'AuthController@registration');
Route::post('/registration', 'AuthController@postRegistration');
Route::get('/logout', 'AuthController@logout');

// dashboard user
Route::get('/dashboard', 'UserController@dashboard');