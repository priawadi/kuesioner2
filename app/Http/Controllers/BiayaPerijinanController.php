<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BiayaPerijinan;
use Validator;

class BiayaPerijinanController extends Controller
{

    var $jenis_biaya_tetap = 
    [
        1 => 'Ijin Usaha / Ijin Penangkapan, Retribusi, Pajak',
        2 => 'Pemeliharaan / Perbaikan Perahu (pengecatan, ganti kayu, dll)',
        3 => 'Pemeliharaan / Perbaikan Mesin (ganti oli)',
        4 => 'Pemeliharaan / Perbaikan Alat Tangkap',
        5 => 'Docking Kapal',
        6 => 'Lainnya'
    ];
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
        
        return view('biaya_perijinan.form', [
            'subtitle'        => 'Biaya Tetap',
            'action'          => 'biaya-perijinan/tambah',
            'method'          => 'post',
            'jenis_perijinan' => $this->jenis_biaya_tetap,
            'nomor'           => 1
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
        
        // Save data
        foreach ($request->input('frek_satuan') as $id_jenis_biaya_tetap => $value) {
            $biaya_perijinan                        = new BiayaPerijinan;
            $biaya_perijinan->id_responden          = $request->session()->get('id_responden');
            $biaya_perijinan->jenis_biaya_perijinan = $id_jenis_biaya_tetap;
            $biaya_perijinan->frek_satuan           = $request->input('frek_satuan.' . $id_jenis_biaya_tetap);
            $biaya_perijinan->harga_satuan          = $request->input('harga_satuan.' . $id_jenis_biaya_tetap);
            $biaya_perijinan->total_biaya           = $request->input('total_biaya.' . $id_jenis_biaya_tetap);

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
    public function edit($id, Request $request)
    {

        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');
        
        $biaya_tetap = [];
        foreach (BiayaPerijinan::where('id_responden', $request->session()->get('id_responden'))->get() as $index => $item) {
            $biaya_tetap[$item->jenis_biaya_perijinan] = [
                'id_biaya_perijinan' => $item->id_biaya_perijinan,
                'frek_satuan'        => $item->frek_satuan,
                'harga_satuan'       => $item->harga_satuan,
                'total_biaya'        => $item->total_biaya,
            ];
        }

        return view('biaya_perijinan.edit', [
            'subtitle'        => 'Biaya Tetap',
            'action'          => 'biaya-perijinan/edit/' . $request->session()->get('id_responden'),
            'method'          => 'patch',
            'jenis_perijinan' => $this->jenis_biaya_tetap,
            'nomor'           => 1,
            
            // Data
            'biaya_tetap'     => $biaya_tetap,
        ]);
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
        // Save data
        foreach ($request->input('frek_satuan') as $id_biaya_perijinan => $value) {
            $biaya_perijinan               = BiayaPerijinan::find($id_biaya_perijinan);
            $biaya_perijinan->frek_satuan  = $request->input('frek_satuan.' . $id_biaya_perijinan);
            $biaya_perijinan->harga_satuan = $request->input('harga_satuan.' . $id_biaya_perijinan);
            $biaya_perijinan->total_biaya  = $request->input('total_biaya.' . $id_biaya_perijinan);

            $biaya_perijinan->save();
        }

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        BiayaPerijinan::where('id_responden', $request->session()->get('id_responden'))->delete();
        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
