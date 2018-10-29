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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/saveSessionTest', 'HomeController@saveSessionTest')->name('saveSessionTest');
Route::get('/showSession', 'HomeController@showSession')->name('showSessionTest');

Route::get('/page1','HomeController@page1')->name('page1');
Route::get('/page2','HomeController@page2')->name('page2');

Route::get('/profile','HomeController@profile')->name('profile');
Route::post('/updateProfile','HomeController@updateProfile')->name('updateProfile');