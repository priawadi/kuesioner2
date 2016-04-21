<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterOpsional;
use App\Partisipasi;
use App\JwbPartisipasi;
use App\Http\Requests;
use Validator;

class PartisipasiOrgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master_opsional = MasterOpsional::all();

        $opsi = [];
        foreach ($master_opsional as $item) {
            $opsi[$item->kateg_master_ops][$item->id_master_opsional] = $item->opsional_master_ops;
        }

        // print_r($opsi);
        // print_r(Partisipasi::where('kateg_partisipasi', 2)->get());

        // return view('partisipasi_org.form', [
        return view('partisipasi_org.form', [
            'subtitle'   => 'Partisipasi Sosial',
            'pertanyaan' => Partisipasi::where('kateg_partisipasi', 2)->get(),
            'opsi'       => $opsi,
            'nomor'      => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pertanyaan = Partisipasi::where('kateg_partisipasi', 2)->select('id_partisipasi', 'parent_partisipasi')->get();

        // Get ids of pertanyaan
        foreach($pertanyaan as $key => $item)
        {
            if ($item->parent_partisipasi) 
            {
                $rules['jawaban.' . $item->id_partisipasi] = 'required';
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('partisipasi-organisasi')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save jawaban into database
        $jawaban = $request->get('jawaban');
        foreach($pertanyaan as $key => $item)
        {
            if ($item->parent_partisipasi)
            {
                $jwb_partisipasi = new JwbPartisipasi;
                $jwb_partisipasi->id_master_opsional   = $jawaban[$item->id_partisipasi];
                $jwb_partisipasi->id_responden         = 1;
                $jwb_partisipasi->id_partisipasi       = $item->id_partisipasi;
                $jwb_partisipasi->save();
            }
        }

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
