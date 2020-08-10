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

Route::get('/proyek/create', 'ProyekController@create'); // menampilkan halaman form
Route::post('/proyek', 'ProyekController@store'); // menyimpan data
Route::get('/proyek', 'ProyekController@index'); // menampilkan semua
Route::get('/proyek/{proyek}', 'ProyekController@show'); // menampilkan detail Proyek dengan id
Route::get('/proyek/{proyek}/edit', 'ProyekController@edit'); // menampilkan form untuk edit Proyek
Route::put('/proyek/{proyek}', 'ProyekController@update'); // menyimpan perubahan dari form edit
Route::delete('/proyek/{proyek}', 'ProyekController@destroy'); // menghapus data dengan id
Route::get('/proyek/{proyek}/daftarkan-staff', 'ProyekController@create'); // menghapus data dengan id
Route::post('/proyek/{proyek}/daftarkan-staff', 'ProyekController@store'); // menghapus data dengan id
