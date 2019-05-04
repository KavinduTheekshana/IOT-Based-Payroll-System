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
    return view('auth/login');
});

Route::get('add', function () {
    return view('Add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/addProfile', 'ProfileController@addProfile');

Route::post('/updateProfile', 'ProfileController@updateProfile');

Route::get('deleteprofile/{id}', 'ProfileController@deleteprofile');

Route::get('editprofile/{id}', 'ProfileController@editprofile');