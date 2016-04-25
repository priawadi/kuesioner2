<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konsumsi;
use App\JawabanKonsumsi;
use App\Http\Requests;
use Validator;

class KonsumsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsumsi = Konsumsi::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('konsumsi.form', [
            'subtitle'   => 'I PENGELUARAN PANGAN MINGGUAN RUMAH TANGGA PERIKANAN',
            'konsumsi' => Konsumsi::all(),
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
            'konsumsi.*' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect('konsumsi/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        $input = $request->all();
        foreach ($input['konsumsi'] as $key => $value) {
            $konsumsi = new JawabanKonsumsi;
            $konsumsi -> id_konsumsi = $key;
            $konsumsi -> id_responden = $request->session()->get('id_responden');
            $konsumsi -> jawaban = $value;
            $konsumsi->save();
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
