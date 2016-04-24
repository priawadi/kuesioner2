<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MasterJenisAset;
use App\AsetRumahTangga;
use Validator;

class AsetRumahTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('aset_rumah_tangga.form', [
            'subtitle'          => 'Aset Rumah Tangga',
            'action'            => 'aset-rumah-tangga/tambah',
            'master_jenis_aset' => MasterJenisAset::all(),
            'cara_perolehan'    => [1 => 'Beli', 2 => 'Warisan', 3 => 'Pemberian'],
            'jenis_aset'        => [1 => 'Produktif', 2 => 'Tidak Produktif'],
            'nomor'             => 1
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
        $master_jenis_aset = MasterJenisAset::select('id_master_jenis_aset', 'parent')->get();

        // Get ids of pertanyaan
        foreach($master_jenis_aset as $key => $item)
        {                   
            // Validate non parent input
            if (!$item->parent)
            {
                // Validate if an input is filled
                if (
                    $request->get('volume')[$item->id_master_jenis_aset] ||
                    $request->get('nilai_satuan')[$item->id_master_jenis_aset] ||
                    $request->get('nilai_total')[$item->id_master_jenis_aset] ||
                    $request->get('cara_perolehan')[$item->id_master_jenis_aset] ||
                    $request->get('jenis_aset')[$item->id_master_jenis_aset] ||
                    $request->get('pendapatan_produktif')[$item->id_master_jenis_aset]
                    )
                {
                    $rules['volume.' . $item->id_master_jenis_aset]               = 'required|numeric';
                    $rules['nilai_satuan.' . $item->id_master_jenis_aset]         = 'required|numeric';
                    $rules['nilai_total.' . $item->id_master_jenis_aset]          = 'required|numeric';
                    $rules['cara_perolehan.' . $item->id_master_jenis_aset]       = 'required';
                    $rules['jenis_aset.' . $item->id_master_jenis_aset]           = 'required';
                    $rules['pendapatan_produktif.' . $item->id_master_jenis_aset] = 'required|numeric';
                }

            }

        }

        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('aset-rumah-tangga')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        foreach($master_jenis_aset as $key => $item)
        {
            if (!$item->parent)
            {
                $aset_rumah_tangga                     = new AsetRumahTangga;
                $aset_rumah_tangga->id_responden       = 1;
                $aset_rumah_tangga->id_master_jenis_aset = $item->id_master_jenis_aset;
                $aset_rumah_tangga->volume               = $request->get('volume')[$item->id_master_jenis_aset];
                $aset_rumah_tangga->nilai_satuan         = $request->get('nilai_satuan')[$item->id_master_jenis_aset];
                $aset_rumah_tangga->nilai_total          = $request->get('nilai_total')[$item->id_master_jenis_aset];
                $aset_rumah_tangga->cara_perolehan       = $request->get('cara_perolehan')[$item->id_master_jenis_aset];
                $aset_rumah_tangga->jenis_aset           = $request->get('jenis_aset')[$item->id_master_jenis_aset];
                $aset_rumah_tangga->pendapatan_produktif = $request->get('pendapatan_produktif')[$item->id_master_jenis_aset];
                $aset_rumah_tangga->save();
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
