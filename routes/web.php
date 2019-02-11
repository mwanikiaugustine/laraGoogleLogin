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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/subjects', 'HomeController@index')->name('subjects')->middleware('auth');
Route::get('/classes', 'HomeController@index')->name('classes');
Route::get('/students', 'StudentController@index')->name('students');
Route::get('/kcpe', 'HomeController@index')->name('kcpe');
Route::get('/teachers', 'HomeController@index')->name('teachers');
Route::post('/roleUpdate', 'UserController@update')->name('roleUpdate');

Route::get('auth/{provider}','Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\AuthController@handleProviderCallback');