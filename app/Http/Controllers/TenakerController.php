<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TenakerController extends Controller
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
        return view('tenaker.form', [
            'tasks' => 'test',
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
            'nama_responden' => 'required|min:5',
            'alamat'         => 'required',
            'aktif'          => 'required',
            'kategori'       => 'required',
            'jenis_kelamin'  => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('responden')
                        ->withErrors($validator)
                        ->withInput();
        }

        $responden = new Responden;
        $responden->nama_responden = $request->nama_responden;
        $responden->alamat         = $request->alamat;
        $responden->aktif          = $request->aktif;
        $responden->kategori       = $request->kategori;
        $responden->jenis_kelamin  = $request->jenis_kelamin;
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
