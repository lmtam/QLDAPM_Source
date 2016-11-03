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



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::group(['prefix' => '/'], function() {
    Route::get('/diadiem-{MaDuLieu}', ['as' => 'places.getDetail', 'uses' => 'Outside\PlaceControllers@getDetail']);
//    Route::get('/diadiem-{MaDulieu}','Outside\PlaceControllers@getDetail');
    Route::get('/login','Outside\UserControllers@getLogin');
    Route::get('/','Outside\PlaceControllers@getIndex');


    Route::get('/search','Outside\PlaceControllers@getSearchResult');
//    Route::get('detail-{MaDuLieu}','Outside\PlaceControllers@getDetail');
});


Route::group(['prefix' => 'inside'],function (){
    Route::controller('users','Inside\UserControllers');
    Route::controller('places','Inside\PlaceControllers');
});