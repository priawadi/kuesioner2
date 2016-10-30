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

Route::get('/generate_password', function () {
    echo bcrypt('Papank1989');
    // print_r(Auth::user());
    // echo(Auth::user()->name) . "<br>";
    // echo(Auth::user()->email) . "<br>";
    // echo(Auth::user()->password) . "<br>";
});

Route::get('bladeTest', 'HomeController@index');
Route::auth();

Route::group(['middleware' => ['auth']], function(){
	Route::get('/', function () {
	    return redirect('responden');
	});
	// User
	Route::get('users',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:user-list|user-create|user-edit|user-delete']]);
	Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:user-create']]);
	Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:user-create']]);
	Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show']);
	Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:user-edit']]);
	Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:user-edit']]);
	Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy','middleware' => ['permission:user-delete']]);

	// Roles
	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

	Route::get('/home', 'HomeController@index');

	// Responden
	Route::get('/responden', ['uses' => 'RespondenController@index', 'middleware' => ['permission:kuesioner-list']]);
	Route::get('/responden/tambah', ['uses' => 'RespondenController@create', 'middleware' => ['permission:kuesioner-create']]);
	Route::post('/responden/tambah', ['uses' => 'RespondenController@store', 'middleware' => ['permission:kuesioner-create']]);
	Route::get('/responden/edit/{id_responden}', ['uses' => 'RespondenController@edit', 'middleware' => 'permission:kuesioner-edit']);
	Route::patch('/responden/edit/{id_responden}', ['uses' => 'RespondenController@update', 'middleware' => 'permission:kuesioner-edit']);
	Route::delete('/responden/hapus/{id_responden}', ['uses' => 'RespondenController@destroy', 'middleware' => 'permission:kuesioner-delete']);

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
	Route::get('/konsumsi/edit/{id_responden}', 'KonsumsiController@edit');
	Route::patch('/konsumsi/edit/{id_responden}', 'KonsumsiController@update');
	Route::delete('/konsumsi/hapus/{id_responden}', 'KonsumsiController@destroy');

	//konsumsi
	Route::get('/konsumsinon', 'KonsumsiNonController@index');
	Route::get('/konsumsinon/tambah', 'KonsumsiNonController@create');
	Route::post('/konsumsinon/tambah', 'KonsumsiNonController@store');
	Route::get('/konsumsinon/edit/{id_responden}', 'KonsumsiNonController@edit');
	Route::patch('/konsumsinon/edit/{id_responden}', 'KonsumsiNonController@update');
	Route::delete('/konsumsinon/hapus/{id_responden}', 'KonsumsiNonController@destroy');

	//tenaker
	Route::get('/tenaker', 'TenakerController@index');
	Route::get('/tenaker/tambah', 'TenakerController@create');
	Route::post('/tenaker/tambah', 'TenakerController@store');

	// Hasil tangkapan ikan
	Route::get('/hasil-tangkapan-ikan', 'HasilTangkapanController@index');
	Route::get('/hasil-tangkapan-ikan/tambah', 'HasilTangkapanController@create');
	Route::post('/hasil-tangkapan-ikan/tambah', 'HasilTangkapanController@store');
	Route::get('/hasil-tangkapan-ikan/edit/{id_responden}', 'HasilTangkapanController@edit');
	Route::patch('/hasil-tangkapan-ikan/edit/{id_responden}', 'HasilTangkapanController@update');
	Route::delete('/hasil-tangkapan-ikan/hapus/{id_responden}', 'HasilTangkapanController@destroy');

	// Aset pendukung usaha
	Route::get('/aset-pendukung-usaha', 'AsetPendukungUsahaController@index');
	Route::get('/aset-pendukung-usaha/tambah', 'AsetPendukungUsahaController@create');
	Route::post('/aset-pendukung-usaha/tambah', 'AsetPendukungUsahaController@store');
	Route::get('/aset-pendukung-usaha/edit/{id_responden}', 'AsetPendukungUsahaController@edit');
	Route::patch('/aset-pendukung-usaha/edit/{id_responden}', 'AsetPendukungUsahaController@update');
	Route::delete('/aset-pendukung-usaha/hapus/{id_responden}', 'AsetPendukungUsahaController@destroy');

	// Biaya Perijinan
	Route::get('/biaya-perijinan', 'BiayaPerijinanController@index');
	Route::get('/biaya-perijinan/tambah', 'BiayaPerijinanController@create');
	Route::post('/biaya-perijinan/tambah', 'BiayaPerijinanController@store');
	Route::get('/biaya-perijinan/edit/{id_responden}', 'BiayaPerijinanController@edit');
	Route::patch('/biaya-perijinan/edit/{id_responden}', 'BiayaPerijinanController@update');
	Route::delete('/biaya-perijinan/hapus/{id_responden}', 'BiayaPerijinanController@destroy');

	// Biaya Operasional
	Route::get('/biaya-operasional', 'BiayaOperasionalController@index');
	Route::get('/biaya-operasional/tambah', 'BiayaOperasionalController@create');
	Route::post('/biaya-operasional/tambah', 'BiayaOperasionalController@store');
	Route::get('/biaya-operasional/edit/{id_responden}', 'BiayaOperasionalController@edit');
	Route::patch('/biaya-operasional/edit/{id_responden}', 'BiayaOperasionalController@update');
	Route::delete('/biaya-operasional/hapus/{id_responden}', 'BiayaOperasionalController@destroy');

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
	Route::get('/ketenagakerjaan/edit/{id_responden}', 'KetenagakerjaanController@edit');
	Route::patch('/ketenagakerjaan/edit/{id_responden}', 'KetenagakerjaanController@update');
	Route::delete('/ketenagakerjaan/hapus/{id_responden}', 'KetenagakerjaanController@destroy');

	// Alat Tangkap
	Route::get('/alat-tangkap', 'AlatTangkapController@index');
	Route::get('/alat-tangkap/tambah', 'AlatTangkapController@create');
	Route::post('/alat-tangkap/tambah', 'AlatTangkapController@store');
	Route::get('/alat-tangkap/edit/{id_responden}', 'AlatTangkapController@edit');
	Route::patch('/alat-tangkap/edit/{id_responden}', 'AlatTangkapController@update');
	Route::delete('/alat-tangkap/hapus/{id_responden}', 'AlatTangkapController@destroy');
	Route::get('/alat-tangkap/fix-alat-tangkap', 'AlatTangkapController@fix_alat_tangkap');

	// Tenaga Penggerak
	Route::get('/tenaga-penggerak', 'TenagaPenggerakController@index');
	Route::get('/tenaga-penggerak/tambah', 'TenagaPenggerakController@create');
	Route::post('/tenaga-penggerak/tambah', 'TenagaPenggerakController@store');
	Route::get('/tenaga-penggerak/edit/{id_responden}', 'TenagaPenggerakController@edit');
	Route::patch('/tenaga-penggerak/edit/{id_responden}', 'TenagaPenggerakController@update');
	Route::delete('/tenaga-penggerak/hapus/{id_responden}', 'TenagaPenggerakController@destroy');

	// Perahu
	Route::get('/perahu', 'PerahuController@index');
	Route::get('/perahu/tambah', 'PerahuController@create');
	Route::post('/perahu/tambah', 'PerahuController@store');
	Route::get('/perahu/edit/{id_responden}', 'PerahuController@edit');
	Route::patch('/perahu/edit/{id_responden}', 'PerahuController@update');
	Route::delete('/perahu/hapus/{id_responden}', 'PerahuController@destroy');

	Route::controller('datatables', 'RespondenController', [
	    'anyData'  => 'datatables.data',
	    'getIndex' => 'responden',
	]);

	Route::get('/export/{part}', 'ExportKuesionerController@export_to_excel');
	Route::get('/export-list', 'ExportKuesionerController@index');
	Route::get('/export-penerimaan-usaha', 'ExportKuesionerController@export_to_excel_penerimaan_usaha');
	Route::get('/statistic-data', 'ExportKuesionerController@get_statistic_data');
	
	//highchart
	Route::get('/dashboard', 'HighchartController@index');	
});