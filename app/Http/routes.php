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

    Route::get('/login/back-url={url_back}',['as'=> 'users.login','uses' => 'Outside\UserControllers@getLogin']);
//    Route::get('/login','Outside\UserControllers@getLogin');

    Route::post('/login/back-url={url_back}',['as'=> 'users.login','uses' => 'Outside\UserControllers@postLogin']);


    Route::get('/','Outside\PlaceControllers@getIndex');
    Route::get('/signup','Outside\UserControllers@getSignup');
    Route::post('/signup','Outside\UserControllers@postSignup');

    Route::get('/search','Outside\PlaceControllers@getSearchResult');
    Route::get('/search/{tendichvu}', ['as' => 'places.getService', 'uses' => 'Outside\PlaceControllers@getSearchService']);
//    Route::get('detail-{MaDuLieu}','Outside\PlaceControllers@getDetail');
});


Route::group(['prefix' => 'inside'],function (){
    Route::controller('users','Inside\UserControllers');
    Route::controller('places','Inside\PlaceControllers');
    Route::controller('comments','Inside\CommentControllers');
});