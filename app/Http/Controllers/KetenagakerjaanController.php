<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ketenagakerjaan;
use App\CurahanTenagaKerja;
use Validator;

class KetenagakerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        return view('ketenagakerjaan.form', [
            'subtitle'         => 'Ketenagakerjaan',
            'action'           => 'ketenagakerjaan/tambah',
            'nomor'            => 1,
            'status_pekerjaan' => 
            [
                1 => 'Pemilik',
                2 => 'Nahkoda',
                3 => 'Juru Mesin',
                4 => 'Juru Masak',
                5 => 'ABK',
                6 => '',
                7 => '',
            ],
            'status_tenaga_kerja' =>
            [
                1 => 'Keluarga Inti',
                2 => 'Keluarga Besar',
                3 => 'Luar Keluarga',
            ],
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

        // Validate form
        $rules['jml_tenaga_kerja_sama'] = 'required';
        
        $status_pekerjaan = 
            [
                1 => 'Pemilik',
                2 => 'Nahkoda',
                3 => 'Juru Mesin',
                4 => 'Juru Masak',
                5 => 'ABK',
                6 => '',
                7 => '',
            ];

        // Validate form pencacah tenaga kerja if, jml_tenaga_kerja_sama is 1
        if ($request->get('jml_tenaga_kerja_sama'))
        {
            foreach($status_pekerjaan as $id => $value)
            {
                // Validate of status_pekerjaan_lain is filled
                if ($id == 6 || $id == 7)
                {
                    if ($request->get('status_pekerjaan_lain')[6])
                    {
                        $rules['status_tenaga_kerja.6']         = 'required';
                    }

                    if ($request->get('status_pekerjaan_lain')[7])
                    {
                        $rules['status_tenaga_kerja.7']         = 'required';
                    }
                }

                if ($request->get('status_tenaga_kerja')[$id])
                {
                    $rules['jumlah_tenaga_kerja.' . $id] = 'required|numeric';
                    $rules['lama_trip.' . $id]           = 'required|numeric';
                    $rules['jumlah_trip.' . $id]         = 'required|numeric';
                    $rules['bagi_hasil.' . $id]          = 'required|numeric';
                    $rules['upah_trip.' . $id]           = 'required|numeric';
                }
            }
        }
        
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('ketenagakerjaan/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        $ketenagakerjaan                        = new Ketenagakerjaan;
        $ketenagakerjaan->jml_tenaga_kerja_sama = $request->get('jml_tenaga_kerja_sama');
        $ketenagakerjaan->id_responden          = $request->session()->get('id_responden');
        $ketenagakerjaan->save();


        // If, jml_tenaga_kerja_sama is 1
        if ($request->get('jml_tenaga_kerja_sama'))
        {
            foreach($status_pekerjaan as $id => $value)
            {
                $curahan_tenaga_kerja = new CurahanTenagaKerja;

                if ($id == 6 || $id == 7)
                {
                    $curahan_tenaga_kerja->status_pekerjaan_lain = $request->get('status_pekerjaan_lain')[$id];
                }

                $curahan_tenaga_kerja->status_pekerjaan    = $id;
                $curahan_tenaga_kerja->id_ketenagakerjaan  = $ketenagakerjaan->id_ketenagakerjaan;
                $curahan_tenaga_kerja->status_tenaga_kerja = $request->get('status_tenaga_kerja')[$id];
                $curahan_tenaga_kerja->jumlah_tenaga_kerja = $request->get('jumlah_tenaga_kerja')[$id];
                $curahan_tenaga_kerja->lama_trip           = $request->get('lama_trip')[$id];
                $curahan_tenaga_kerja->jumlah_trip         = $request->get('jumlah_trip')[$id];
                $curahan_tenaga_kerja->bagi_hasil          = $request->get('bagi_hasil')[$id];
                $curahan_tenaga_kerja->upah_trip           = $request->get('upah_trip')[$id];

                $curahan_tenaga_kerja->save();
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
