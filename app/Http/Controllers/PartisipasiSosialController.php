<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partisipasi;
use App\MasterOpsional;
use App\JwbPartisipasi;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;

class PartisipasiSosialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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

        $master_opsional = MasterOpsional::all();

        $opsi = [];
        foreach ($master_opsional as $item) {
            $opsi[$item->kateg_master_ops][$item->id_master_opsional] = $item->opsional_master_ops;
        }

        // return view('partisipasi_sosial.form', [
        return view('partisipasi_sosial.form', [
            'subtitle'    => 'Partisipasi Politik',
            'action'      => 'partisipasi-sosial/tambah',
            'pertanyaan'  => Partisipasi::where('kateg_partisipasi', 1)->get(),
            'opsi'        => $opsi,
            'prev_action' => 'responden'
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
        $pertanyaan = Partisipasi::where('kateg_partisipasi', 1)->select('id_partisipasi', 'is_reason')->get();

        // Get ids of pertanyaan
        foreach($pertanyaan as $key => $item)
        {
            // $rules['jawaban.' . $item->id_partisipasi] = '';

            // validate reason
            if ($item->is_reason)
            {
                $rules['alasan.' . $item->id_partisipasi] = 'max:500';
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('partisipasi-sosial/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save jawaban into database
        $jawaban = $request->get('jawaban');
        $alasan  = $request->get('alasan');
        foreach($pertanyaan as $key => $item)
        {
            $jwb_partisipasi                       = new JwbPartisipasi;
            $jwb_partisipasi->id_master_opsional   = isset($jawaban[$item->id_partisipasi])? $jawaban[$item->id_partisipasi]: null;
            $jwb_partisipasi->id_responden         = $request->session()->get('id_responden');
            $jwb_partisipasi->id_partisipasi       = $item->id_partisipasi;
            $jwb_partisipasi->kateg_partisipasi    = 1;
            $jwb_partisipasi->jwb_teks_partisipasi = isset($alasan[$item->id_partisipasi])? $alasan[$item->id_partisipasi]: null;
            
            $jwb_partisipasi->save();
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
    public function destroy($id, Request $request)
    {
        echo "ID: " . $id;
        JwbPartisipasi::where('id_responden', $id)->where('kateg_partisipasi', 1)->delete();

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
