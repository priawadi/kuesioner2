<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AsetPendukungUsaha;
use App\MasterPeralatanTambahan;
use Validator;

class AsetPendukungUsahaController extends Controller
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
    public function create()
    {
        $master_peralatan_tambahan = [];
        foreach (MasterPeralatanTambahan::all() as $item) {
            $master_peralatan_tambahan[$item->id_master_peralatan_tambahan] = $item->peralatan_tambahan;
        }

        return view('aset_pendukung_usaha.form', [
            'subtitle'                  => 'Aset Pendukung Usaha',
            'action'                    => 'aset-pendukung-usaha/tambah',
            'master_peralatan_tambahan' => $master_peralatan_tambahan,
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
        // Init 
        $rules = [];

        $master_peralatan_tambahan = MasterPeralatanTambahan::select('id_master_peralatan_tambahan', 'peralatan_tambahan')->get();

        foreach($master_peralatan_tambahan as $key => $item)
        {
            // Validate peralatan tambahan, if peralatan_tambahan_lain is filled
            if ($item->id_master_peralatan_tambahan > 8)
            {
                if($request->get('peralatan_tambahan_lain')[$item->id_master_peralatan_tambahan])
                {
                    $rules['status_kepemilikan.' . $item->id_master_peralatan_tambahan] = 'required';
                    $rules['jumlah.' . $item->id_master_peralatan_tambahan]             = 'required|numeric';
                    $rules['kondisi.' . $item->id_master_peralatan_tambahan]            = 'required';
                    $rules['umur_ekonomis.' . $item->id_master_peralatan_tambahan]      = 'required|numeric';
                    $rules['harga_beli.' . $item->id_master_peralatan_tambahan]         = 'required|numeric';
                    $rules['sumber_modal.' . $item->id_master_peralatan_tambahan]       = 'required';                   
                }
            }

            // Validate peralatan lain
            else if ($item->id_master_peralatan_tambahan > 0 && $item->id_master_peralatan_tambahan < 9)
            {
                if ($request->get('status_kepemilikan')[$item->id_master_peralatan_tambahan])
                {
                    $rules['jumlah.' . $item->id_master_peralatan_tambahan]        = 'required|numeric';
                    $rules['kondisi.' . $item->id_master_peralatan_tambahan]       = 'required';
                    $rules['umur_ekonomis.' . $item->id_master_peralatan_tambahan] = 'required|numeric';
                    $rules['harga_beli.' . $item->id_master_peralatan_tambahan]    = 'required|numeric';
                    $rules['sumber_modal.' . $item->id_master_peralatan_tambahan]  = 'required';
                    
                }
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('aset-pendukung-usaha/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save aset pendukung usaha
        foreach($master_peralatan_tambahan as $key => $item)
        {
            $aset_pendukung_usaha                        = new AsetPendukungUsaha;
            $aset_pendukung_usaha->id_responden          = $request->session()->get('id_responden');
            $aset_pendukung_usaha->id_peralatan_tambahan = $item->id_master_peralatan_tambahan;
            $aset_pendukung_usaha->status_kepemilikan    = $request->get('status_kepemilikan')[$item->id_master_peralatan_tambahan];
            $aset_pendukung_usaha->jumlah                = $request->get('jumlah')[$item->id_master_peralatan_tambahan];
            $aset_pendukung_usaha->kondisi               = $request->get('kondisi')[$item->id_master_peralatan_tambahan];
            $aset_pendukung_usaha->umur_ekonomis         = $request->get('umur_ekonomis')[$item->id_master_peralatan_tambahan];
            $aset_pendukung_usaha->harga_beli            = $request->get('harga_beli')[$item->id_master_peralatan_tambahan];
            $aset_pendukung_usaha->sumber_modal          = $request->get('sumber_modal')[$item->id_master_peralatan_tambahan];
            
            if ($item->id_master_peralatan_tambahan > 8)
            {
                $aset_pendukung_usaha->peralatan_tambahan_lain = $request->get('peralatan_tambahan_lain')[$item->id_master_peralatan_tambahan];
            }
            
            $aset_pendukung_usaha->save();
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
