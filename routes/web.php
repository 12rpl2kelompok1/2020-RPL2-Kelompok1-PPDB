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
    return view('new-welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/siswa', 'PpdbController@index')->name('siswa');
Route::post('/siswa', 'PpdbController@save_siswa');
Route::get('/tampil', 'PpdbController@tampil');

Route::get('/edit/{id}', 'PpdbController@edit');
Route::post('/edit/{id}', 'PpdbController@update');




Route::get('/home' , 'PpdbController@home');