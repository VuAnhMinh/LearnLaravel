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

Route::get('Khoa hoc', function(){
	return "Xin chao cac ban";
});

Route::get('thu', function(){
	return view('admin.theloai.danhsach');
});

Route::get('test', function(){
	return view ('admin.home');
});


