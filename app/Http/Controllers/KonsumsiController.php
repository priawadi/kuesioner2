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
    public function create(Request $request)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');

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
            'konsumsi.*' => 'numeric',
        ]);

        if ($validator->fails()) {
            return redirect('konsumsi/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        $input = $request->all();
        foreach ($input['konsumsi'] as $key => $value) {
            $konsumsi = new JawabanKonsumsi;
            $konsumsi -> id_konsumsi = isset($key)? $key: null;;
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
        $jawaban_konsumsi = [];
        foreach (JawabanKonsumsi::where('id_responden', $id)->get() as $index => $item) {
            $jawaban_konsumsi[$item->id_konsumsi] = [
                'id_jawaban_konsumsi'   => $item->id_jawaban_konsumsi,
                'jawaban'               => $item->jawaban,
            ];
        }       

        return view('konsumsi.edit', [
            'subtitle'          => 'I PENGELUARAN PANGAN MINGGUAN RUMAH TANGGA PERIKANAN',
            'action'            => 'konsumsi/edit/' . $id,
            'konsumsi'          => Konsumsi::all(),
            'jawaban_konsumsi'  => $jawaban_konsumsi,
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
        foreach($request->input('jawaban') as $id_jawaban_konsumsi => $value)
        {
            $jawabankonsum                       = JawabanKonsumsi::find($id_jawaban_konsumsi);
            $jawabankonsum->jawaban              = $request->input('jawaban.' . $id_jawaban_konsumsi, null);
            $jawabankonsum->save();
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
        JawabanKonsumsi::where('id_responden', $id)->delete();

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
