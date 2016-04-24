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

// Responden
Route::get('/responden', 'RespondenController@index');
Route::get('/responden/tambah', 'RespondenController@create');
Route::post('/responden/tambah', 'RespondenController@store');

Route::get('/responden/lihat/{id_responden}', 'RespondenController@detail');

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

// Rasa Percaya Organisasi Sosial
Route::get('/rasa-percaya-organisasi', 'RasaPercayaOrgController@index');
Route::post('/rasa-percaya-organisasi', 'RasaPercayaOrgController@store');
Route::get('/rasa-percaya-organisasi/tambah', 'RasaPercayaOrgController@create');

// Rasa Percaya Politik
Route::get('/rasa-percaya-politik', 'RasaPercayaPolController@index');
Route::post('/rasa-percaya-politik', 'RasaPercayaPolController@store');
Route::get('/rasa-percaya-politik/tambah', 'RasaPercayaPolController@create');

// Nilai dan norma
Route::get('/nilai-norma', 'NilaiNormaController@index');
Route::post('/nilai-norma', 'NilaiNormaController@store');
Route::get('/nilai-norma/tambah', 'NilaiNormaController@create');

// Karakteristik Rumah Tangga
Route::get('/karakteristik-rumah-tangga', 'KarRumahTanggaController@index');
Route::post('/karakteristik-rumah-tangga', 'KarRumahTanggaController@store');
Route::get('/karakteristik-rumah-tangga/tambah', 'KarRumahTanggaController@create');

// Jenis Pekerjaan Rumah Tangga
Route::get('/jenis-pekerjaan-rumah-tangga', 'JenisPekerjaanRumahTgController@index');
Route::get('/jenis-pekerjaan-rumah-tangga/tambah', 'JenisPekerjaanRumahTgController@create');
Route::post('/jenis-pekerjaan-rumah-tangga/tambah', 'JenisPekerjaanRumahTgController@store');

// Aset Rumah Tangga
Route::get('/aset-rumah-tangga', 'AsetRumahTanggaController@index');
Route::get('/aset-rumah-tangga/tambah', 'AsetRumahTanggaController@create');
Route::post('/aset-rumah-tangga/tambah', 'AsetRumahTanggaController@store');

// Kesehatan
Route::get('/kesehatan', 'KesehatanController@index');
Route::get('/kesehatan/tambah', 'KesehatanController@create');
Route::post('/kesehatan/tambah', 'KesehatanController@store');

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

// Hasil tangkapan ikan
Route::get('/hasil-tangkapan-ikan', 'HasilTangkapanController@index');
Route::get('/hasil-tangkapan-ikan/tambah', 'HasilTangkapanController@create');
Route::post('/hasil-tangkapan-ikan/tambah', 'HasilTangkapanController@store');

// Aset pendukung usaha
Route::get('/aset-pendukung-usaha', 'AsetPendukungUsahaController@index');
Route::get('/aset-pendukung-usaha/tambah', 'AsetPendukungUsahaController@create');
Route::post('/aset-pendukung-usaha/tambah', 'AsetPendukungUsahaController@store');