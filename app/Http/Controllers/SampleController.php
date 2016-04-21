<?php

namespace App\Http\Controllers;

use App\Sample;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;


class SampleController extends Controller
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
        return view('sample.form', [
            'kategori' => [1 => 'Besar', 2 => 'Kecil']
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
            'nama'           => 'required',
            'alamat'         => 'required',
            'aktif'          => 'required',
            'kategori'       => 'required',
            'jenis_kelamin'  => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('sample')
                        ->withErrors($validator)
                        ->withInput();
        }

        $responden = new Sample;
        $responden->nama          = $request->nama;
        $responden->alamat        = $request->alamat;
        $responden->aktif         = $request->aktif;
        $responden->kategori      = $request->kategori;
        $responden->jenis_kelamin = $request->jenis_kelamin;
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


    public function set_session(Request $request)
    {
        $request->session()->put('mySession', 'Hello World!');
    }

    public function get_session(Request $request)
    {
        echo $request->session()->get('mySession');
    }

    public function delete_session(Request $request)
    {
        $request->session()->forget('mySession');
    }
}
