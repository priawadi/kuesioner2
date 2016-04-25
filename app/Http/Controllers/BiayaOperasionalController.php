<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MasterBiayaVariabel;
use App\BiayaOperasional;
use Validator;

class BiayaOperasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biaya_operasional.form', [
            'subtitle'          => 'Biaya Operasional',
            'action'            => 'biaya-operasional/tambah',
            'jenis_operasional' => MasterBiayaVariabel::where('kateg_biaya_variabel', 1)->get(),
            'nomor' => 1
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
        $rules['satuan.*'] = 'required';
        $rules['rataan_puncak.*']      = 'required|numeric';
        $rules['rataan_sedang.*']      = 'required|numeric';
        $rules['rataan_paceklik.*']    = 'required|numeric';
        $rules['harga.*']              = 'required|numeric';
        $rules['total_puncak.*']       = 'required|numeric';
        $rules['total_sedang.*']       = 'required|numeric';
        $rules['total_paceklik.*']     = 'required|numeric';
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('biaya-operasional/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        foreach (MasterBiayaVariabel::where('kateg_biaya_variabel', 1)->get() as $key => $value) {
            $biaya_operasional                        = new BiayaOperasional;
            $biaya_operasional->id_responden          = $request->session()->get('id_responden');
            $biaya_operasional->jenis_biaya           = $value['id_master_biaya_variabel'];
            
            if (isset($request->get('jenis_biaya_lain')[$value['id_master_biaya_variabel']]))
            {
                $biaya_operasional->jenis_biaya_lain = $request->get('jenis_biaya_lain')[$value['id_master_biaya_variabel']];
            }

            $biaya_operasional->satuan                = $request->get('satuan')[$value['id_master_biaya_variabel']];
            $biaya_operasional->rataan_musim_puncak   = $request->get('rataan_musim_puncak')[$value['id_master_biaya_variabel']];
            $biaya_operasional->rataan_musim_sedang   = $request->get('rataan_musim_sedang')[$value['id_master_biaya_variabel']];
            $biaya_operasional->rataan_musim_paceklik = $request->get('rataan_musim_paceklik')[$value['id_master_biaya_variabel']];
            $biaya_operasional->harga                 = $request->get('harga')[$value['id_master_biaya_variabel']];
            $biaya_operasional->total_puncak          = $request->get('total_puncak')[$value['id_master_biaya_variabel']];
            $biaya_operasional->total_sedang          = $request->get('total_sedang')[$value['id_master_biaya_variabel']];
            $biaya_operasional->total_paceklik        = $request->get('total_paceklik')[$value['id_master_biaya_variabel']];

            $biaya_operasional->save();
        }

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
