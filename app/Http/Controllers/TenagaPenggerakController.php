<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Mesin;

class TenagaPenggerakController extends Controller
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
    public function create()
    {
        return view('tenaga_penggerak.form', [
            'subtitle'    => 'Tenaga Penggerak',
            'action'      => 'tenaga-penggerak/tambah',
            'mesin'       => [
                1 => 'Mesin 1', 
                2 => 'Mesin 2', 
                3 => 'Mesin 3', 
                4 => 'Mesin 4'
            ],
            'merek_mesin' => [
                1 => 'Donfeng', 
                2 => 'Yanmar', 
                3 => 'Honda', 
                4 => 'Kubota', 
                5 => 'Yamaha', 
                6 => 'Hino', 
                7 => 'Mitsubishi', 
                8 => 'Sanghyang', 
                9 => 'Lainnya'
            ],
            'jenis_bbm_mesin' => [
                1 => 'Bensin', 
                2 => 'Solar', 
                3 => 'Minyak Tanah', 
                4 => 'Campuran', 
                5 => 'Bio Diesel', 
                6 => 'Lainnya'
            ],
            'status_kepemilikan' => [
                1 => 'Sendiri', 
                2 => 'Juragan', 
                3 => 'Kelompok', 
                4 => 'Sewa'
            ],
            'kondisi' => [
                1 => 'Baru',
                2 => 'Bekas', 
            ],
            'sumber_modal' => [
                1 => 'Modal sendiri',
                2 => 'Kredit formal', 
                3 => 'Kredit informal',
                4 => 'Bantuan pemerintah',
                5 => 'Keluarga',
                6 => 'Campuran',
            ],
            'nomor'        => 1
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
        $mesin  = [
            1 => 'Mesin 1', 
            2 => 'Mesin 2', 
            3 => 'Mesin 3', 
            4 => 'Mesin 4'
        ];

        foreach ($mesin as $key => $value) 
        {
            if ($request->get('merek_mesin')[$key])
            {
                $rules['ukuran_mesin.' . $key]             = 'required';
                $rules['status_kepemilikan_mesin.' . $key] = 'required';
                $rules['jenis_bbm_mesin.' . $key]          = 'required';
                $rules['tahun_pembelian_mesin.' . $key]    = 'required|numeric';
                $rules['kondisi_mesin.' . $key]            = 'required';
                $rules['harga_beli_mesin.' . $key]         = 'required|numeric';
                $rules['umur_ekonomis_mesin.' . $key]      = 'required|numeric';
                $rules['sumber_modal_mesin.' . $key]       = 'required';
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('tenaga-penggerak/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save data
        foreach ($mesin as $key => $value) 
        {
            $mesin                           = new Mesin;
            $mesin->id_responden             = $request->session()->get('id_responden');
            $mesin->mesin                    = $key;
            $mesin->merek_mesin              = $request->get('merek_mesin')[$key];
            $mesin->ukuran_mesin             = $request->get('ukuran_mesin')[$key];
            $mesin->status_kepemilikan_mesin = $request->get('status_kepemilikan_mesin')[$key];
            $mesin->jenis_bbm_mesin          = $request->get('jenis_bbm_mesin')[$key];
            $mesin->tahun_pembelian_mesin    = $request->get('tahun_pembelian_mesin')[$key];
            $mesin->kondisi_mesin            = $request->get('kondisi_mesin')[$key];
            $mesin->harga_beli_mesin         = $request->get('harga_beli_mesin')[$key];
            $mesin->umur_ekonomis_mesin      = $request->get('umur_ekonomis_mesin')[$key];
            $mesin->sumber_modal_mesin       = $request->get('sumber_modal_mesin')[$key];
            
            $mesin->save();
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
