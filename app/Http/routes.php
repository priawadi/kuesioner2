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

Route::get('/', function () {
    return view('home');
});

Route::get('/responden', 'RespondenController@create');
Route::post('/responden', 'RespondenController@store');

//konsumsi
Route::get('/konsumsi', 'KonsumsiController@create');
Route::post('/konsumsi', 'KonsumsiController@store');

//tenaker
Route::get('/tenaker', 'TenakerController@create');
Route::post('/tenaker', 'TenakerController@store');