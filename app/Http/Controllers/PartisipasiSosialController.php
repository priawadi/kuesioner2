<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partisipasi;
use App\MasterOpsional;
use App\Http\Requests;

class PartisipasiSosialController extends Controller
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

        return view('partisipasi_sosial.form', [
            'subtitle'   => 'Partisipasi Sosial',
            'pertanyaan' => Partisipasi::where('kateg_partisipasi', 1)->get(),
            'opsi'       => $opsi
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
        // $this->validate($request->all(), [
        //     'jawaban.*' => 'required|string'
        // ]);
        $rules = array();
        foreach($request->get('jawaban') as $key => $value)
        {
            echo "Index jawaban: " . $key . '<br>';
            echo "ID opsi dipilih: " . $value . '<br>';
            // $rules['items.'.$key] = 'required|max:10';
        }

        foreach($request->get('pertanyaan') as $key => $value)
        {
            // echo "Index pertanyaan: " . $key . '<br>';
            echo "ID pertanyaan: " . $value . '<br>';
            echo var_dump($value);
        }
        
        // $this->validate($request->all(), $rules);

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
