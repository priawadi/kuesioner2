<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kesehatan;
use Validator;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');
        
        return view('kesehatan.form', [
            'subtitle'    => 'Kesehatan',
            'action'      => 'kesehatan/tambah',
            'prev_action' => 'responden',
        ]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules['sakit_setahun_ringan'] = 'numeric';
        $rules['sakit_setahun_berat']  = 'numeric';
        $rules['ringan_dibiarkan']     = 'numeric';
        $rules['ringan_beli_obat']     = 'numeric';
        $rules['ringan_puskesmas']     = 'numeric';
        $rules['ringan_dokter']        = 'numeric';
        $rules['ringan_alternatif']    = 'numeric';
        $rules['ringan_rumah_sakit']   = 'numeric';

        $rules['berat_dibiarkan']   = 'numeric';
        $rules['berat_beli_obat']   = 'numeric';
        $rules['berat_puskesmas']   = 'numeric';
        $rules['berat_dokter']      = 'numeric';
        $rules['berat_alternatif']  = 'numeric';
        $rules['berat_rumah_sakit'] = 'numeric';

        $rules['jamkesmas'] = '';
        $rules['bpjs']      = '';
        $rules['asuransi']  = '';

        $rules['frek_jamkesmas'] = '';
        $rules['frek_bpjs']      = '';
        $rules['frek_asuransi']  = '';
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('kesehatan/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data 
        $kesehatan                       = new Kesehatan;
        $kesehatan->sakit_setahun_ringan = $request->get('sakit_setahun_ringan');
        $kesehatan->sakit_setahun_berat  = $request->get('sakit_setahun_berat');
        $kesehatan->ringan_dibiarkan     = $request->get('ringan_dibiarkan');
        $kesehatan->ringan_beli_obat     = $request->get('ringan_beli_obat');
        $kesehatan->ringan_puskesmas     = $request->get('ringan_puskesmas');
        $kesehatan->ringan_dokter        = $request->get('ringan_dokter');
        $kesehatan->ringan_alternatif    = $request->get('ringan_alternatif');
        $kesehatan->ringan_rumah_sakit   = $request->get('ringan_rumah_sakit');
        $kesehatan->berat_dibiarkan      = $request->get('berat_dibiarkan');
        $kesehatan->berat_beli_obat      = $request->get('berat_beli_obat');
        $kesehatan->berat_puskesmas      = $request->get('berat_puskesmas');
        $kesehatan->berat_dokter         = $request->get('berat_dokter');
        $kesehatan->berat_alternatif     = $request->get('berat_alternatif');
        $kesehatan->berat_rumah_sakit    = $request->get('berat_rumah_sakit');
        $kesehatan->jamkesmas            = $request->get('jamkesmas');
        $kesehatan->bpjs                 = $request->get('bpjs');
        $kesehatan->asuransi             = $request->get('asuransi');
        $kesehatan->frek_jamkesmas       = $request->get('frek_jamkesmas');
        $kesehatan->frek_bpjs            = $request->get('frek_bpjs');
        $kesehatan->frek_asuransi        = $request->get('frek_asuransi');
        $kesehatan->id_responden         = $request->session()->get('id_responden');

        $kesehatan->save();

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
