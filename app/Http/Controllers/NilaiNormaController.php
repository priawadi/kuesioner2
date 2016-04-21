<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiNorma;
use App\JwbNilaiNorma;
use App\MasterOpsional;
use App\Http\Requests;
use Validator;

class NilaiNormaController extends Controller
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

        return view('nilai_norma.form', [
            'subtitle'   => 'Nilai dan Norma',
            'action'     => 'nilai-norma',
            'pertanyaan' => NilaiNorma::get(),
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
        $pertanyaan = NilaiNorma::select('id_nilai_norma', 'is_reason')->get();

        // Get ids of pertanyaan
        foreach($pertanyaan as $key => $item)
        {
            $rules['jawaban.' . $item->id_nilai_norma] = 'required';

            // validate reason
            if ($item->is_reason)
            {
                $rules['alasan.' . $item->id_nilai_norma] = 'required|max:500';
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('nilai-norma')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save jawaban into database
        $jawaban = $request->get('jawaban');
        $alasan  = $request->get('alasan');
        foreach($pertanyaan as $key => $item)
        {
            $jwb_nilai_norma                     = new JwbNilaiNorma;
            $jwb_nilai_norma->id_master_opsional = $jawaban[$item->id_nilai_norma];
            $jwb_nilai_norma->id_responden       = 1;
            $jwb_nilai_norma->id_nilai_norma     = $item->id_nilai_norma;
            if ($item->is_reason)
            {
                $jwb_nilai_norma->jwb_teks_nilai_norma = $alasan[$item->id_nilai_norma];
            }
            $jwb_nilai_norma->save();
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
