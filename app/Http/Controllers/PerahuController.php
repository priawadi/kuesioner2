<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Perahu;
use Validator;

class PerahuController extends Controller
{

    var $sumber_modal = 
    [
        1 => 'Modal Sendiri', 
        2 => 'Kredit Formal', 
        3 => 'Kredit Informal', 
        4 => 'Bantuan Pemerintah', 
        5 => 'Keluarga', 
        6 => 'Campuran',
    ];

    var $kondisi_perahu = 
    [
        1 => 'Baru', 
        2 => 'Bekas',
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
        
        return view('perahu.form', [
            'subtitle'       => '701. Jenis perahu/kapal yang digunakan',
            'action'         => 'perahu/tambah',
            'method'         => 'post',
            'kondisi_perahu' => $this->kondisi_perahu,
            'sumber_modal'   => $this->sumber_modal,
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
       
        $perahu                  = new Perahu;
        $perahu->id_responden    = $request->session()->get('id_responden');
        $perahu->panjang         = $request->input('panjang', null);
        $perahu->lebar           = $request->input('lebar', null);
        $perahu->tinggi          = $request->input('tinggi', null);
        $perahu->tonase          = $request->input('tonase', null);
        $perahu->jumlah          = $request->input('jumlah', null);
        $perahu->kondisi         = $request->input('kondisi', null);
        $perahu->tahun_pembelian = $request->input('tahun_pembelian', null);
        $perahu->harga_beli      = $request->input('harga_beli', null);
        $perahu->umur_teknis     = $request->input('umur_teknis', null);
        $perahu->sumber_modal    = $request->input('sumber_modal', null);

        $perahu->save();

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
    public function edit(Request $request, $id_responden)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');
        
        return view('perahu.edit', [
            'subtitle'       => '701. Jenis perahu/kapal yang digunakan',
            'action'         => 'perahu/edit/' . $id_responden,
            'method'         => 'patch',
            'kondisi_perahu' => $this->kondisi_perahu,
            'sumber_modal'   => $this->sumber_modal,

            // Data
            'perahu'   => Perahu::where('id_responden', $request->session()->get('id_responden'))->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $perahu                  = Perahu::where('id_responden', $request->session()->get('id_responden'))->first();
        $perahu->panjang         = $request->input('panjang', null);
        $perahu->lebar           = $request->input('lebar', null);
        $perahu->tinggi          = $request->input('tinggi', null);
        $perahu->tonase          = $request->input('tonase', null);
        $perahu->jumlah          = $request->input('jumlah', null);
        $perahu->kondisi         = $request->input('kondisi', null);
        $perahu->tahun_pembelian = $request->input('tahun_pembelian', null);
        $perahu->harga_beli      = $request->input('harga_beli', null);
        $perahu->umur_teknis     = $request->input('umur_teknis', null);
        $perahu->sumber_modal    = $request->input('sumber_modal', null);

        $perahu->save();

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
        Perahu::where('id_responden', $request->session()->get('id_responden'))->delete();
        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
