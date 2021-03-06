<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partisipasi;
use App\MasterOpsional;
use App\JwbPartisipasi;
use App\Http\Requests;
use Validator;

class PartisipasiPolitikController extends Controller
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
    public function create(Request $request)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');
            
        $master_opsional = MasterOpsional::all();

        $opsi = [];
        foreach ($master_opsional as $item) {
            $opsi[$item->kateg_master_ops][$item->id_master_opsional] = $item->opsional_master_ops;
        }

        return view('partisipasi_politik.form', [
            'subtitle'    => 'Partisipasi Politik',
            'action'      => 'partisipasi-politik/tambah',
            'pertanyaan'  => Partisipasi::where('kateg_partisipasi', 3)->get(),
            'opsi'        => $opsi,
            'nomor'       => 1,
            'prev_action' => 'partisipasi-organisasi'
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

        // Save jawaban into database
        $pertanyaan = Partisipasi::where('kateg_partisipasi', 3)->select('id_partisipasi', 'parent_partisipasi', 'is_reason')->get();
        foreach($pertanyaan as $key => $item)
        {
            $jwb_partisipasi                     = new JwbPartisipasi;
            $jwb_partisipasi->id_master_opsional = $request->input('jawaban.' . $item->id_partisipasi, null);
            $jwb_partisipasi->id_responden       = $request->session()->get('id_responden');
            $jwb_partisipasi->id_partisipasi     = $item->id_partisipasi;
            $jwb_partisipasi->kateg_partisipasi  = 3;
            if ($item->is_reason)
            {
                $jwb_partisipasi->jwb_teks_partisipasi = $request->input('alasan.' . $item->id_partisipasi);
            }
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
    public function edit(Request $request, $id)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');

        $master_opsional = MasterOpsional::all();

        $opsi = [];
        foreach ($master_opsional as $item) {
            $opsi[$item->kateg_master_ops][$item->id_master_opsional] = $item->opsional_master_ops;
        }

        $result = JwbPartisipasi::where('kateg_partisipasi', 3)->where('id_responden', $request->session()->get('id_responden'))->get();
        $jwb_partisipasi = [];
        foreach ($result as $idx => $item) {
            $jwb_partisipasi[$item->id_partisipasi] = [
                'id_jwb_partisipasi'   => $item->id_jwb_partisipasi,
                'id_master_opsional'   => $item->id_master_opsional,
                'jwb_teks_partisipasi' => $item->jwb_teks_partisipasi,
            ];
        }


        return view('partisipasi_politik.edit', [
            'subtitle'        => 'Partisipasi Politik',
            'action'          => 'partisipasi-politik/edit/' . $request->session()->get('id_responden'),
            'pertanyaan'      => Partisipasi::where('kateg_partisipasi', 3)->get(),
            'jwb_partisipasi' => $jwb_partisipasi,
            'opsi'            => $opsi,
            'nomor'           => 1,
            'prev_action'     => 'responden'
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
        foreach ($request->input('jawaban') as $id_jwb_partisipasi => $id_master_opsional) {
            $jwb_partisipasi                     = JwbPartisipasi::find($id_jwb_partisipasi);
            $jwb_partisipasi->id_master_opsional = $id_master_opsional;
            $jwb_partisipasi->save();
        }
        
        foreach ($request->input('alasan') as $id_jwb_partisipasi => $jwb_teks_partisipasi) {
            $jwb_partisipasi                       = JwbPartisipasi::find($id_jwb_partisipasi);
            $jwb_partisipasi->jwb_teks_partisipasi = $jwb_teks_partisipasi;
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
    public function destroy($id)
    {
        //
    }
}
