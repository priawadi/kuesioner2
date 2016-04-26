<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\BiayaJasa;

class BiayaJasaController extends Controller
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

        return view('biaya_jasa.form', [
            'subtitle'         => 'Biaya Jasa',
            'action'           => 'biaya-jasa/tambah',
            'nomor'            => 1,
            'jenis_biaya_jasa' => 
            [
                1 => 'Upah Bongkar Muat',
                2 => 'Upah Pembersihan Kapal',
                3 => 'Produksi',
                4 => 'Pemasaran',
                5 => 'Pelelangan',
                6 => 'Syahbandar',
                7 => 'Lainnya',
            ]
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
        $jenis_biaya_jasa = 
        [
            1 => 'Upah Bongkar Muat',
            2 => 'Upah Pembersihan Kapal',
            3 => 'Produksi',
            4 => 'Pemasaran',
            5 => 'Pelelangan',
            6 => 'Syahbandar',
            7 => 'Lainnya',
        ];

        $rules = [];
        foreach ($jenis_biaya_jasa as $id => $value) {

            // Validate satuan, if jenis_biaya_jasa_lain is filled
            if ($id == 7)
            {
                if ($request->get('jenis_biaya_jasa_lain'))
                {
                    $rules['satuan.' . $id] = 'required';
                }
            }

            // Validate if satuan is filled
            if ($request->get('satuan')[$id])
            {
                $rules['jumlah_jasa.' . $id] = 'required|numeric';
                $rules['harga_jasa.' . $id]  = 'required|numeric';
                $rules['total_nilai.' . $id] = 'required|numeric';
            }
        }

        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('biaya-jasa/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        foreach ($jenis_biaya_jasa as $key => $value) {
            $biaya_jasa                   = new BiayaJasa;
            $biaya_jasa->jenis_biaya_jasa = $key;
            $biaya_jasa->satuan           = $request->get('satuan')[$key];
            $biaya_jasa->jumlah_jasa      = $request->get('jumlah_jasa')[$key];
            $biaya_jasa->harga_jasa       = $request->get('harga_jasa')[$key];
            $biaya_jasa->total_nilai      = $request->get('total_nilai')[$key];
            $biaya_jasa->id_responden     = $request->session()->get('id_responden');
           
            if ($key == 7)
            {
                $biaya_jasa->jenis_biaya_jasa_lain = $request->get('jenis_biaya_jasa_lain');
            }

            $biaya_jasa->save();
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
