<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);


Route::middleware(['verified'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('/notes-list')->group(function () {

        Route::get('/', 'NotesListController@index')->name('notes_list');
        Route::get('/create', 'NotesListController@create')->name('create');
        Route::post('/store', 'NotesListController@store')->name('store');
        Route::get('/edit/{id}', 'NotesListController@edit')->name('edit');
        Route::patch('/update/{id}', 'NotesListController@update')->name('update');
        Route::get('/show/{id}', 'NotesListController@show')->name('show');
        Route::delete('/destroy/{id}', 'NotesListController@destroy')->name('destroy');

    });

});
