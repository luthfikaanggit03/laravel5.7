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

Route::get('judul',  'BukuController@index') {
    return view('judul');
});

Route::get('penerbit', 'BukuController@index' ){
	return view('penerbit');
});

Route::get('tahun_terbit', 'BukuController@index'){
	return view('tahun_terbit');
});

Route::get('pengarang', 'BukuController@index'){
	return view('pengarang');
});

Route::get('halo', function (){
	return view "Hallo, Selamat Datang di Laravel 5.7";
});

