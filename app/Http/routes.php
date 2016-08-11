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

Route::get('users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('users/{user}/edit', 'UserController@edit');
Route::patch('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');


Route::get('categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('categories', 'CategoryController@store');
Route::get('categories/{category}/edit', 'CategoryController@edit');
Route::patch('categories/{category}', 'CategoryController@update');
Route::delete('categories/{category}', 'CategoryController@destroy');

Route::get('directory', 'DirectoryController@index');
Route::get('directory/create', 'DirectoryController@create');
Route::post('directory', 'DirectoryController@store');
Route::get('directory/{directory}/edit', 'DirectoryController@edit');
Route::patch('directory/{directory}', 'DirectoryController@update');
Route::delete('directory/{directory}', 'DirectoryController@destroy');


Route::get('/register', function(){})->middleware('auth');

Route::get('/home', 'HomeController@index');
