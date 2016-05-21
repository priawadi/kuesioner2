<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MasterJenisAset;
use App\AsetRumahTangga;
use Validator;

class AsetRumahTanggaController extends Controller
{

    var $cara_perolehan = [
        1 => 'Beli', 
        2 => 'Warisan', 
        3 => 'Pemberian'
    ];

    var $jenis_aset = [
        1 => 'Produktif', 
        2 => 'Tidak Produktif'
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
        
        return view('aset_rumah_tangga.form', [
            'subtitle'          => 'Aset Rumah Tangga',
            'action'            => 'aset-rumah-tangga/tambah',
            'method'            => 'post',
            'master_jenis_aset' => MasterJenisAset::all(),
            'cara_perolehan'    => $this->cara_perolehan,
            'jenis_aset'        => $this->jenis_aset,
            'nomor'             => 501
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
        $master_jenis_aset = MasterJenisAset::select('id_master_jenis_aset', 'parent')->get();

        // Save data
        foreach($master_jenis_aset as $key => $item)
        {
            if (!$item->parent)
            {
                $aset_rumah_tangga                       = new AsetRumahTangga;
                $aset_rumah_tangga->id_responden         = $request->session()->get('id_responden');
                $aset_rumah_tangga->id_master_jenis_aset = $item->id_master_jenis_aset;
                $aset_rumah_tangga->volume               = $request->input('volume.' . $item->id_master_jenis_aset, null);
                $aset_rumah_tangga->nilai_satuan         = $request->input('nilai_satuan.' . $item->id_master_jenis_aset, null);
                $aset_rumah_tangga->nilai_total          = $request->input('nilai_total.' . $item->id_master_jenis_aset, null);
                $aset_rumah_tangga->cara_perolehan       = $request->input('cara_perolehan.' . $item->id_master_jenis_aset, null);
                $aset_rumah_tangga->jenis_aset           = $request->input('jenis_aset.' . $item->id_master_jenis_aset, null);
                $aset_rumah_tangga->pendapatan_produktif = $request->input('pendapatan_produktif.' . $item->id_master_jenis_aset, null);
                $aset_rumah_tangga->save();
            }
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
        $aset_rumah_tangga = [];
        foreach (AsetRumahTangga::where('id_responden', $id)->get() as $index => $item) {
            $aset_rumah_tangga[$item->id_master_jenis_aset] = [
                'id_aset_rumah_tangga' => $item->id_aset_rumah_tangga,
                'volume'               => $item->volume,
                'nilai_satuan'         => $item->nilai_satuan,
                'nilai_total'          => $item->nilai_total,
                'cara_perolehan'       => $item->cara_perolehan,
                'jenis_aset'           => $item->jenis_aset,
                'pendapatan_produktif' => $item->pendapatan_produktif,
            ];
        }


        return view('aset_rumah_tangga.edit', [
            'subtitle'          => 'Aset Rumah Tangga',
            'action'            => 'aset-rumah-tangga/edit/' . $id,
            'method'            => 'patch',
            'master_jenis_aset' => MasterJenisAset::all(),
            'cara_perolehan'    => $this->cara_perolehan,
            'jenis_aset'        => $this->jenis_aset,
            'nomor'             => 1,

            // Data
            'aset_rumah_tangga' => $aset_rumah_tangga,
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
        foreach($request->input('volume') as $id_aset_rumah_tangga => $value)
        {
            $aset_rumah_tangga                       = AsetRumahTangga::find($id_aset_rumah_tangga);
            $aset_rumah_tangga->volume               = $request->input('volume.' . $id_aset_rumah_tangga, null);
            $aset_rumah_tangga->nilai_satuan         = $request->input('nilai_satuan.' . $id_aset_rumah_tangga, null);
            $aset_rumah_tangga->nilai_total          = $request->input('nilai_total.' . $id_aset_rumah_tangga, null);
            $aset_rumah_tangga->cara_perolehan       = $request->input('cara_perolehan.' . $id_aset_rumah_tangga, null);
            $aset_rumah_tangga->jenis_aset           = $request->input('jenis_aset.' . $id_aset_rumah_tangga, null);
            $aset_rumah_tangga->pendapatan_produktif = $request->input('pendapatan_produktif.' . $id_aset_rumah_tangga, null);
            $aset_rumah_tangga->save();
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
        AsetRumahTangga::where('id_responden', $id)->delete();

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
