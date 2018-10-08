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

Route::prefix('tasks') -> group ( function (){
    Route::get('home', function () {
        return view('welcome');
    })->name('home_list');
    Route::get('list', 'TaskController@list')->name('task_list');
    Route::get('/{id}/delete', 'TaskController@delete')->name('task_delete');
    Route::get('add', 'TaskController@create')->name('task_add');
    Route::post('add','TaskController@store')->name('add');
    Route::get('{id}/update', 'TaskController@edit')->name('task_update');
    Route::post('{id}/update', 'TaskController@update')->name('update');
    Route::get( '/search', 'TaskController@search' )->name('search');
});