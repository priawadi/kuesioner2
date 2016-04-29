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

        // return view('partisipasi_org.form', [
        return view('partisipasi_org.form', [
            'subtitle'    => 'Partisipasi Organisasi',
            'action'      => 'partisipasi-organisasi/tambah',
            'pertanyaan'  => Partisipasi::where('kateg_partisipasi', 2)->get(),
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

        // // Get ids of pertanyaan
        // foreach($pertanyaan as $key => $item)
        // {
        //     if ($item->parent_partisipasi) 
        //     {
        //         $rules['jawaban.' . $item->id_partisipasi] = '';
        //     }
        // }
        
        // // Validate input
        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return redirect('partisipasi-organisasi/tambah')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        
        $pertanyaan = Partisipasi::where('kateg_partisipasi', 2)->select('id_partisipasi', 'parent_partisipasi', 'is_input')->get();

        // Save jawaban into database
        foreach($pertanyaan as $key => $item)
        {
            if ($item->is_input)
            {
                $jwb_partisipasi                     = new JwbPartisipasi;
                $jwb_partisipasi->id_master_opsional = $request->input('jawaban.' . $item->id_partisipasi, null);
                $jwb_partisipasi->id_responden       = $request->session()->get('id_responden');
                $jwb_partisipasi->id_partisipasi     = $item->id_partisipasi;
                $jwb_partisipasi->kateg_partisipasi  = 2;
                $jwb_partisipasi->save();
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
        echo $id;
        // return view('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
