<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BiayaPerijinan;
use Validator;

class BiayaPerijinanController extends Controller
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
        return view('biaya_perijinan.form', [
            'subtitle'        => 'Biaya Perijinan',
            'action'          => 'biaya-perijinan/tambah',
            'jenis_perijinan' =>
            [
                1 => 'Ijin Usaha / Ijin Penangkapan',
                2 => 'Pajak',
                3 => 'Pemeliharaan / Perbaikan Perahu (pengecatan, ganti kayu, dll)',
                4 => 'Pemeliharaan / Perbaikan Mesin (ganti oli)',
                5 => 'Pemeliharaan / Perbaikan Alat Tangkap',
                6 => 'Docking Kapal',
                7 => 'Lainnya'
            ],
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
        
        $rules['frek_satuan.*']  = 'required|numeric';
        $rules['harga_satuan.*'] = 'required|numeric';
        $rules['total_biaya.*']  = 'required|numeric';

        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('biaya-perijinan/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        foreach ($request->get('frek_satuan') as $key => $value) {
            $biaya_perijinan                        = new BiayaPerijinan;
            $biaya_perijinan->jenis_biaya_perijinan = $key;
            $biaya_perijinan->frek_satuan           = $request->get('frek_satuan')[$key];
            $biaya_perijinan->harga_satuan          = $request->get('harga_satuan')[$key];
            $biaya_perijinan->total_biaya           = $request->get('total_biaya')[$key];
            $biaya_perijinan->id_responden          = $request->session()->get('id_responden');

            if ($key == 7)
            {
                $biaya_perijinan->jenis_biaya_perijinan_lain = $request->get('jenis_biaya_perijinan_lain');
            }

            $biaya_perijinan->save();
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
