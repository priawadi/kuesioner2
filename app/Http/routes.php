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
Route::get('/responden/edit/{id_responden}', 'RespondenController@edit');
Route::patch('/responden/edit/{id_responden}', 'RespondenController@update');
Route::delete('/responden/hapus/{id_responden}', 'RespondenController@destroy');

Route::get('/enumerator', 'EnumeratorController@index');
Route::get('/enumerator/tambah', 'EnumeratorController@create');
Route::post('/enumerator/tambah', 'EnumeratorController@store');
Route::get('/enumerator/edit', 'EnumeratorController@edit');
Route::post('/enumerator/edit', 'EnumeratorController@update');

Route::get('/responden/lihat/{id_responden}', 'RespondenController@detail');

// Partisipasi Sosial
Route::get('/partisipasi-sosial', 'PartisipasiSosialController@index');
Route::get('/partisipasi-sosial/tambah', 'PartisipasiSosialController@create');
Route::post('/partisipasi-sosial/tambah', 'PartisipasiSosialController@store');
Route::get('/partisipasi-sosial/edit/{id_responden}', 'PartisipasiSosialController@edit');
Route::patch('/partisipasi-sosial/edit/{id_responden}', 'PartisipasiSosialController@update');
Route::delete('/partisipasi-sosial/hapus/{id_responden}', 'PartisipasiSosialController@destroy');

// Partisipasi Organisasi
Route::get('/partisipasi-organisasi', 'PartisipasiOrgController@index');
Route::get('/partisipasi-organisasi/tambah', 'PartisipasiOrgController@create');
Route::post('/partisipasi-organisasi/tambah', 'PartisipasiOrgController@store');
Route::get('/partisipasi-organisasi/edit/{id_responden}', 'PartisipasiOrgController@edit');
Route::patch('/partisipasi-organisasi/edit/{id_responden}', 'PartisipasiOrgController@update');
Route::delete('/partisipasi-organisasi/hapus/{id_responden}', 'PartisipasiOrgController@destroy');

// Partisipasi Politik
Route::get('/partisipasi-politik', 'PartisipasiPolitikController@index');
Route::get('/partisipasi-politik/tambah', 'PartisipasiPolitikController@create');
Route::post('/partisipasi-politik/tambah', 'PartisipasiPolitikController@store');
Route::get('/partisipasi-politik/edit/{id_responden}', 'PartisipasiPolitikController@edit');
Route::patch('/partisipasi-politik/edit/{id_responden}', 'PartisipasiPolitikController@update');
Route::delete('/partisipasi-politik/hapus/{id_responden}', 'PartisipasiPolitikController@destroy');

// Rasa Percaya Masyarakat
Route::get('/rasa-percaya-masyarakat', 'RasaPercayaMasyController@index');
Route::get('/rasa-percaya-masyarakat/tambah', 'RasaPercayaMasyController@create');
Route::post('/rasa-percaya-masyarakat/tambah', 'RasaPercayaMasyController@store');
Route::get('/rasa-percaya-masyarakat/edit/{id_responden}', 'RasaPercayaMasyController@edit');
Route::patch('/rasa-percaya-masyarakat/edit/{id_responden}', 'RasaPercayaMasyController@update');
Route::delete('/rasa-percaya-masyarakat/hapus/{id_responden}', 'RasaPercayaMasyController@destroy');


// Rasa Percaya Organisasi Sosial
Route::get('/rasa-percaya-organisasi', 'RasaPercayaOrgController@index');
Route::get('/rasa-percaya-organisasi/tambah', 'RasaPercayaOrgController@create');
Route::post('/rasa-percaya-organisasi/tambah', 'RasaPercayaOrgController@store');
Route::get('/rasa-percaya-organisasi/edit/{id_responden}', 'RasaPercayaOrgController@edit');
Route::patch('/rasa-percaya-organisasi/edit/{id_responden}', 'RasaPercayaOrgController@update');
Route::delete('/rasa-percaya-organisasi/hapus/{id_responden}', 'RasaPercayaOrgController@destroy');

// Rasa Percaya Politik
Route::get('/rasa-percaya-politik', 'RasaPercayaPolController@index');
Route::get('/rasa-percaya-politik/tambah', 'RasaPercayaPolController@create');
Route::post('/rasa-percaya-politik/tambah', 'RasaPercayaPolController@store');
Route::get('/rasa-percaya-politik/edit/{id_responden}', 'RasaPercayaPolController@edit');
Route::patch('/rasa-percaya-politik/edit/{id_responden}', 'RasaPercayaPolController@update');
Route::delete('/rasa-percaya-politik/hapus/{id_responden}', 'RasaPercayaPolController@destroy');

// Nilai dan norma
Route::get('/nilai-norma', 'NilaiNormaController@index');
Route::get('/nilai-norma/tambah', 'NilaiNormaController@create');
Route::post('/nilai-norma/tambah', 'NilaiNormaController@store');
Route::get('/nilai-norma/edit/{id_responden}', 'NilaiNormaController@edit');
Route::patch('/nilai-norma/edit/{id_responden}', 'NilaiNormaController@update');
Route::delete('/nilai-norma/hapus/{id_responden}', 'NilaiNormaController@destroy');

