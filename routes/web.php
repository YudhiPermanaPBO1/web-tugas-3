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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//routing mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-tambah', 'MahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa', 'MahasiswaController@simpan')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');

Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@hapus')->name('mahasiswa.hapus');

//routing makul
Route::get('makul', 'makulController@index')->name('makul');
Route::get('makul-tambah', 'makulController@create')->name('tambah.makul');
Route::post('simpan-makul', 'makulController@simpan')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'makulController@update')->name('update.makul');

Route::get('hapus-makul/{id}', 'makulController@hapus')->name('makul.hapus');

//routing nilai
Route::get('nilai', 'nilaiController@index')->name('nilai');
Route::get('nilai-tambah', 'nilaiController@create')->name('tambah.nilai');
Route::post('simpan-nilai', 'nilaiController@simpan')->name('simpan.nilai');

Route::get('edit-nilai/{id}', 'nilaiController@edit')->name('nilai.edit');
Route::post('update-nilai/{id}', 'nilaiController@update')->name('update.nilai');

Route::get('hapus-nilai/{id}', 'nilaiController@hapus')->name('nilai.hapus');