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
//view
route::get('/trangchu',[
	'uses'=>'HomeController@trangchu',
	'as'=>'trangchu'
]);
route::get('/chitiet',[
	'uses'=>'HomeController@chitiet',
	'as'=>'chitiet'
]);
route::get('congdongdonggop',[
	'uses'=>'HomeController@congdongdonggop',
	'as'=>'congdongdonggop'
]);
route::get('gopy',[
	'uses'=>'HomeController@gopy',
	'as'=>'gopy'
]);
route::get('khuyenhockhuyentai',[
	'uses'=>'HomeController@khuyenhockhuyentai',
	'as'=>'khuyenhockhuyentai'
]);
route::get('lichsudongho',[
	'uses'=>'HomeController@lichsudongho',
	'as'=>'lichsudongho'
]);
route::get('nguoitotviectot',[
	'uses'=>'HomeController@nguoitotviectot',
	'as'=>'nguoitotviectot'
]);
route::get('quyche',[
	'uses'=>'HomeController@quyche',
	'as'=>'quyche'
]);
route::get('thongtinsukien',[
	'uses'=>'HomeController@thongtinsukien',
	'as'=>'thongtinsukien'
]);
route::get('thuvien',[
	'uses'=>'HomeController@thuvien',
	'as'=>'thuvien'
]);