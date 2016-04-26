<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MasterJenisAlatTangkap;
use App\AlatTangkap;
use Validator;

class AlatTangkapController extends Controller
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
        return view('alat_tangkap.form', [
            'subtitle'                  => 'Alat Tangkap',
            'action'                    => 'alat-tangkap/tambah',
            'master_status_kepemilikan' => [
                    1 => 'Sendiri', 
                    2 => 'Juragan', 
                    3 => 'Kelompok', 
                    4 => 'Sewa'
                ],
            'master_kondisi' => [
                    1 => 'Baru',
                    2 => 'Bekas', 
                ],
            'master_sumber_modal' => [
                    1 => 'Modal sendiri',
                    2 => 'Kredit formal', 
                    3 => 'Kredit informal',
                    4 => 'Bantuan pemerintah',
                    5 => 'Keluarga',
                    6 => 'Campuran',
            ],
            'plagis_kecil' => MasterJenisAlatTangkap::where('kateg_jenis_alat_tangkap', 1)->get(),
            'plagis_besar' => MasterJenisAlatTangkap::where('kateg_jenis_alat_tangkap', 2)->get(),
            'demersal'     => MasterJenisAlatTangkap::where('kateg_jenis_alat_tangkap', 3)->get(),
            'nomor'        => 1
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
        $rules = [];

        $master_jenis_alat_tangkap = MasterJenisAlatTangkap::select('id_master_jenis_alat_tangkap', 'is_freetext')->get();

        foreach($master_jenis_alat_tangkap as $index => $item)
        {
            // Validate input jumlah_alat, if jenis_alat_tangkap lain is filled
            if ($item->is_freetext)
            {
                if($request->get('jenis_alat_tangkap_lain')[$item->id_master_jenis_alat_tangkap])
                {
                    $rules['jumlah_alat_tangkap.' . $item->id_master_jenis_alat_tangkap]   = 'required|numeric';
                    $rules['waktu_penggunaan_alat.' . $item->id_master_jenis_alat_tangkap] = 'required|numeric';
                    $rules['kondisi_alat.' . $item->id_master_jenis_alat_tangkap]          = 'required';
                    $rules['harga_beli_alat.' . $item->id_master_jenis_alat_tangkap]       = 'required|numeric';
                    $rules['spesifikasi_alat.' . $item->id_master_jenis_alat_tangkap]      = 'required';                   
                    $rules['kondisi_alat.' . $item->id_master_jenis_alat_tangkap]          = 'required';
                    $rules['harga_beli_alat.' . $item->id_master_jenis_alat_tangkap]       = 'required|numeric';
                    $rules['umur_ekonomis_alat.' . $item->id_master_jenis_alat_tangkap]    = 'required|numeric';
                    $rules['sumber_modal_alat.' . $item->id_master_jenis_alat_tangkap]     = 'required';                   
                }
            }

            // Validate peralatan lain
            else
            {
                if ($request->get('jumlah_alat_tangkap')[$item->id_master_jenis_alat_tangkap])
                {
                    $rules['jumlah_alat_tangkap.' . $item->id_master_jenis_alat_tangkap]   = 'numeric';
                    $rules['waktu_penggunaan_alat.' . $item->id_master_jenis_alat_tangkap] = 'required|numeric';
                    $rules['kondisi_alat.' . $item->id_master_jenis_alat_tangkap]          = 'required';
                    $rules['harga_beli_alat.' . $item->id_master_jenis_alat_tangkap]       = 'required|numeric';
                    $rules['spesifikasi_alat.' . $item->id_master_jenis_alat_tangkap]      = 'required';                   
                    $rules['kondisi_alat.' . $item->id_master_jenis_alat_tangkap]          = 'required';
                    $rules['harga_beli_alat.' . $item->id_master_jenis_alat_tangkap]       = 'required|numeric';
                    $rules['umur_ekonomis_alat.' . $item->id_master_jenis_alat_tangkap]    = 'required|numeric';
                    $rules['sumber_modal_alat.' . $item->id_master_jenis_alat_tangkap]     = 'required';                   
                }
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('alat-tangkap/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save alat tangkap
        foreach($master_jenis_alat_tangkap as $index => $item)
        {
            $jenis_alat_tangkap                     = new AlatTangkap;
            $jenis_alat_tangkap->id_responden       = $request->session()->get('id_responden');
            $jenis_alat_tangkap->jenis_alat_tangkap = $item->id_master_jenis_alat_tangkap;
            
            if ($item->is_freetext)
            {
                $jenis_alat_tangkap->jenis_alat_tangkap_lain = $request->get('jenis_alat_tangkap_lain')[$item->id_master_jenis_alat_tangkap];
            }

            $jenis_alat_tangkap->waktu_penggunaan_alat   = $request->get('waktu_penggunaan_alat')[$item->id_master_jenis_alat_tangkap];
            $jenis_alat_tangkap->status_kepemilikan_alat = $request->get('status_kepemilikan_alat')[$item->id_master_jenis_alat_tangkap];
            $jenis_alat_tangkap->jumlah_alat_tangkap     = $request->get('jumlah_alat_tangkap')[$item->id_master_jenis_alat_tangkap];
            $jenis_alat_tangkap->spesifikasi_alat        = $request->get('spesifikasi_alat')[$item->id_master_jenis_alat_tangkap];
            $jenis_alat_tangkap->kondisi_alat            = $request->get('kondisi_alat')[$item->id_master_jenis_alat_tangkap];
            $jenis_alat_tangkap->umur_ekonomis_alat      = $request->get('umur_ekonomis_alat')[$item->id_master_jenis_alat_tangkap];
            $jenis_alat_tangkap->harga_beli_alat         = $request->get('harga_beli_alat')[$item->id_master_jenis_alat_tangkap];
            $jenis_alat_tangkap->sumber_modal_alat       = $request->get('sumber_modal_alat')[$item->id_master_jenis_alat_tangkap];
            
            $jenis_alat_tangkap->save();
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
