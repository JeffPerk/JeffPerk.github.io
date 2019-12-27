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
})->name('home');

Route::group(['prefix' => 'notes'], function () {
    Route::get('/', 'NotesController@index')->name('notes.index');
    Route::get('/create', 'NotesController@create')->name('notes.create');
    Route::post('/', 'NotesController@store')->name('notes.store');
    Route::get('/{note}/edit', 'NotesController@edit')->name('notes.edit');
    Route::delete('/{note}/destroy', 'NotesController@destroy')->name('notes.delete');
});
