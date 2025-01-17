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

Route::get("/", "PagesController@home");
Route::get("/pakan", "PagesController@pakan");
Route::resource("hewan", "HewanController");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
