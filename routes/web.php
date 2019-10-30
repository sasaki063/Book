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

Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('book', 'BookController');

// Route::prefix('book')->group(function(){
//     Route::get('/', 'BookController@index');
//     Route::get('store', 'BookController@store');
//     Route::post('store', 'BookController@create');
//     Route::get('edit', 'BookController@edit');
//     Route::post('edit', 'BookController@update');
// });
