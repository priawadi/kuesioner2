<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partisipasi;
use App\MasterOpsional;
use App\JwbPartisipasi;
use App\Http\Requests;
use Validator;

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

        // Save jawaban into database
        foreach($pertanyaan as $key => $item)
        {
            $jwb_partisipasi                       = new JwbPartisipasi;
            $jwb_partisipasi->id_master_opsional   = $request->input('jawaban.' . $item->id_partisipasi, null);
            $jwb_partisipasi->id_responden         = $request->session()->get('id_responden');
            $jwb_partisipasi->id_partisipasi       = $item->id_partisipasi;
            $jwb_partisipasi->kateg_partisipasi    = 1;
           
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
    public function edit($id, Request $request)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');

        $master_opsional = MasterOpsional::all();

        $opsi = [];
        foreach ($master_opsional as $item) {
            $opsi[$item->kateg_master_ops][$item->id_master_opsional] = $item->opsional_master_ops;
        }

        $result = JwbPartisipasi::where('kateg_partisipasi', 1)->where('id_responden', $request->session()->get('id_responden'))->get();
        $jwb_partisipasi = [];
        foreach ($result as $idx => $item) {
            $jwb_partisipasi[$item->id_partisipasi] = [
                'id_jwb_partisipasi'   => $item->id_jwb_partisipasi,
                'id_master_opsional'   => $item->id_master_opsional,
                'jwb_teks_partisipasi' => $item->jwb_teks_partisipasi,
            ];
        }


        return view('partisipasi_sosial.edit', [
            'subtitle'        => 'Partisipasi Politik',
            'action'          => 'partisipasi-sosial/edit/' . $request->session()->get('id_responden'),
            'pertanyaan'      => Partisipasi::where('kateg_partisipasi', 1)->get(),
            'jwb_partisipasi' => $jwb_partisipasi,
            'opsi'            => $opsi,
            'prev_action'     => 'responden'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_responden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_responden)
    {
        foreach ($request->input('jawaban') as $id_jwb_partisipasi => $id_master_opsional) {
            $jwb_partisipasi                     = JwbPartisipasi::find($id_jwb_partisipasi);
            $jwb_partisipasi->id_master_opsional = $id_master_opsional;
            $jwb_partisipasi->save();
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
        echo "ID: " . $id;
        JwbPartisipasi::where('id_responden', $id)->where('kateg_partisipasi', 1)->delete();

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
