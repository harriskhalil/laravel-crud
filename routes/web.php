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
Route::get('/employee','UserController@index');
Route::post('/employee','UserController@store')->name('st');
Route::get('/employee/create','UserController@create');
Route::get('/employee/{emp}','UserController@show');
Route::get('/employee/{emp}/edit','UserController@edit');
Route::put('/employee/{emp}','UserController@update');
Route::delete('/employee/{emp}','UserController@delete');

