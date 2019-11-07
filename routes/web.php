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

Route::get('Route1',['as'=>'MyRoute',function(){
	echo "Xin chao cac ban";
}]);

Route::get('Route2',function(){
	echo "Day la Route 2";
})->name('MyRoute2');

Route::get('GoiTen',function(){
	return redirect()->route('MyRoute2');
});

Route::group(['prefix'=> 'MyGroup'],function(){
	Route::get('User1',function(){
		echo "Day la User1";
	});
	Route::get('User2',function(){
		echo "Day la User2";
	});
	Route::get('User3',function(){
		echo "Day la User3";
	});
});

Route::get('GoiHam','MyController@Xinchao');

Route::get('ThamSo/{ten}','MyController@KhoaHoc');

Route::get('goi/Controller','MyController@GetData')->name('MyRoute3');



