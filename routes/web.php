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

Auth::routes(); 

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/siswa', 'PpdbController@index');

Route::post('/siswa', 'PpdbController@save_siswa');


Route::get('/tampil', 'PpdbController@tampil');

Route::get('/edit/{id}', 'PpdbController@edit');

Route::post('/edit/{id}', 'PpdbController@update');


Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@save_admin');
Route::get('/tampil_admin', 'AdminController@tampil_admin');
Route::get('/edit_admin/{id}', 'AdminController@edit');
Route::post('/edit_admin/{id}', 'AdminController@update');
Route::delete('/admin/{id}', 'AdminController@delete');
Route::get('/tambah_admin', 'AdminController@tambah');
Route::post('/tambah_admin', 'AdminController@save_tambah');


Route::get('/lane', 'LaneController@index');
Route::get('/lane/{id}/edit', 'LaneController@edit');
Route::post('/lane/{id}/edit', 'LaneController@update');
Route::delete('/lane/{id}', 'LaneController@delete');
Route::get('/lane/tambah', 'LaneController@tambah');
Route::post('/lane/tambah', 'LaneController@save');


Route::get('/home' , 'PpdbController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
