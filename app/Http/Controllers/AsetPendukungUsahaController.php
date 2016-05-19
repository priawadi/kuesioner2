<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AsetPendukungUsaha;
use App\MasterPeralatanTambahan;
use Validator;

class AsetPendukungUsahaController extends Controller
{
    var $master_status_kepemilikan = [
        1 => 'Sendiri', 
        2 => 'Juragan', 
        3 => 'Kelompok', 
        4 => 'Sewa'
    ];
    
    var $master_kondisi = [
        1 => 'Baru',
        2 => 'Bekas', 
    ];

    var $master_sumber_modal = [
        1 => 'Modal sendiri',
        2 => 'Kredit formal', 
        3 => 'Kredit informal',
        4 => 'Bantuan pemerintah',
        5 => 'Keluarga',
        6 => 'Campuran',
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
        
        $master_peralatan_tambahan = [];
        foreach (MasterPeralatanTambahan::all() as $item) {
            $master_peralatan_tambahan[$item->id_master_peralatan_tambahan] = $item->peralatan_tambahan;
        }

        return view('aset_pendukung_usaha.form', [
            'subtitle'                  => 'Aset Pendukung Usaha',
            'action'                    => 'aset-pendukung-usaha/tambah',
            'method'                    => 'post',
            'master_peralatan_tambahan' => $master_peralatan_tambahan,
            'master_status_kepemilikan' => $this->master_status_kepemilikan,
            'master_kondisi'            => $this->master_kondisi,
            'master_sumber_modal'       => $this->master_sumber_modal,
            'nomor'                     => 1
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

        $master_peralatan_tambahan = MasterPeralatanTambahan::select('id_master_peralatan_tambahan', 'peralatan_tambahan')->get();

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
    public function edit($id, Request $request)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');
        
        $master_peralatan_tambahan = [];
        foreach (MasterPeralatanTambahan::all() as $item) {
            $master_peralatan_tambahan[$item->id_master_peralatan_tambahan] = $item->peralatan_tambahan;
        }

        $aset_pendukung_usaha = [];
        foreach (AsetPendukungUsaha::where('id_responden', $request->session()->get('id_responden'))->get() as $index => $item) {
            $aset_pendukung_usaha[$item->id_peralatan_tambahan] = [
                'id_aset_pendukung_usaha' =>$item->id_aset_pendukung_usaha,
                'status_kepemilikan'      =>$item->status_kepemilikan,
                'jumlah'                  =>$item->jumlah,
                'kondisi'                 =>$item->kondisi,
                'umur_ekonomis'           =>$item->umur_ekonomis,
                'harga_beli'              =>$item->harga_beli,
                'sumber_modal'            =>$item->sumber_modal,
            ];
        }

        return view('aset_pendukung_usaha.edit', [
            'subtitle'                  => 'Aset Pendukung Usaha',
            'action'                    => 'aset-pendukung-usaha/edit/' . $request->session()->get('id_responden'),
            'method'                    => 'patch',
            'master_peralatan_tambahan' => $master_peralatan_tambahan,
            'master_status_kepemilikan' => $this->master_status_kepemilikan,
            'master_kondisi'            => $this->master_kondisi,
            'master_sumber_modal'       => $this->master_sumber_modal,
            'nomor'                     => 1,
            
            //Data
            'aset_pendukung_usaha'      => $aset_pendukung_usaha,
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
        foreach($request->input('status_kepemilikan') as $id_aset_pendukung_usaha => $item)
        {
            $aset_pendukung_usaha                     = AsetPendukungUsaha::find($id_aset_pendukung_usaha);
            $aset_pendukung_usaha->status_kepemilikan = $request->input('status_kepemilikan.' . $id_aset_pendukung_usaha, null);
            $aset_pendukung_usaha->jumlah             = $request->input('jumlah.' . $id_aset_pendukung_usaha, null);
            $aset_pendukung_usaha->kondisi            = $request->input('kondisi.' . $id_aset_pendukung_usaha, null);
            $aset_pendukung_usaha->umur_ekonomis      = $request->input('umur_ekonomis.' . $id_aset_pendukung_usaha, null);
            $aset_pendukung_usaha->harga_beli         = $request->input('harga_beli.' . $id_aset_pendukung_usaha, null);
            $aset_pendukung_usaha->sumber_modal       = $request->input('sumber_modal.' . $id_aset_pendukung_usaha, null);
            
            $aset_pendukung_usaha->save();
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
        AsetPendukungUsaha::where('id_responden', $request->session()->get('id_responden'))->delete();
        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
