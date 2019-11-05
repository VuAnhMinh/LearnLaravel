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

Route::get('KhoaPham/Laravel',function(){
	echo "<h1>Khoa hoc Laravel</h1>";
});

Route::get('HoTen/{ten}',function($ten){
	echo "Ten cua ban la ".$ten;
})->where(['ten'=>'[a-zA-Z]+']);

Route::get('Laravel/{ngay}',function($ngay){
	echo "Hom nay la ngay ".$ngay;
})->where(['ngay'=>'[0-9]+']);