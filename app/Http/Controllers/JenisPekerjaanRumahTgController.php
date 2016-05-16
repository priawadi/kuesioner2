<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MasterJenisPekerjaan;
use App\JenisPekerjaanRumahTg;
use Validator;

class JenisPekerjaanRumahTgController extends Controller
{
    var $status_keluarga = [
        1 => 'Kepala Keluarga', 
        2 => 'Istri', 
        3 => 'Anak', 
        4 => 'Anggota Rumah Tangga Lainnya'
    ];

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
            'subtitle'        => 'Jenis Pekerjaan Rumah Tangga',
            'action'          => 'jenis-pekerjaan-rumah-tangga/tambah',
            'method'          => 'post',
            'status_keluarga' => $this->status_keluarga,
            'jml_isian'       => 8,
            'jenis_pekerjaan' => $jenis_pekerjaan
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

        // Save data
        for ($i = 1; $i <= $jml_isian; $i++)
        {
            // Save karakteristik rumah tangga
            $jenis_pekerjaan_rumahtg                  = new JenisPekerjaanRumahTg;
            $jenis_pekerjaan_rumahtg->nama            = $request->input('nama.' . $i, null);
            $jenis_pekerjaan_rumahtg->id_responden    = $request->session()->get('id_responden');
            $jenis_pekerjaan_rumahtg->status_keluarga = $request->input('status_keluarga.' . $i, null);
            
            if ($request->input('status_keluarga.' . $i) == 4)
            {
                $jenis_pekerjaan_rumahtg->status_keluarga_lain = $request->input('status_keluarga_lain.' . $i, null);
            }
            else
            {
                $jenis_pekerjaan_rumahtg->status_keluarga_lain = null;   
            }
            
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan1 = $request->input('jenis_pekerjaan1.' . $i, null);
            $jenis_pekerjaan_rumahtg->pendapatan1      = $request->input('pendapatan1.' . $i, null);
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan2 = $request->input('jenis_pekerjaan2.' . $i, null);
            $jenis_pekerjaan_rumahtg->pendapatan2      = $request->input('pendapatan2.' . $i, null);
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan3 = $request->input('jenis_pekerjaan3.' . $i, null);
            $jenis_pekerjaan_rumahtg->pendapatan3      = $request->input('pendapatan3.' . $i, null);
            
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
    public function edit($id, Request $request)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');
        
        // Init
        $jenis_pekerjaan = [];
        foreach (MasterJenisPekerjaan::all() as $key => $item) {
            $jenis_pekerjaan[$item->id_master_jenis_pekerjaan] = $item->jenis_pekerjaan;
        }

        return view('jenis_pekerjaan_rumah_tangga.edit', [
            'subtitle'        => 'Jenis Pekerjaan Rumah Tangga',
            'action'          => 'jenis-pekerjaan-rumah-tangga/edit/' . $id,
            'method'          => 'patch',
            'status_keluarga' => $this->status_keluarga,
            'jml_isian'       => 8,
            'jenis_pekerjaan' => $jenis_pekerjaan,

            // Data
            'pekerjaan_anggota' => JenisPekerjaanRumahTg::where('id_responden', $id)->get(),
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
        foreach ($request->input('nama') as $id_jenis_pekerjaan_rumahtg => $value)
        {
            // Save karakteristik rumah tangga
            $jenis_pekerjaan_rumahtg                  = JenisPekerjaanRumahTg::find($id_jenis_pekerjaan_rumahtg);
            $jenis_pekerjaan_rumahtg->nama            = $request->input('nama.' . $id_jenis_pekerjaan_rumahtg, null);
            $jenis_pekerjaan_rumahtg->status_keluarga = $request->input('status_keluarga.' . $id_jenis_pekerjaan_rumahtg, null);
            
            if ($request->input('status_keluarga.' . $id_jenis_pekerjaan_rumahtg) == 4)
            {
                $jenis_pekerjaan_rumahtg->status_keluarga_lain = $request->input('status_keluarga_lain.' . $id_jenis_pekerjaan_rumahtg, null);
            } 
            else 
            {
                $jenis_pekerjaan_rumahtg->status_keluarga_lain = null;  
            }
            
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan1 = $request->input('jenis_pekerjaan1.' . $id_jenis_pekerjaan_rumahtg, null);
            $jenis_pekerjaan_rumahtg->pendapatan1      = $request->input('pendapatan1.' . $id_jenis_pekerjaan_rumahtg, null);
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan2 = $request->input('jenis_pekerjaan2.' . $id_jenis_pekerjaan_rumahtg, null);
            $jenis_pekerjaan_rumahtg->pendapatan2      = $request->input('pendapatan2.' . $id_jenis_pekerjaan_rumahtg, null);
            $jenis_pekerjaan_rumahtg->jenis_pekerjaan3 = $request->input('jenis_pekerjaan3.' . $id_jenis_pekerjaan_rumahtg, null);
            $jenis_pekerjaan_rumahtg->pendapatan3      = $request->input('pendapatan3.' . $id_jenis_pekerjaan_rumahtg, null);
            
            $jenis_pekerjaan_rumahtg->save();
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
        JenisPekerjaanRumahTg::where('id_responden', $id)->delete();
        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
