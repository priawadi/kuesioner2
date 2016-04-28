<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RasaPercaya;
use App\JwbRasaPercaya;
use App\MasterOpsional;
use App\Http\Requests;
use Validator;

class RasaPercayaMasyController extends Controller
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

        // return view('rasa_percaya_masy.form', [
        return view('rasa_percaya_masy.form', [
            'subtitle'   => 'Rasa Percaya Antar Masyarakat',
            'action'     => 'rasa-percaya-masyarakat/tambah',
            'pertanyaan' => RasaPercaya::where('kateg_rasa_percaya', 1)->get(),
            'opsi'       => $opsi,
            'nomor'      => 1
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
        $pertanyaan = RasaPercaya::where('kateg_rasa_percaya', 1)->select('id_rasa_percaya', 'parent_rasa_percaya', 'is_reason')->get();

        // // Get ids of pertanyaan
        // foreach($pertanyaan as $key => $item)
        // {
        //     if ($item->parent_rasa_percaya) 
        //     {
        //         $rules['jawaban.' . $item->id_rasa_percaya] = 'required';
        //     }

        //     // validate reason
        //     if ($item->is_reason)
        //     {
        //         $rules['alasan.' . $item->id_rasa_percaya] = 'required|max:500';
        //     }
        // }

        // // Validate input
        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return redirect('rasa-percaya-masyarakat/tambah')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // Save jawaban into database
        $jawaban = $request->get('jawaban');
        $alasan = $request->get('alasan');
        foreach($pertanyaan as $key => $item)
        {
            if ($item->parent_rasa_percaya)
            {
                $jwb_rasa_percaya                     = new JwbRasaPercaya;
                $jwb_rasa_percaya->id_master_opsional = isset($jawaban[$item->id_rasa_percaya])? $jawaban[$item->id_rasa_percaya]: null;
                $jwb_rasa_percaya->id_responden       = $request->session()->get('id_responden');
                $jwb_rasa_percaya->id_rasa_percaya    = $item->id_rasa_percaya;
                $jwb_rasa_percaya->kateg_rasa_percaya = 1;
                if ($item->is_reason)
                {
                    $jwb_rasa_percaya->jwb_teks_rasa_percaya = $alasan[$item->id_rasa_percaya];
                }
                $jwb_rasa_percaya->save();
            } 
            else
            {
                $jwb_rasa_percaya                     = new JwbRasaPercaya;
                $jwb_rasa_percaya->id_responden       = $request->session()->get('id_responden');
                $jwb_rasa_percaya->id_rasa_percaya    = $item->id_rasa_percaya;
                $jwb_rasa_percaya->kateg_rasa_percaya = 1;
                if ($item->is_reason)
                {
                    $jwb_rasa_percaya->jwb_teks_rasa_percaya = $alasan[$item->id_rasa_percaya];
                }
                $jwb_rasa_percaya->save();
            }
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
