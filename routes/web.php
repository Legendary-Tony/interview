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

Route::get('/', 'HomeController@home')->name('index');
Route::get('/addnew', 'HomeController@addNew')->name('addnew');
Route::post('/create', 'HomeController@create')->name('create');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::put('/update/{id}', 'HomeController@update')->name('update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
