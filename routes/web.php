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

Route::get('/about', function() {
	return '<h1>Hallo</h1>'
	.'selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});

//tugas route

Route::get('/melan', function() {
	return '<h1>Hallo</h1>'
	.'selamat datang.';
});

Route::get('/melan/2', function() {
	return '<h1>Hallo</h1>'
	.'Ini halaman kedua.';
});

Route::get('/saya', function() {
	return '<h1>Hallo</h1>'
	.'selamat datang di halaman ketiga saya.';
});

Route::get('/anjeun', function() {
	return '<h1>Sampurasun</h1>'
	.'selamat datang di webapp anjeun.';
});

Route::get('/anjeun/2', function() {
	return '<h1>sampurasun</h1>'
	.'selamat datang di halaman kedua anjeun.';
});

//view kontak

Route::get('/kontak', function(){
	return view('kontak');

});

//Route Parameter
Route::get('/about/{id}',function($a){
	return 'Ini halaman about <b> '.$a.'</b>';
});


//tugas parameter

Route::get('/kantin/{makan}/{minum}/{cemilan}',function($d,$b,$c){
return 'Saya pesan <b>'.$d.'</b><br>'
	.'Minumnya <b>'.$b.'</b><br>'
	.'Tambah Cemilan <b>'.$c.'</b>';
});

//Route optional parameter

Route::get('user/{name?}', function($name = 'Melan'){
	return 'Nama saya '.$name;
});