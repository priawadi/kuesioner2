<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\KarakteristikRumahTangga;
use Validator;

class KarRumahTanggaController extends Controller
{
    var $jenis_kelamin = [ 
        1 => 'Pria', 
        2 => 'Wanita'
    ];

    var $status_keluarga = [ 
        1 => 'Kepala Keluarga', 
        2 => 'Istri', 
        3 => 'Anak', 
        4 => 'Anggota Rumah Tangga Lainnya'
    ];

    var $sumber_pelatihan = [
        1 => 'Program Pemerintah', 
        2 => 'Program LSM', 
        3 => 'Biaya Sendiri'
    ];

    var $tujuan_pelatihan = [ 
        1 => 'Kebutuhan Pekerjaan', 
        2 => 'Materi Menarik', 
        3 => 'Lainnya'
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

        return view('karakteristik_rumah_tangga.form', [
            'subtitle'         => 'III. KARAKTERISTIK ANGGOTA RUMAH TANGGA',
            'action'           => 'karakteristik-rumah-tangga/tambah',
            'method'           => 'post',
            'jenis_kelamin'    => $this->jenis_kelamin,
            'status_keluarga'  => $this->status_keluarga,
            'sumber_pelatihan' => $this->sumber_pelatihan,
            'tujuan_pelatihan' => $this->tujuan_pelatihan,
            'jml_isian'        => 10
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
        $jml_isian = 10;
        $rules     = [];

        // Validate input if choose other option
        // for ($i = 1; $i <= $jml_isian; $i++)
        // {
        //     // if name not null, validate other input
        //     if ($request->get('nama')[$i])
        //     {   
        //         $rules['nama.' . $i]            = 'max:300';
        //         $rules['status_keluarga.' . $i] = 'required';

        //         // Validate if input status keluarga is Other
        //         if ($request->get('status_keluarga')[$i] == 4)
        //         {
        //             $rules['status_keluarga_lain.' . $i] = 'required|max:100';
        //         }

        //         $rules['jenis_kelamin.' . $i]        = 'required';
        //         $rules['umur.' . $i]                 = 'required|numeric';
        //         $rules['pend_formal.' . $i]          = 'required';

        //         // Validate if input pelatihan is filled
        //         if ($request->get('jenis_pelatihan')[$i])
        //         {
        //             $rules['waktu_pelaksanaan.' . $i] = 'required|numeric';
        //             $rules['sumber_dana.' . $i]       = 'required';
        //             $rules['tujuan_pelatihan.' . $i]  = 'required';

        //             if ($request->get('tujuan_pelatihan')[$i] == 3)
        //             {
        //                 $rules['tujuan_pelatihan_lain.' . $i] = 'required|max:500';
        //             }
        //         }
        //     }
        // }
        
        // // Validate input
        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return redirect('karakteristik-rumah-tangga/tambah')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // Save data
        for ($i = 1; $i <= $jml_isian; $i++)
        {
            
            // Save karakteristik rumah tangga
            $kar_rumahtangga                  = new KarakteristikRumahTangga;
            $kar_rumahtangga->nama            = $request->input('nama.' . $i, null);
            $kar_rumahtangga->status_keluarga = $request->input('status_keluarga.' . $i, null);
            
            if ($request->input('status_keluarga.' . $i) == 4)
            {
                $kar_rumahtangga->status_keluarga_lain = $request->input('status_keluarga_lain.' . $i, null);
            }
            
            $kar_rumahtangga->jenis_kelamin          = $request->input('jenis_kelamin.' . $i, null);
            $kar_rumahtangga->umur                   = $request->input('umur.' . $i, null);
            $kar_rumahtangga->id_responden           = $request->session()->get('id_responden');
            $kar_rumahtangga->lama_pendidikan_formal = $request->input('lama_pendidikan_formal.' . $i, null);
            $kar_rumahtangga->jenis_pelatihan        = $request->input('jenis_pelatihan.' . $i, null);
            $kar_rumahtangga->waktu_pelaksanaan      = $request->input('waktu_pelaksanaan.' . $i, null);
            $kar_rumahtangga->sumber_dana            = $request->input('sumber_dana.' . $i, null);
            $kar_rumahtangga->tujuan_pelatihan       = $request->input('tujuan_pelatihan.' . $i, null);

            if ($request->input('tujuan_pelatihan.' . $i) == 3)
            {
                $kar_rumahtangga->tujuan_pelatihan_lain = $request->input('tujuan_pelatihan_lain.' . $i, null);
            }
            
            $kar_rumahtangga->save();
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

        return view('karakteristik_rumah_tangga.edit', [
            'subtitle'         => 'III. KARAKTERISTIK ANGGOTA RUMAH TANGGA',
            'action'           => 'karakteristik-rumah-tangga/edit/' . $id,
            'method'           => 'patch',
            'jenis_kelamin'    => $this->jenis_kelamin,
            'status_keluarga'  => $this->status_keluarga,
            'sumber_pelatihan' => $this->sumber_pelatihan,
            'tujuan_pelatihan' => $this->tujuan_pelatihan,
            'jml_isian'        => 10,

            // Data
            'karakteristik_rt' => KarakteristikRumahTangga::where('id_responden', $id)->get(),
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
         // Save karakteristik rumah tangga
         foreach ($request->input('nama') as $id_kar_rumah_tangga => $value) {
            $kar_rumahtangga                  = KarakteristikRumahTangga::find($id_kar_rumah_tangga);
            $kar_rumahtangga->nama            = $request->input('nama.' . $id_kar_rumah_tangga, null);
            $kar_rumahtangga->status_keluarga = $request->input('status_keluarga.' . $id_kar_rumah_tangga, null);
            
            if ($request->input('status_keluarga.' . $id_kar_rumah_tangga) == 4)
            {
                $kar_rumahtangga->status_keluarga_lain = $request->input('status_keluarga_lain.' . $id_kar_rumah_tangga, null);
            }
            else 
            {
                $kar_rumahtangga->status_keluarga_lain = null;
            }
            
            $kar_rumahtangga->jenis_kelamin          = $request->input('jenis_kelamin.' . $id_kar_rumah_tangga, null);
            $kar_rumahtangga->umur                   = $request->input('umur.' . $id_kar_rumah_tangga, null);
            $kar_rumahtangga->lama_pendidikan_formal = $request->input('lama_pendidikan_formal.' . $id_kar_rumah_tangga, null);
            $kar_rumahtangga->jenis_pelatihan        = $request->input('jenis_pelatihan.' . $id_kar_rumah_tangga, null);
            $kar_rumahtangga->waktu_pelaksanaan      = $request->input('waktu_pelaksanaan.' . $id_kar_rumah_tangga, null);
            $kar_rumahtangga->sumber_dana            = $request->input('sumber_dana.' . $id_kar_rumah_tangga, null);
            $kar_rumahtangga->tujuan_pelatihan       = $request->input('tujuan_pelatihan.' . $id_kar_rumah_tangga, null);

            if ($request->input('tujuan_pelatihan.' . $id_kar_rumah_tangga) == 3)
            {
                $kar_rumahtangga->tujuan_pelatihan_lain = $request->input('tujuan_pelatihan_lain.' . $id_kar_rumah_tangga, null);
            }
            else
            {
                $kar_rumahtangga->tujuan_pelatihan_lain = null;
            }
            
            $kar_rumahtangga->save();
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
        KarakteristikRumahTangga::where('id_responden', $id)->delete();

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
