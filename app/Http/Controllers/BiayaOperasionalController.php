<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MasterBiayaVariabel;
use App\BiayaOperasional;
use Validator;

class BiayaOperasionalController extends Controller
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
        
        return view('biaya_operasional.form', [
            'subtitle'          => 'IX. BIAYA VARIABEL  BERDASARKAN MUSIM (per trip) Kode:901',
            'action'            => 'biaya-operasional/tambah',
            'method'            => 'post',
            'jenis_operasional' => MasterBiayaVariabel::where('kateg_biaya_variabel', 1)->get(),
            'nomor'             => 1
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

        // Save data
        foreach ($request->input('rataan_musim_puncak') as $id_biaya_variabel => $value) {
            $biaya_operasional                        = new BiayaOperasional;
            $biaya_operasional->id_responden          = $request->session()->get('id_responden');
            $biaya_operasional->jenis_biaya           = $id_biaya_variabel;
            $biaya_operasional->rataan_musim_puncak   = $request->input('rataan_musim_puncak.' . $id_biaya_variabel);
            $biaya_operasional->rataan_musim_sedang   = $request->input('rataan_musim_sedang.' . $id_biaya_variabel);
            $biaya_operasional->rataan_musim_paceklik = $request->input('rataan_musim_paceklik.' . $id_biaya_variabel);
            $biaya_operasional->harga_satuan_puncak   = $request->input('harga_satuan_puncak.' . $id_biaya_variabel);
            $biaya_operasional->harga_satuan_sedang   = $request->input('harga_satuan_sedang.' . $id_biaya_variabel);
            $biaya_operasional->harga_satuan_paceklik = $request->input('harga_satuan_paceklik.' . $id_biaya_variabel);

            $biaya_operasional->save();
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
        
        $biaya_variabel = [];
        foreach (BiayaOperasional::where('id_responden', $request->session()->get('id_responden'))->get() as $index => $item) {
            $biaya_variabel[$item->jenis_biaya] = [
                'id_biaya_operasional'  => $item->id_biaya_operasional,
                'rataan_musim_puncak'   => $item->rataan_musim_puncak,
                'rataan_musim_sedang'   => $item->rataan_musim_sedang,
                'rataan_musim_paceklik' => $item->rataan_musim_paceklik,
                'harga_satuan_puncak'   => $item->harga_satuan_puncak,
                'harga_satuan_sedang'   => $item->harga_satuan_sedang,
                'harga_satuan_paceklik' => $item->harga_satuan_paceklik,
            ];
        }

        return view('biaya_operasional.edit', [
            'subtitle'          => 'IX. BIAYA VARIABEL  BERDASARKAN MUSIM (per trip) Kode: 901',
            'action'            => 'biaya-operasional/edit/' . $request->session()->get('id_responden'),
            'method'            => 'patch',
            'jenis_operasional' => MasterBiayaVariabel::where('kateg_biaya_variabel', 1)->get(),
            'nomor'             => 1,
            
            // Data
            'biaya_variabel'    => $biaya_variabel,
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
        foreach ($request->input('rataan_musim_puncak') as $id_biaya_operasional => $value) {
            $biaya_operasional                        = BiayaOperasional::find($id_biaya_operasional);
            $biaya_operasional->rataan_musim_puncak   = $request->input('rataan_musim_puncak.' . $id_biaya_operasional);
            $biaya_operasional->rataan_musim_sedang   = $request->input('rataan_musim_sedang.' . $id_biaya_operasional);
            $biaya_operasional->rataan_musim_paceklik = $request->input('rataan_musim_paceklik.' . $id_biaya_operasional);
            $biaya_operasional->harga_satuan_puncak   = $request->input('harga_satuan_puncak.' . $id_biaya_operasional);
            $biaya_operasional->harga_satuan_sedang   = $request->input('harga_satuan_sedang.' . $id_biaya_operasional);
            $biaya_operasional->harga_satuan_paceklik = $request->input('harga_satuan_paceklik.' . $id_biaya_operasional);

            $biaya_operasional->save();
        }

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        BiayaOperasional::where('id_responden', $request->session()->get('id_responden'))->delete();
        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
