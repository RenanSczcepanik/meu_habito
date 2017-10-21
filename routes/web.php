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

Route::group(['prefix'=>'habitos','where'=>['id'=>'[0-9]+']], function(){
  Route::get('',             ['as'=>'habitos',            'uses'=>'HabitosController@index']);
  Route::get('create',       ['as'=>'habitos.create',     'uses'=>'HabitosController@create']);
  Route::get('{id}/destroy', ['as'=>'habitos.destroy',    'uses'=>'HabitosController@destroy']);
  Route::get('{id}/edit',    ['as'=>'habitos.edit',       'uses'=>'HabitosController@edit']);
  Route::put('{id}/update',  ['as'=>'habitos.update',     'uses'=>'HabitosController@update']);
  Route::post('store',       ['as'=>'habitos.store',      'uses'=>'HabitosController@store']);
});
