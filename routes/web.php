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
Route::get('/pianos', 'PianoController@getAllPianos')->name('pianos');


Route::get('/edit/{id}', 'PianoController@editPiano')->name('edit');
Route::post('/update/{id}', 'PianoController@updatePiano')->name('update');

Route::post('/delete/{id}', 'PianoController@deletePiano')->name('delete');

Route::get('/create', 'PianoController@createPiano')->name('create');
Route::post('/store', 'PianoController@storePiano')->name('store');