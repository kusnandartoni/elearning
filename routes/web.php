<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','pagesController@homepage');
Route::get('about','pagesController@about');

Route::group(['middleware'=>['web']],function(){
	Route::get('siswa/cari','SiswaController@cari');
	Route::resource('siswa','SiswaController');
	Route::patch('kelas/{kelas}','KelasController@update');
	Route::resource('kelas','KelasController');
	Route::resource('hobi','HobiController');
});