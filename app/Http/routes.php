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

Route::get('/', 'HomesController@index');
Route::get('/profile', ['middleware' => 'auth', 'uses' => 'HomesController@profile']);
Route::patch('/profile', ['middleware' => 'auth', 'uses' => 'HomesController@editProfile']);


Route::get('/register', ['middleware' => 'guest', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register', ['middleware' => 'guest', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('/login', ['middleware' => 'guest', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login', ['middleware' => 'guest', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('/logout', ['middleware' => 'auth', 'uses' => 'Auth\AuthController@getLogout']);


Route::resource('users', 'UsersController');