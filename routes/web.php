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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');
    Route::get('/laolu', 'PagesController@laolu');
    Route::get('/emmanuel', 'PagesController@emmanuel');
    Route::get('/fikayo', 'PagesController@fikayo');

Route::get('/contact', 'ContactController@contact');
Route::post('/contact', 'ContactController@sendEmail');