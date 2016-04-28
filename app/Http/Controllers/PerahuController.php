<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Perahu;
use Validator;

class PerahuController extends Controller
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
        
        return view('perahu.form', [
            'subtitle'           => 'Perahu',
            'action'             => 'perahu/tambah',
            'armada_dimiliki'    => [1 => 'Perahu 1', 2 => 'Perahu 2', 3 => 'Perahu 3', 4 => 'Perahu 4'],
            'jenis_armada'       => [1 => 'Tanpa Motor', 2 => 'Motor Tempel', 3 => 'Perahu Motor'],
            'status_kepemilikan' => [1 => 'Sendiri', 2 => 'Juragan', 3 => 'Kelompok', 4 => 'Sewa'],
            'kondisi'            => [1 => 'Baru', 2 => 'Bekas'],
            'sumber_modal'       => [1 => 'Modal Sendiri', 2 => 'Kredit Formal', 3 => 'Kredit Informal', 4 => 'Bantuan Pemerintah', 5 => 'Keluarga', 6 => 'Campuran'],
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
        $jenis_armada = [1 => 'Perahu 1', 2 => 'Perahu 2', 3 => 'Perahu 3', 4 => 'Perahu 4'];

        foreach ($jenis_armada as $id => $value) 
        {
            if ($request->get('jenis_armada')[$id])
            {
                $rules['ukuran_tonase.' . $id]      = 'required|numeric';
                $rules['status_kepemilikan.' . $id] = 'required';
                $rules['tahun_pembelian.' . $id]    = 'required|numeric';
                $rules['kondisi.' . $id]            = 'required';
                $rules['harga_beli.' . $id]         = 'required|numeric';
                $rules['umur_ekonomis.' . $id]      = 'required|numeric';
                $rules['sumber_modal.' . $id]       = 'required';
            }
        }
        
        // Validate input
        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return redirect('perahu/tambah')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // Save data
        foreach ($jenis_armada as $id_perahu => $value) 
        {
            $perahu                     = new Perahu;
            $perahu->id_responden       = $request->session()->get('id_responden');
            $perahu->armada_dimiliki    = $id_perahu;
            $perahu->jenis_armada       = $request->get('jenis_armada')[$id_perahu];
            $perahu->ukuran_tonase      = $request->get('ukuran_tonase')[$id_perahu];
            $perahu->status_kepemilikan = $request->get('status_kepemilikan')[$id_perahu];
            $perahu->tahun_pembelian    = $request->get('tahun_pembelian')[$id_perahu];
            $perahu->kondisi            = $request->get('kondisi')[$id_perahu];
            $perahu->harga_beli         = $request->get('harga_beli')[$id_perahu];
            $perahu->umur_ekonomis      = $request->get('umur_ekonomis')[$id_perahu];
            $perahu->sumber_modal       = $request->get('sumber_modal')[$id_perahu];

            $perahu->save();
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
