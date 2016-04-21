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

// Partisipasi Sosial
Route::get('/partisipasi-sosial', 'PartisipasiSosialController@index');
Route::post('/partisipasi-sosial', 'PartisipasiSosialController@store');
Route::get('/partisipasi-sosial/tambah', 'PartisipasiSosialController@create');

// Partisipasi Organisasi
Route::get('/partisipasi-organisasi', 'PartisipasiOrgController@index');
Route::post('/partisipasi-organisasi', 'PartisipasiOrgController@store');
Route::get('/partisipasi-organisasi/tambah', 'PartisipasiOrgController@create');

// Partisipasi Politik
Route::get('/partisipasi-politik', 'PartisipasiPolitikController@index');
Route::post('/partisipasi-politik', 'PartisipasiPolitikController@store');
Route::get('/partisipasi-politik/tambah', 'PartisipasiPolitikController@create');

// Rasa Percaya Masyarakat
Route::get('/rasa-percaya-masyarakat', 'RasaPercayaMasyController@index');
Route::post('/rasa-percaya-masyarakat', 'RasaPercayaMasyController@store');
Route::get('/rasa-percaya-masyarakat/tambah', 'RasaPercayaMasyController@create');

Route::get('/sample', 'SampleController@create');
Route::post('/sample', 'SampleController@store');
Route::get('/sample/session/set', 'SampleController@set_session');
Route::get('/sample/session/get', 'SampleController@get_session');
Route::get('/sample/session/delete', 'SampleController@delete_session');


//konsumsi
Route::get('/konsumsi', 'KonsumsiController@index');
Route::get('/konsumsi/tambah', 'KonsumsiController@create');
Route::post('/konsumsi/tambah', 'KonsumsiController@store');

//tenaker
Route::get('/tenaker', 'TenakerController@index');
Route::get('/tenaker/tambah', 'TenakerController@create');
Route::post('/tenaker', 'TenakerController@store');