// Karakteristik Rumah Tangga
Route::get('/karakteristik-rumah-tangga', 'KarRumahTanggaController@index');
Route::get('/karakteristik-rumah-tangga/tambah', 'KarRumahTanggaController@create');
Route::post('/karakteristik-rumah-tangga/tambah', 'KarRumahTanggaController@store');
Route::get('/karakteristik-rumah-tangga/edit/{id_responden}', 'KarRumahTanggaController@edit');
Route::patch('/karakteristik-rumah-tangga/edit/{id_responden}', 'KarRumahTanggaController@update');
Route::delete('/karakteristik-rumah-tangga/hapus/{id_responden}', 'KarRumahTanggaController@destroy');

// Jenis Pekerjaan Rumah Tangga
Route::get('/jenis-pekerjaan-rumah-tangga', 'JenisPekerjaanRumahTgController@index');
Route::get('/jenis-pekerjaan-rumah-tangga/tambah', 'JenisPekerjaanRumahTgController@create');
Route::post('/jenis-pekerjaan-rumah-tangga/tambah', 'JenisPekerjaanRumahTgController@store');
Route::get('/jenis-pekerjaan-rumah-tangga/edit/{id_responden}', 'JenisPekerjaanRumahTgController@edit');
Route::patch('/jenis-pekerjaan-rumah-tangga/edit/{id_responden}', 'JenisPekerjaanRumahTgController@update');
Route::delete('/jenis-pekerjaan-rumah-tangga/hapus/{id_responden}', 'JenisPekerjaanRumahTgController@destroy');


// Aset Rumah Tangga
Route::get('/aset-rumah-tangga', 'AsetRumahTanggaController@index');
Route::get('/aset-rumah-tangga/tambah', 'AsetRumahTanggaController@create');
Route::post('/aset-rumah-tangga/tambah', 'AsetRumahTanggaController@store');
Route::get('/aset-rumah-tangga/edit/{id_responden}', 'AsetRumahTanggaController@edit');
Route::patch('/aset-rumah-tangga/edit/{id_responden}', 'AsetRumahTanggaController@update');
Route::delete('/aset-rumah-tangga/hapus/{id_responden}', 'AsetRumahTanggaController@destroy');

// Kesehatan
Route::get('/kesehatan', 'KesehatanController@index');
Route::get('/kesehatan/tambah', 'KesehatanController@create');
Route::post('/kesehatan/tambah', 'KesehatanController@store');
Route::get('/kesehatan/edit/{id_responden}', 'KesehatanController@edit');
Route::patch('/kesehatan/edit/{id_responden}', 'KesehatanController@update');
Route::delete('/kesehatan/hapus/{id_responden}', 'KesehatanController@destroy');

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
Route::post('/tenaker/tambah', 'TenakerController@store');

// Hasil tangkapan ikan
Route::get('/hasil-tangkapan-ikan', 'HasilTangkapanController@index');
Route::get('/hasil-tangkapan-ikan/tambah', 'HasilTangkapanController@create');
Route::post('/hasil-tangkapan-ikan/tambah', 'HasilTangkapanController@store');

// Aset pendukung usaha
Route::get('/aset-pendukung-usaha', 'AsetPendukungUsahaController@index');
Route::get('/aset-pendukung-usaha/tambah', 'AsetPendukungUsahaController@create');
Route::post('/aset-pendukung-usaha/tambah', 'AsetPendukungUsahaController@store');

// Biaya Perijinan
Route::get('/biaya-perijinan', 'BiayaPerijinanController@index');
Route::get('/biaya-perijinan/tambah', 'BiayaPerijinanController@create');
Route::post('/biaya-perijinan/tambah', 'BiayaPerijinanController@store');

// Biaya Operasional
Route::get('/biaya-operasional', 'BiayaOperasionalController@index');
Route::get('/biaya-operasional/tambah', 'BiayaOperasionalController@create');
Route::post('/biaya-operasional/tambah', 'BiayaOperasionalController@store');

// Biaya Ransum
Route::get('/biaya-ransum', 'BiayaRansumController@index');
Route::get('/biaya-ransum/tambah', 'BiayaRansumController@create');
Route::post('/biaya-ransum/tambah', 'BiayaRansumController@store');

// Biaya Jasa
Route::get('/biaya-jasa', 'BiayaJasaController@index');
Route::get('/biaya-jasa/tambah', 'BiayaJasaController@create');
Route::post('/biaya-jasa/tambah', 'BiayaJasaController@store');

// Ketenagakerjaan
Route::get('/ketenagakerjaan', 'KetenagakerjaanController@index');
Route::get('/ketenagakerjaan/tambah', 'KetenagakerjaanController@create');
Route::post('/ketenagakerjaan/tambah', 'KetenagakerjaanController@store');

// Alat Tangkap
Route::get('/alat-tangkap', 'AlatTangkapController@index');
Route::get('/alat-tangkap/tambah', 'AlatTangkapController@create');
Route::post('/alat-tangkap/tambah', 'AlatTangkapController@store');

// Tenaga Kerja
Route::get('/tenaga-penggerak', 'TenagaPenggerakController@index');
Route::get('/tenaga-penggerak/tambah', 'TenagaPenggerakController@create');
Route::post('/tenaga-penggerak/tambah', 'TenagaPenggerakController@store');

// Perahu
Route::get('/perahu', 'PerahuController@index');
Route::get('/perahu/tambah', 'PerahuController@create');
Route::post('/perahu/tambah', 'PerahuController@store');
Route::get('/perahu/edit/{id_responden}', 'PerahuController@edit');
Route::patch('/perahu/edit/{id_responden}', 'PerahuController@update');
Route::delete('/perahu/hapus/{id_responden}', 'PerahuController@destroy');