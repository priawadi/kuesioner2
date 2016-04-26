<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MasterJenisPekerjaan;
use App\JenisPekerjaanRumahTg;
use Validator;

class JenisPekerjaanRumahTgController extends Controller
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
        
        // Init
        $jenis_pekerjaan = [];
        foreach (MasterJenisPekerjaan::all() as $key => $item) {
            $jenis_pekerjaan[$item->id_master_jenis_pekerjaan] = $item->jenis_pekerjaan;
        }

        return view('jenis_pekerjaan_rumah_tangga.form', [
            'subtitle'         => 'Jenis Pekerjaan Rumah Tangga',
            'action'           => 'jenis-pekerjaan-rumah-tangga/tambah',
            'status_keluarga'  => [ 1 => 'Kepala Keluarga', 2 => 'Istri', 3 => 'Anak', 4 => 'Anggota Rumah Tangga Lainnya (Sebutkan)'],
            'jml_isian'        => 8,
            'jenis_pekerjaan'  => $jenis_pekerjaan
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
        // Init
        $jml_isian = 8;
        $rules     = [];

        // Validate input if choose other option
        for ($i = 1; $i <= $jml_isian; $i++)
        {
            
            if ($request->get('nama')[$i])
            {   
                $rules['nama.' . $i]            = 'max:150';
                $rules['status_keluarga.' . $i] = 'required';

                // Validate if input status keluarga is Other
                if ($request->get('status_keluarga')[$i] == 4)
                {
                    $rules['status_keluarga_lain.' . $i] = 'required|max:100';
                }

                $rules['jenis_pekerjaan1.' . $i] = 'required';

                if ($request->get('jenis_pekerjaan1')[$i] == 17)
                {
                    $rules['jenis_pekerjaan_lain1.' . $i] = 'required|max:150';
                }

                $rules['pendapatan1.' . $i]      = 'required|numeric';

                // Validate if input jenis pekerjaan2 is filled
                if ($request->get('jenis_pekerjaan2')[$i])
                {
                    if ($request->get('jenis_pekerjaan2')[$i] == 17)
                    {
                        $rules['jenis_pekerjaan_lain2.' . $i] = 'required|max:150';
                    }

                    $rules['pendapatan2.' . $i] = 'required|numeric';
                }

                // Validate if input jenis pekerjaan2 is filled
                if ($request->get('jenis_pekerjaan3')[$i])
                {
                    if ($request->get('jenis_pekerjaan3')[$i] == 17)
                    {
                        $rules['jenis_pekerjaan_lain3.' . $i] = 'required|max:150';
                    }

                    $rules['pendapatan3.' . $i] = 'required|numeric';
                }
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('jenis-pekerjaan-rumah-tangga/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        for ($i = 1; $i <= $jml_isian; $i++)
        {
            
            // Save karakteristik rumah tangga
            $jenis_pekerjaan_rumahtg                  = new JenisPekerjaanRumahTg;
            $jenis_pekerjaan_rumahtg->nama            = $request->get('nama')[$i];
            $jenis_pekerjaan_rumahtg->id_responden    = $request->session()->get('id_responden');
            $jenis_pekerjaan_rumahtg->status_keluarga = $request->get('status_keluarga')[$i];
            
            if ($request->get('status_keluarga')[$i] == 4)
            {
                $jenis_pekerjaan_rumahtg->status_keluarga_lain = $request->get('status_keluarga_lain')[$i];
            }
            
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan1 = $request->get('jenis_pekerjaan1')[$i];
            $jenis_pekerjaan_rumahtg->pendapatan1      = $request->get('pendapatan1')[$i];
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan2 = $request->get('jenis_pekerjaan2')[$i];
            $jenis_pekerjaan_rumahtg->pendapatan2      = $request->get('pendapatan2')[$i];
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan3 = $request->get('jenis_pekerjaan3')[$i];
            $jenis_pekerjaan_rumahtg->pendapatan3      = $request->get('pendapatan3')[$i];
            
            $jenis_pekerjaan_rumahtg->save();
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
