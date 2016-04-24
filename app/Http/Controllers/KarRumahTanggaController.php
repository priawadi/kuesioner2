<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\KarakteristikRumahTangga;
use App\PendidikanFormal;
use App\PendidikanInformal;
use Validator;

class KarRumahTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Init
        $pendidikan_formal = [];
        foreach (PendidikanFormal::all() as $key => $item) {
            $pendidikan_formal[$item->id_pendidikan_formal] = $item->pendidikan_formal;
        }

        return view('karakteristik_rumah_tangga.form', [
            'subtitle'         => 'Karakteristik Anggota Rumah Tangga dan Pendatapan',
            'action'           => 'karakteristik-rumah-tangga',
            'jenis_kelamin'    => [ 1 => 'Pria', 2 => 'Wanita'],
            'status_keluarga'  => [ 1 => 'Kepala Keluarga', 2 => 'Istri', 3 => 'Anak', 4 => 'Anggota Rumah Tangga Lainnya (Sebutkan)'],
            'pend_formal'      => $pendidikan_formal,
            'sumber_pelatihan' => [ 1 => 'Program Pemerintah', 2 => 'Program LSM', 3 => 'Biaya Sendiri'],
            'tujuan_pelatihan' => [ 1 => 'Kebutuhan Pekerjaan', 2 => 'Karena Hobi', 3 => 'Lainnya (Sebutkan)'],
            'jml_isian'        => 10
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $jml_isian = 10;
        $rules     = [];

        // Validate input if choose other option
        for ($i = 1; $i <= $jml_isian; $i++)
        {
            // if name not null, validate other input
            if ($request->get('nama')[$i])
            {   
                $rules['nama.' . $i]            = 'max:300';
                $rules['status_keluarga.' . $i] = 'required';

                // Validate if input status keluarga is Other
                if ($request->get('status_keluarga')[$i] == 4)
                {
                    $rules['status_keluarga_lain.' . $i] = 'required|max:100';
                }

                $rules['jenis_kelamin.' . $i]        = 'required';
                $rules['umur.' . $i]                 = 'required|numeric';
                $rules['pend_formal.' . $i]          = 'required';

                // Validate if input pelatihan is filled
                if ($request->get('jenis_pelatihan')[$i])
                {
                    $rules['waktu_pelaksanaan.' . $i] = 'required|numeric';
                    $rules['sumber_dana.' . $i]       = 'required';
                    $rules['tujuan_pelatihan.' . $i]  = 'required';

                    if ($request->get('tujuan_pelatihan')[$i] == 3)
                    {
                        $rules['tujuan_pelatihan_lain.' . $i] = 'required|max:500';
                    }
                }
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('jenis-pekerjaan-rumah-tangga')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        for ($i = 1; $i <= $jml_isian; $i++)
        {
            
            // Save karakteristik rumah tangga
            $kar_rumahtangga                  = new KarakteristikRumahTangga;
            $kar_rumahtangga->nama            = $request->get('nama')[$i];
            $kar_rumahtangga->status_keluarga = $request->get('status_keluarga')[$i];
            
            if ($request->get('status_keluarga')[$i] == 4)
            {
                $kar_rumahtangga->status_keluarga_lain = $request->get('status_keluarga_lain')[$i];
            }
            
            $kar_rumahtangga->jenis_kelamin        = $request->get('jenis_kelamin')[$i];
            $kar_rumahtangga->umur                 = $request->get('umur')[$i];
            $kar_rumahtangga->id_responden         = $request->session()->get('id_responden');
            $kar_rumahtangga->id_pendidikan_formal = $request->get('pend_formal')[$i];;
            $kar_rumahtangga->save();
            
            // Save pendidikan informal
            $pend_informal   = new PendidikanInformal;
            if ($request->get('jenis_pelatihan')[$i])
            {
                $pend_informal                      = new PendidikanInformal;
                $pend_informal->id_kar_rumah_tangga = $kar_rumahtangga->id_kar_rumah_tangga;
                $pend_informal->jenis_pelatihan     = $request->get('jenis_pelatihan')[$i];
                $pend_informal->waktu_pelaksanaan   = $request->get('waktu_pelaksanaan')[$i];
                $pend_informal->sumber_dana         = $request->get('sumber_dana')[$i];
                $pend_informal->tujuan_pelatihan    = $request->get('tujuan_pelatihan')[$i];
                
                if ($request->get('tujuan_pelatihan')[$i] == 3)
                {
                    $pend_informal->tujuan_pelatihan_lain = $request->get('tujuan_pelatihan_lain')[$i];
                }

                $pend_informal->save();
            }

        }

        return view('home');
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