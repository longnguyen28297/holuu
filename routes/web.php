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
//-------------------------------------------------------------
route::get('congdongdonggop',[
	'uses'=>'CongdongdonggopController@congdongdonggop',
	'as'=>'congdongdonggop'
]);
//-------------------------------------------------------------
route::get('gopy',[
	'uses'=>'GopyController@gopy',
	'as'=>'gopy'
]);
//-------------------------------------------------------------
route::get('khuyenhockhuyentai',[
	'uses'=>'KhuyenhockhuyentaiController@khuyenhockhuyentai',
	'as'=>'khuyenhockhuyentai'
]);
//-------------------------------------------------------------
route::get('lichsudongho',[
	'uses'=>'LichsudonghoController@lichsudongho',
	'as'=>'lichsudongho'
]);
//-------------------------------------------------------------
route::get('nguoitotviectot',[
	'uses'=>'NguoitotviectotController@nguoitotviectot',
	'as'=>'nguoitotviectot'
]);
//-------------------------------------------------------------
route::get('quyche',[
	'uses'=>'HomeController@quyche',
	'as'=>'quyche'
]);
//-------------------------------------------------------------
route::get('thongtinsukien',[
	'uses'=>'ThongtinsukienController@thongtinsukien',
	'as'=>'thongtinsukien'
]);
//-------------------------------------------------------------
route::get('thuvien',[
	'uses'=>'ThuvienController@thuvien',
	'as'=>'thuvien'
]);
//-------------------------------------------------------------
route::get('xaydungdongtoc',[
	'uses'=>'HomeController@xaydungdongtoc',
	'as'=>'xaydungdongtoc'
]);