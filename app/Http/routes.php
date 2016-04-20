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

Route::get('/responden', 'RespondenController@index');
Route::get('/responden/tambah', 'RespondenController@create');
Route::post('/responden/tambah', 'RespondenController@store');

Route::get('/partisipasi-sosial', 'PartisipasiSosialController@index');
Route::post('/partisipasi-sosial', 'PartisipasiSosialController@store');
Route::get('/partisipasi-sosial/tambah', 'PartisipasiSosialController@create');


Route::get('/sample', 'SampleController@create');
Route::post('/sample', 'SampleController@store');

//konsumsi
Route::get('/konsumsi', 'KonsumsiController@create');
Route::post('/konsumsi', 'KonsumsiController@store');

//tenaker
Route::get('/tenaker', 'TenakerController@create');
Route::post('/tenaker', 'TenakerController@store');
