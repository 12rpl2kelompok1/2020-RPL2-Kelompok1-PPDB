<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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



Route::get('/tampil', 'StudentController@tampil');
Route::get('/edit/{student_id}', 'StudentController@edit');
Route::post('/edit/{student_id}', 'StudentController@update');
Route::get('/tampil/{student_id}', 'StudentController@verified');


Route::get('siswa', 'HomeController@siswaHome')->name('siswa')->middleware('id_level');
Route::get('/siswa/create', 'StudentController@index');
Route::post('/siswa/create', 'StudentController@save_siswa');


Route::get('admin', 'HomeController@adminHome')->name('admin')->middleware('id_level');
Route::get('/login_admin', 'AdminController@login');
Route::post('/login_admin', 'AdminController@post_login');
Route::get('/dashboard_admin', 'AdminController@dashboard_admin');
Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@save_admin');
Route::get('/tampil_admin', 'AdminController@tampil_admin');
Route::get('/edit_admin/{staff_id}', 'AdminController@edit');
Route::post('/edit_admin/{staff_id}', 'AdminController@update');
Route::delete('/admin/{staff_id}', 'AdminController@delete');
Route::get('/tambah_admin', 'AdminController@tambah');
Route::post('/tambah_admin', 'AdminController@save_tambah');


Route::get('/lane', 'LaneController@index');
Route::get('/lane/{ln_id}/edit', 'LaneController@edit');
Route::post('/lane/{ln_id}/edit', 'LaneController@update');
Route::get('/lane/tambah', 'LaneController@tambah');
Route::post('/lane/tambah', 'LaneController@save');
