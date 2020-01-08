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
//ADMIN
Route::group(['prefix'=>'/admin'],function(){
Route::group(['middleware' => 'checkActive'],function(){
Route::get('/',[
	'uses'=>'adminHomeCtrl@index',
	'as'=>'adminHomeCtrl.index'
]);
//topic
Route::get('/topic',[
	'uses'=>'adminHomeCtrl@index',
	'as'=>'adminHomeCtrl.index'
]);
Route::get('/censor_topic/{slug}',[
	'uses'=>'adminTopicCtrl@censor',
	'as'=>'adminTopicCtrl.censor'
]);
Route::get('/new_topic',[
	'uses'=>'adminTopicCtrl@new',
	'as'=>'adminTopicCtrl.new'
]);
Route::post('/new_topic',[
	'uses'=>'adminTopicCtrl@newPost',
	'as'=>'adminTopicCtrl.newPost'
]);
Route::get('/edit_topic/{slug}',[
	'uses'=>'adminTopicCtrl@editTopic',
	'as'=>'adminTopicCtrl.editTopic'
]);
Route::post('/edit_topic/{slug}',[
	'uses'=>'adminTopicCtrl@update',
	'as'=>'adminTopicCtrl.update'
]);
Route::get('/detail_content/{slug}',[
	'uses'=>'adminTopicCtrl@detail',
	'as'=>'adminTopicCtrl.detail'
]);
Route::get('/delete_topic/{slug}',[
	'uses'=>'adminTopicCtrl@delete',
	'as'=>'adminTopicCtrl.delete'
]);
//end topic
//indexing
Route::get('/indexing',[
	'uses'=>'adminIndexingCtrl@list',
	'as'=>'adminIndexingCtrl.list'
]);
Route::get('/new_indexing',[
	'uses'=>'adminIndexingCtrl@new',
	'as'=>'adminIndexingCtrl.new'
]);
Route::post('/new_indexing',[
	'uses'=>'adminIndexingCtrl@insert',
	'as'=>'adminIndexingCtrl.insert'
]);
Route::get('/edit_indexing/{slug}',[
	'uses'=>'adminIndexingCtrl@edit',
	'as'=>'adminIndexingCtrl.edit'
]);
Route::post('/edit_indexing/{slug}',[
	'uses'=>'adminIndexingCtrl@update',
	'as'=>'adminIndexingCtrl.update'
]);
Route::get('/delete_indexing/{id}',[
	'uses'=>'adminIndexingCtrl@delete',
	'as'=>'adminIndexingCtrl.delete'
]);
//endindexing
//link
Route::get('/link',[
	'uses'=>'adminLinkCtrl@list',
	'as'=>'adminLinkCtrl.list'
]);
Route::get('/new_link',[
	'uses'=>'adminLinkCtrl@new',
	'as'=>'adminLinkCtrl.new'
]);
Route::post('/new_link',[
	'uses'=>'adminLinkCtrl@insert',
	'as'=>'adminLinkCtrl.insert'
]);
Route::get('/edit_link/{id}',[
	'uses'=>'adminLinkCtrl@edit',
	'as'=>'adminLinkCtrl.edit'
]);
Route::post('/edit_link/{id}',[
	'uses'=>'adminLinkCtrl@update',
	'as'=>'adminLinkCtrl.update'
]);
Route::get('/delete_link/{id}',[
	'uses'=>'adminLinkCtrl@delete',
	'as'=>'adminLinkCtrl.delete'
]);

//link
//images
Route::get('/list_images',[
	'uses'=>'adminImagesCtrl@list',
	'as'=>'adminImagesCtrl.list'
]);
Route::get('/edit_images/{id}',[
	'uses'=>'adminImagesCtrl@edit',
	'as'=>'adminImagesCtrl.edit'
]);
//end images
//tags
Route::get('/tags',[
	'uses'=>'adminTagsCtrl@list',
	'as'=>'adminTagsCtrl.list'
]);
Route::get('/new_tags',[
	'uses'=>'adminTagsCtrl@new',
	'as'=>'adminTagsCtrl.new'
]);
Route::post('/new_tags',[
	'uses'=>'adminTagsCtrl@insert',
	'as'=>'adminTagsCtrl.insert'
]);
Route::get('/edit_tags/{id}',[
	'uses'=>'adminTagsCtrl@edit',
	'as'=>'adminTagsCtrl.edit'
]);
Route::post('/edit_tags/{id}',[
	'uses'=>'adminTagsCtrl@update',
	'as'=>'adminTagsCtrl.update'
]);
Route::get('/delete_tags/{slug}',[
	'uses'=>'adminTagsCtrl@delete',
	'as'=>'adminTagsCtrl.delete'
])->middleware('password.confirm');
//end tags
//videos
Route::get('/videos',[
	'uses'=>'adminVideosCtrl@list',
	'as'=>'adminVideosCtrl.list'
]);
Route::get('/new_videos',[
	'uses'=>'adminVideosCtrl@new',
	'as'=>'adminVideosCtrl.new'
]);
Route::post('/new_videos',[
	'uses'=>'adminVideosCtrl@insert',
	'as'=>'adminVideosCtrl.insert'
]);
Route::get('/edit_videos/{id}',[
	'uses'=>'adminVideosCtrl@edit',
	'as'=>'adminVideosCtrl.edit'
]);
Route::post('/edit_videos/{id}',[
	'uses'=>'adminVideosCtrl@update',
	'as'=>'adminVideosCtrl.update'
]);
Route::get('/delete_videos/{id}',[
	'uses'=>'adminVideosCtrl@delete',
	'as'=>'adminVideosCtrl.delete'
]);
//end videos
//city
Route::get('/city',[
	'uses'=>'adminCityCtrl@list',
	'as'=>'adminCityCtrl.list'
]);
Route::get('/new_city',[
	'uses'=>'adminCityCtrl@new',
	'as'=>'adminCityCtrl.new'
]);
Route::post('/new_city',[
	'uses'=>'adminCityCtrl@insert',
	'as'=>'adminCityCtrl.insert'
]);
Route::get('/edit_city/{id}',[
	'uses'=>'adminCityCtrl@edit',
	'as'=>'adminCityCtrl.edit'
]);
Route::post('/edit_city/{id}',[
	'uses'=>'adminCityCtrl@update',
	'as'=>'adminCityCtrl.update'
]);
Route::get('/del_city/{id}',[
	'uses'=>'adminCityCtrl@delete',
	'as'=>'adminCityCtrl.delete'
]);
//end city
//banner
Route::get('/banner',[
	'uses'=>'adminBannerCtrl@banner',
	'as'=>'adminBannerCtrl.banner'
]);
Route::post('/banner',[
	'uses'=>'adminBannerCtrl@insert',
	'as'=>'adminBannerCtrl.insert'
]);
//end banner
//info
Route::get('/info',[
	'uses'=>'adminInfoCtrl@list',
	'as'=>'adminInfoCtrl.list'
]);
Route::get('/new_info',[
	'uses'=>'adminInfoCtrl@new',
	'as'=>'adminInfoCtrl.new'
]);
Route::post('/new_info',[
	'uses'=>'adminInfoCtrl@insert',
	'as'=>'adminInfoCtrl.insert'
]);
Route::get('/edit_info/{id}',[
	'uses'=>'adminInfoCtrl@edit',
	'as'=>'adminInfoCtrl.edit'
]);
Route::post('/edit_info/{id}',[
	'uses'=>'adminInfoCtrl@update',
	'as'=>'adminInfoCtrl.update'
]);
//end info
//banner slider
Route::get('/banner_slider',[
	'uses'=>'adminBannerCtrl@bannerS',
	'as'=>'adminBannerCtrl.bannerS'
]);
Route::post('/banner_slider',[
	'uses'=>'adminBannerCtrl@insertS',
	'as'=>'adminBannerCtrl.insertS'
]);
//end banner slider
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/bai-viet-chua-duyet', 'adminTopicCtrl@view_censor')->name('topic_view_censor');
Route::get('/changePassword', 'Auth\changePasswordController@changeGet')->name('changePasswordGet');
Route::post('/changePassword', 'Auth\changePasswordController@change')->name('changePasswordPost');
Route::get('/infoUser', 'Auth\infoController@infoUserGet')->name('infoUserGet');
Route::get('/infoUserUpdate', 'Auth\infoController@infoUserUpdateGet')->name('infoUserUpdateGet');
Route::post('/infoUserUpdate', 'Auth\infoController@infoUserUpdatePost')->name('infoUserUpdatePost');
Route::get('/listUser', 'userAdminController@list')->name('listUser');
Route::get('/lock/{id}', 'userAdminController@lock')->name('lockUser');
Route::get('/unlock/{id}', 'userAdminController@unlock')->name('unlockUser');
Route::get('/deleteUser/{id}', 'userAdminController@delete')->name('deleteUser')->middleware('password.confirm');

});
Auth::routes(['verify' => true]);
Auth::routes(['reset' => false]);
});

//END ADMIN

Route::get('/',[
	'uses'=>'HomeController@home',
	'as'=>'home'
]);
//view
route::get('/chi-tiet/{slug}',[
	'uses'=>'detailController@detail',
	'as'=>'detail'
]);
//-------------------------------------------------------------
Route::get('/home', 'HomeController@home')->name('home');
route::get('tags/{slug}',[
	'uses'=>'tagsController@listTopicFlTags',
	'as'=>'list-topic-follow-tags'
]);
route::get('indexing/{slug}',[
	'uses'=>'indexingController@listTopicFlindexing',
	'as'=>'list-topic-follow-indexing'
]);
route::get('search',[
	'uses'=>'searchController@searchFullText',
	'as'=>'search-topic'
]);


