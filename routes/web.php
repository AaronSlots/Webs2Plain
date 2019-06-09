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
    Route::resource('cards', 'CardController');

    //Route::resource('payments', 'PaymentController');

    Route::resource('contacts', 'ContactController')->except(['edit','update','show']);
    Route::get('contacts/confirm/{token}', 'ContactController@confirm')->name('contacts.confirm');
    Route::match(['put','patch'],'contacts/{contact}/favourite', 'ContactController@favourite')->name('contacts.favourite');

    Route::resource('groups', 'GroupController')->except('show');
    Route::delete('groups/{group}/members/{member}', 'GroupController@destroyMember')->name('groups.members.destroy');
    Route::get('groups/{group}/members/create', 'GroupController@createMember')->name('groups.members.create');
    Route::post('groups/{group}/members/create', 'GroupController@storeMember')->name('groups.members.store');
    Route::match(['put','patch'],'groups/{group}/members/{member}/admin', 'GroupController@adminMember')->name('groups.members.admin');
    Route::delete('groups/{group}/leave', 'GroupController@leave')->name('groups.leave');
});
