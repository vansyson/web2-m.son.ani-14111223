<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\mhsw;
Route::get('/home', 'viewController@index');
// Route::get('/tambah', function(){
// 	$mhsw = new mhsw;
// 	$mhsw ->nama = "son";
// 	$mhsw ->nim = "14111223";
// 	$mhsw ->alamat = "bandung";
// 	$mhsw ->save();});


Route::get('/ubah', function(){
	$edit = new mhsw;
	$edit ->nama = "son";
	$edit ->nim = "14111223";
	$edit ->alamat = "bandung";
	$edit ->save();});


// Route::get('/tampil', function(){
// 	$mhsw = mhsw::all();
// 	foreach($mhsw as $mhs)
// 	{
// 	echo "<b>Nama</b> : ";
// 	echo $mhs->nama;
// 	echo "<br><b>Nama</b> : ";
// 	echo $mhs->nim;
// 	echo "<br><b>Nama</b> : ";
// 	echo $mhs->alamat;
// 	}});

// Route::get('/hapus', function()
// {
// $mahasiswa = Mahasiswa::find(1);
// $mahasiswa->delete();
// });

Route::post('/store', 'viewController@store');
Route::get('/tambah', 'viewController@create');
Route::get('/show/{id}', 'ViewController@show');
Route::post('/update/{id}', 'viewController@update');
Route::get('/destroy/{id}', 'ViewController@destroy');
route::get('/index', 'viewController@index');

Route::auth();
Route::get('/', 'HomeController@index');
