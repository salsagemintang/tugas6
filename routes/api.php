<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');
Route::get('/',function(){ return Auth::user()->petugas;})->middleware('jwt.verify');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'petugasController@register');
Route::post('login', 'petugasController@login');

//buku
Route::post('/simpan_buku','bukucontroller@store')->middleware('jwt.verify');
Route::put('/ubah_buku/{id}','bukucontroller@update')->middleware('jwt.verify');
Route::delete('/hapus_buku/{id}','bukucontroller@destroy')->middleware('jwt.verify');
Route::get('/tampil_buku','bukucontroller@tampil_buku')->middleware('jwt.verify');

//anggota
Route::post('/simpan_anggota','anggotacontroller@store')->middleware('jwt.verify');
Route::put('/ubah_anggota/{id}','anggotacontroller@update')->middleware('jwt.verify');
Route::delete('/hapus_anggota/{id}','anggotacontroller@destroy')->middleware('jwt.verify');
Route::get('/tampil_anggota','anggotacontroller@tampil_anggota')->middleware('jwt.verify');

Route::get('index','peminjamancontroller@index')->middleware('jwt.verify');
Route::post('simpan','peminjamancontroller@store')->middleware('jwt.verify');
Route::put('/ubah/{id}','peminjamancontroller@update')->middleware('jwt.verify');
Route::delete('hapus/{id}','peminjamancontroller@destroy')->middleware('jwt.verify');
Route::get("tampil","peminjamancontroller@tampil_pinjam")->middleware('jwt.verify');
Route::post('simpan/{id}','peminjamancontroller@simpan')->middleware('jwt.verify');
Route::put('/ubah/{id}','peminjamancontroller@ubah')->middleware('jwt.verify');
Route::delete('/hapus/{id}','peminjamancontroller@hapus')->middleware('jwt.verify');