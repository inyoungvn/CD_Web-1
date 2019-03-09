<?php

Route::group(['middleware' => ['web']], function() {

    Route::get('/registe', ['as'=>'register','uses'=>'RegisterController@index']);
    Route::post('/registe', 'RegisterController@postRegister');

    Route::get('/login', ['as'=>'login','uses'=>'LoginController@index']);
    Route::post('/login', 'LoginController@postLogin');
    Route::get('/logout', ['as'=>'logout','uses'=>'LoginController@logout'])->middleware('auth');
    
    Route::get('/update',['as'=>'update','uses'=>'UpdateController@getInfor'])->middleware('auth');
    Route::post('/update', ['as'=>'attendupdate','uses'=>'UpdateController@postUpdate']);

    Route::get('/index', 'CityController@index')->name('index');
    
    Route::post('/search-flight',['as'=>'search-flight','uses'=>'FlightListController@searchFlights']); 

    Route::get('/flight-detail/{id}', ['as'=>'flight-detail','uses'=>'FlightListController@postDetail']);

    Route::get('/flight_book/{id}', ['as'=>'flight_book','uses'=>'FlightBookController@flightBook']);
});
