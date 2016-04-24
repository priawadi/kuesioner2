<?php

namespace App\Http\Controllers;

use App\Responden;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class RespondenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // Remove current session
        $request->session()->forget('id_responden');

        return view('responden.index', [
            'responden'  => Responden::orderBy('id_responden', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status_responden = [
            1 => 'Pemilik',
            2 => 'Nahkoda',
            3 => 'ABK',
        ];

        return view('responden.form', [
            'tasks'  => 'test',
            'status' => $status_responden
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
        $validator = Validator::make($request->all(), [
            'id_id'          => 'required',
            'nama_responden' => 'required',
            'suku'           => 'required',
            'kampung'        => 'required',
            'dusun'          => 'required',
            'kelurahan'      => 'required',
            'kecamatan'      => 'required',
            'kabupaten'      => 'required',
            'provinsi'       => 'required',
            'tipologi'       => 'required',
            'stat_responden' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('responden/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        $responden = new Responden;
        $responden->id_id          = $request->id_id;
        $responden->nama_responden = $request->nama_responden;
        $responden->suku           = $request->suku;
        $responden->kampung        = $request->kampung;
        $responden->dusun          = $request->dusun;
        $responden->kelurahan      = $request->kelurahan;
        $responden->kecamatan      = $request->kecamatan;
        $responden->kabupaten      = $request->kabupaten;
        $responden->provinsi       = $request->provinsi;
        $responden->tipologi       = $request->tipologi;
        $responden->stat_responden = $request->stat_responden;

        $responden->kodeawal_id        = $request->kodeawal_id;
        $responden->kodeawal_nama      = $request->kodeawal_nama;
        $responden->kodeawal_suku      = $request->kodeawal_suku;
        $responden->kodeawal_kampung   = $request->kodeawal_kampung;
        $responden->kodeawal_dusun     = $request->kodeawal_dusun;
        $responden->kodeawal_kelurahan = $request->kodeawal_kelurahan;
        $responden->kodeawal_kecamatan = $request->kodeawal_kecamatan;
        $responden->kodeawal_kabupaten = $request->kodeawal_kabupaten;
        $responden->kodeawal_provinsi  = $request->kodeawal_provinsi;

        $responden->kodecacah_id        = $request->kodecacah_id;
        $responden->kodecacah_nama      = $request->kodecacah_nama;
        $responden->kodecacah_suku      = $request->kodecacah_suku;
        $responden->kodecacah_kampung   = $request->kodecacah_kampung;
        $responden->kodecacah_dusun     = $request->kodecacah_dusun;
        $responden->kodecacah_kelurahan = $request->kodecacah_kelurahan;
        $responden->kodecacah_kecamatan = $request->kodecacah_kecamatan;
        $responden->kodecacah_kabupaten = $request->kodecacah_kabupaten;
        $responden->kodecacah_provinsi  = $request->kodecacah_provinsi;
        
        $responden->save();

        return redirect('responden');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request, $id_responden)
    {
        // Save id responden in session
        $request->session()->put('id_responden', $id_responden);

        echo $request->session()->get('id_responden');
        return redirect('partisipasi-sosial');
    }
}
