<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BiayaRansum;
use App\MasterBiayaVariabel;
use Validator;

class BiayaRansumController extends Controller
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
    public function create(Request $request)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');
        
        return view('biaya_ransum.form', [
            'subtitle'          => 'Biaya Ransum',
            'action'            => 'biaya-ransum/tambah',
            'jenis_operasional' => MasterBiayaVariabel::where('kateg_biaya_variabel', 2)->get(),
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
        $rules['satuan.*'] = '';
        $rules['rataan_puncak.*']      = 'numeric';
        $rules['rataan_sedang.*']      = 'numeric';
        $rules['rataan_paceklik.*']    = 'numeric';
        $rules['harga.*']              = 'numeric';
        $rules['total_puncak.*']       = 'numeric';
        $rules['total_sedang.*']       = 'numeric';
        $rules['total_paceklik.*']     = 'numeric';
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('biaya-ransum/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        foreach (MasterBiayaVariabel::where('kateg_biaya_variabel', 2)->get() as $key => $value) {
            $biaya_ransum                        = new BiayaRansum;
            $biaya_ransum->id_responden          = $request->session()->get('id_responden');
            $biaya_ransum->jenis_biaya           = $value['id_master_biaya_variabel'];

            if (isset($request->get('jenis_biaya_lain')[$value['id_master_biaya_variabel']]))
            {
                $biaya_ransum->jenis_biaya_lain = $request->get('jenis_biaya_lain')[$value['id_master_biaya_variabel']];
            }

            $biaya_ransum->satuan                = $request->get('satuan')[$value['id_master_biaya_variabel']];
            $biaya_ransum->rataan_musim_puncak   = $request->get('rataan_musim_puncak')[$value['id_master_biaya_variabel']];
            $biaya_ransum->rataan_musim_sedang   = $request->get('rataan_musim_sedang')[$value['id_master_biaya_variabel']];
            $biaya_ransum->rataan_musim_paceklik = $request->get('rataan_musim_paceklik')[$value['id_master_biaya_variabel']];
            $biaya_ransum->harga                 = $request->get('harga')[$value['id_master_biaya_variabel']];
            $biaya_ransum->total_puncak          = $request->get('total_puncak')[$value['id_master_biaya_variabel']];
            $biaya_ransum->total_sedang          = $request->get('total_sedang')[$value['id_master_biaya_variabel']];
            $biaya_ransum->total_paceklik        = $request->get('total_paceklik')[$value['id_master_biaya_variabel']];

            $biaya_ransum->save();
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
