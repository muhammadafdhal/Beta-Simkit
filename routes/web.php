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

Route::get('/', 'PasienController@tampilan_pasien')->name('tampilan_pasien');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Data dokter
Route::get('/dokter', 'DokterController@index');
Route::get('/dokter/tambah', 'DokterController@create');
Route::post('/dokter/tambah/save', 'DokterController@store');
Route::get('/dokter/edit/{dk_id}', 'DokterController@edit');
Route::patch('/dokter/edit/{dk_id}/save', 'DokterController@update');
Route::delete('/dokter/delete/{dk_id}', 'DokterController@destroy');

//Data ruangan
Route::get('/ruangan', 'RuanganController@index');
Route::get('/ruangan/tambah', 'RuanganController@create');
Route::post('/ruangan/tambah/save', 'RuanganController@store');
Route::get('/ruangan/edit/{rg_id}', 'RuanganController@edit');
Route::patch('/ruangan/edit/{rg_id}/save', 'RuanganController@update');
Route::delete('/ruangan/delete/{rg_id}', 'RuanganController@destroy');

//Data pembayaran
Route::get('/pembayaran', 'PembayaranController@index');
Route::get('/pembayaran/tambah', 'PembayaranController@create');
Route::post('/pembayaran/tambah/save', 'PembayaranController@store');
Route::get('/pembayaran/edit/{pb_id}', 'PembayaranController@edit');
Route::patch('/pembayaran/edit/{pb_id}/save', 'PembayaranController@update');
Route::delete('/pembayaran/delete/{pb_id}', 'PembayaranController@destroy');

//Data pasien
Route::get('/pasien', 'PasienController@index');
Route::get('/pasien/tambah', 'PasienController@create');
Route::post('/pasien/tambah/save', 'PasienController@store');
Route::get('/pasien/edit/{ps_id}', 'PasienController@edit');
Route::patch('/pasien/edit/{ps_id}/save', 'PasienController@update');
Route::delete('/pasien/delete/{ps_id}', 'PasienController@destroy');
Route::get('/pasien/rawat_jalan/{ps_id}', 'PasienController@rawat_jalan');
Route::get('/pasien/pildok/{ps_id}', 'PasienController@pildok');

//Data spesialis
Route::get('/spesialis', 'SpesialisController@index');
Route::get('/spesialis/tambah', 'SpesialisController@create');
Route::post('/spesialis/tambah/save', 'SpesialisController@store');
Route::get('/spesialis/edit/{ps_id}', 'SpesialisController@edit');
Route::patch('/spesialis/edit/{ps_id}/save', 'SpesialisController@update');
Route::delete('/spesialis/delete/{ps_id}', 'SpesialisController@destroy');

//Data Rawat Inap
Route::get('/rawat_inap', 'RawatInapController@index');
Route::get('/rawat_inap/tambah', 'RawatInapController@create');
Route::post('/rawat_inap/tambah/save', 'RawatInapController@store');
Route::get('/rawat_inap/edit/{ri_id}', 'RawatInapController@edit');
Route::patch('/rawat_inap/edit/{ri_id}/save', 'RawatInapController@update');
Route::delete('/rawat_inap/delete/{ri_id}', 'RawatInapController@delete');
Route::get('/rawat_inap/keluar/{ri_id}', 'RawatInapController@keluar');

//Data Petugas
Route::get('/petugas', 'PetugasController@index');
Route::get('/petugas/tambah', 'PetugasController@create');
Route::post('/petugas/tambah/save', 'PetugasController@store');
Route::get('/petugas/edit/{id}', 'PetugasController@edit');
Route::patch('/petugas/edit/{id}/save', 'PetugasController@update');
Route::delete('/petugas/delete/{id}', 'PetugasController@delete');

//Data Pembayaran
Route::get('/pembayaran', 'PembayaranController@index');
Route::get('/pembayaran/tambah', 'PembayaranController@create');
Route::post('/pembayaran/tambah/save', 'PembayaranController@store');
Route::get('/pembayaran/edit/{id}', 'PembayaranController@edit');
Route::patch('/pembayaran/edit/{id}/save', 'PembayaranController@update');
Route::delete('/pembayaran/delete/{id}', 'PembayaranController@delete');

//data daftar pasien
// Route::get('/utama', 'HomeController@tampilan_pasien');
Route::get('/pasien/pendaftaran','PasienController@daftar');
Route::post('/pasien/konsultasi/save','PasienController@konsultasi');