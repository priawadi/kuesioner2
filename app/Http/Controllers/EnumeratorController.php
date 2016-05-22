<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Enumerator;
use Validator;
use Carbon\Carbon;

class EnumeratorController extends Controller
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

        return view('enumerator.form', [
            'subtitle'          => 'II. KETERANGAN ENUMERATOR',
            'action'            => 'enumerator/tambah',
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
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');
        
        // validate request
        $rules = [];

        $rules['nama_enumerator']     = 'required';
        $rules['tanggal_wawancara']   = 'required';
        $rules['tanggal_editing']     = 'required';
        $rules['nama_pemvalidasi'] = 'required';

        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('enumerator/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        $enumerator = new Enumerator;
        $enumerator->id_responden      = $request->session()->get('id_responden');
        $enumerator->nama_enumerator   = $request->get('nama_enumerator');
        $enumerator->tanggal_wawancara = Carbon::createFromFormat('d-m-Y', $request->get('tanggal_wawancara'));
        $enumerator->tanggal_editing   = Carbon::createFromFormat('d-m-Y', $request->get('tanggal_editing'));
        $enumerator->nama_pemvalidasi  = $request->get('nama_pemvalidasi');

        $enumerator->save();
        
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
