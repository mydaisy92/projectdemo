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
//Router Backend--------------------------



Route::get('login','BackendController@GetLogin');
Route::get('logout','BackendController@GetLogout');
Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    Route::get('addvariant','BackendController@GetAddVariant');
    Route::get('attr','BackendController@GetAttr');
    Route::get('comment','BackendController@GetComment');
    Route::get('index','BackendController@GetIndex');
    Route::group(['prefix' => 'product'], function () {
        Route::get('add','BackendController@GetAddProduct');
        Route::get('edit','BackendController@GetEditProduct');
        Route::get('list','BackendController@GetListProduct');
    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('','BackendController@GetCategory');
        Route::get('edit','BackendController@GetEditCategory');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('edit','BackendController@GetEditUser');
        Route::get('list','BackendController@GetListUser');
    });
    Route::group(['prefix' => 'order'], function () {
        Route::get('','BackendController@GetOrder');
        Route::get('detail','BackendController@GetDetailOrder');
        Route::get('processed','BackendController@GetProcessed');
    });
});


//router frontend-------------------------------------
Route::get('','FrontendController@GetIndex');
Route::get('about','FrontendController@Getabout');
Route::get('cart','FrontendController@GetCart');
Route::get('checkout','FrontendController@GetCheckout');
Route::get('complete','FrontendController@GetComplete');
Route::get('contact','FrontendController@GetContact');
Route::get('detail','FrontendController@GetDetail');
Route::get('shop','FrontendController@GetShop');









