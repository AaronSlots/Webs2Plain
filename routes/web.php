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

Auth::routes(['verify'=>true]);

Route::get('/', function()
{
    return redirect('/cards');
})->name('home');

Route::resource('cards', 'CardController');
Route::resource('payments', 'PaymentController');
Route::resource('contacts', 'ContactController')->except(['edit','update','show']);
Route::get('contacts/confirm/{token}', 'ContactController@confirm')->name('contacts.confirm');
Route::get('contacts/{contact}/favourite', 'ContactController@favourite');
