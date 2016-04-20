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
    public function index()
    {

        return view('responden.index', [
            'responden'  => Responden::all(),
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
            'id_id' => 'required',
            'nama_responden' => 'required',
            'suku' => 'required',
            'kampung' => 'required',
            'dusun' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'tipologi' => 'required',
            'stat_responden' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('responden/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        $responden = new Responden;
        $responden->id_id         = $request->id_id;
        $responden->nama_responden = $request->nama_responden;
        $responden->suku         = $request->suku;
        $responden->kampung         = $request->kampung;
        $responden->dusun         = $request->dusun;
        $responden->kelurahan         = $request->kelurahant;
        $responden->kecamatan         = $request->kecamatanat;
        $responden->kabupaten         = $request->kabupaten;
        $responden->provinsi         = $request->provinsi;
        $responden->tipologi         = $request->tipologit;
        $responden->save();

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
