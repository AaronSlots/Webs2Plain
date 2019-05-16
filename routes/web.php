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
    return view('general');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/card/select', 'CardController@getCards');
Route::post('/card/select', 'CardController@selectCard');
Route::get('/card/new','CardController@showCreateCard');
Route::get('/card/edit','CardController@showEditCard');
Route::post('/card/new', 'CardController@updateCard');
Route::post('/card/edit', 'CardController@updateCard');

