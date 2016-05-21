<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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
                6 => 'Buang Umpan',
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
                6 => 'Buang Umpan',
                7 => '',
            ];

            foreach($status_pekerjaan as $id => $value)
            {
                $curahan_tenaga_kerja = new CurahanTenagaKerja;
                $curahan_tenaga_kerja->status_pekerjaan     = $id;
                if ($id == 7)
                {
                    $curahan_tenaga_kerja->status_pekerjaan_lain = $request->get('status_pekerjaan_lain')[$id];
                }
                $curahan_tenaga_kerja->id_responden         = $request->session()->get('id_responden');
                $curahan_tenaga_kerja->status_tenaga_kerja  = $request->get('status_tenaga_kerja')[$id];
                $curahan_tenaga_kerja->jumlah_tenaga_kerja  = $request->get('jumlah_tenaga_kerja')[$id];
                $curahan_tenaga_kerja->lama_trip            = $request->get('lama_trip')[$id];
                $curahan_tenaga_kerja->jumlah_trip          = $request->get('jumlah_trip')[$id];
                $curahan_tenaga_kerja->bagi_hasil           = $request->get('bagi_hasil')[$id];
                $curahan_tenaga_kerja->upah_trip            = $request->get('upah_trip')[$id];

                $curahan_tenaga_kerja->save();
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

        $curahan_tenaga_kerja = [];
        foreach (CurahanTenagaKerja::where('id_responden', $request->session()->get('id_responden'))->get() as $index => $item) {
            $curahan_tenaga_kerja[$item->id_curahan_tenaga_kerja] = [
                'id_curahan_tenaga_kerja'   => $item->id_curahan_tenaga_kerja,
                'status_pekerjaan'          => $item->status_pekerjaan,
                'status_pekerjaan_lain'     => $item->status_pekerjaan_lain,
                'status_tenaga_kerja'       => $item->status_tenaga_kerja,
                'jumlah_tenaga_kerja'       => $item->jumlah_tenaga_kerja,
                'lama_trip'                 => $item->lama_trip,
                'jumlah_trip'               => $item->jumlah_trip,
                'bagi_hasil'                => $item->bagi_hasil,
                'upah_trip'                 => $item->upah_trip,
            ];
        }

        return view('ketenagakerjaan.edit', [
            'subtitle'                      => 'Ketenagakerjaan',
            'action'                        => 'ketenagakerjaan/edit/' . $id,
            'curahan_tenaga_kerja'          => $curahan_tenaga_kerja,
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
        //Ketenagakerjaan::where('id_responden', $id)->delete();
        CurahanTenagaKerja::where('id_responden', $id)->delete();

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
