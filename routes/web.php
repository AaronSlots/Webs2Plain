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

Route::middleware('verified')->group(function(){
    Route::resource('cards', 'CardController')->only(['index','create','store']);
    Route::group(['middleware'=>'isCardOwner'], function(){
        Route::prefix('cards/{card}')->name('cards.')->group(function(){
            Route::resource('payments', 'PaymentController')->except(['update','edit','show']);
        });
        Route::resource('cards', 'CardController')->except(['index','show','create','store']);
    });

    Route::resource('contacts', 'ContactController')->except(['edit','update','show']);
    Route::get('contacts/confirm/{token}', 'ContactController@confirm')->name('contacts.confirm');
    Route::match(['put','patch'],'contacts/{contact}/favourite', 'ContactController@favourite')->name('contacts.favourite');

    Route::resource('groups', 'GroupController')->only(['index','create','store']);
    Route::group(['middleware'=>'isGroupAdmin'], function(){
        Route::prefix('groups/{group}')->name('groups.')->group(function(){
            Route::resource('members', 'MemberController')->except(['update','edit','show']);
        });
        Route::resource('groups', 'GroupController')->except(['index','show','create','store']);
    });
    Route::delete('groups/{group}/leave', 'GroupController@leave')->name('groups.leave');
});
