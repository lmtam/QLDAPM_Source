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

    Route::get('/login',['as'=> 'users.login','uses' => 'Outside\UserControllers@getLogin']);
//    Route::get('/login','Outside\UserControllers@getLogin');

    Route::post('/login',['as'=> 'users.login','uses' => 'Outside\UserControllers@postLogin']);
    Route::get('/logout','Outside\UserControllers@getLogout');

    Route::get('/','Outside\PlaceControllers@getIndex');
    Route::get('/signup','Outside\UserControllers@getSignup');
    Route::post('/signup','Outside\UserControllers@postSignup');

    Route::get('/search','Outside\PlaceControllers@getSearchResult');
    Route::get('/search/{tendichvu}', ['as' => 'places.getService', 'uses' => 'Outside\PlaceControllers@getSearchService']);
    Route::post('/comments','Outside\PlaceControllers@postComment');

    Route::get('/facebook/redirect', 'Auth\SocialController@redirectToProvider');
    Route::get('/facebook/callback', 'Auth\SocialController@handleProviderCallback');


    Route::post('/addrating','Outside\PlaceControllers@postRating');
    Route::post('/deleterating','Outside\PlaceControllers@postDeleteRating');

    Route::post('/addsave','Outside\PlaceControllers@postSave');
    Route::post('/deletesave','Outside\PlaceControllers@postDeleteSave');
    Route::get('/showSave','Outside\PlaceControllers@getSave');

});
Route::get('/getMapPlace','Outside\PlaceController@getMapPlace');

Route::group(['prefix' => 'inside'],function (){
    Route::controller('users','Inside\UserControllers');
    Route::controller('places','Inside\PlaceControllers');
    Route::controller('comments','Inside\CommentControllers');
});

