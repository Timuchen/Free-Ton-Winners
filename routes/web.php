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


// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('contests', 'ContestController@index')->name('contests');
Route::get('contests/create', 'ContestController@create')->name('contests.create');
Route::post('contests/store', 'ContestController@store')->name('contests.store');
Route::post('update', 'ContestController@update')->name('contests.update');
Route::get('contests/show', 'ContestController@show')->name('contests.show');
Route::get('contests/edit', 'ContestController@edit')->name('contests.edit');
Route::get('contests/destroy{id}', 'ContestController@destroy')->name('contests.destroy');

// Include Wave Routes
Wave::routes();
