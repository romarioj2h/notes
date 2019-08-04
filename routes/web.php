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
Route::get('/notes/index', 'NotesController@index')->name('notes.index');
Route::get('/notes/note/{id}', 'NotesController@note')->name('notes.note');
Route::get('/notes/delete/{id}', 'NotesController@delete')->name('notes.delete');
Route::get('/notes/edit/{id}', 'NotesController@edit')->name('notes.edit');
Route::get('/notes/add', 'NotesController@add')->name('notes.add');
Route::post('/notes/save', 'NotesController@save')->name('notes.save');
