<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MasterJenisIkan;
use App\HasilTangkapan;
use App\DetilHasilTangkapan;
use App\PenerimaanUsaha;
use App\Http\Requests;
use Validator;

class HasilTangkapanController extends Controller
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
        
        $master_jenis_ikans = [];
        foreach (MasterJenisIkan::all() as $item) {
            $master_jenis_ikan[$item->id_master_jenis_ikan] = $item->jenis_ikan;
        }

        return view('hasil_tangkapan.form', [
            'subtitle'          => 'Penerimaan Usaha Berdasarkan Musim',
            'action'            => 'hasil-tangkapan-ikan/tambah',
            'master_jenis_ikan' => $master_jenis_ikan,
            'master_bulan'      => [
                    1  => 'Januari', 
                    2  => 'Februari', 
                    3  => 'Maret', 
                    4  => 'April', 
                    5  => 'Mei', 
                    6  => 'Juni', 
                    7  => 'Juli', 
                    8  => 'Agustus', 
                    9  => 'September', 
                    10 => 'Oktober', 
                    11 => 'Nopember', 
                    12 => 'Desember'
                ],
            'jml_isian'    => 5,
            'master_musim' => [
                    1 => 'Tinggi',
                    2 => 'Sedang', 
                    3 => 'Rendah'
                ],
            'master_hari' => [
                    1 => 'Senin',
                    2 => 'Selasa', 
                    3 => 'Rabu',
                    4 => 'Kamis',
                    5 => 'Jumat',
                    6 => 'Sabtu',
                    7 => 'Minggu'
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
        // Init
        $rules = [];
        $jenis_ikan_dominan = $request->get('jenis_ikan_dominan');
        $musim_produksi     = $request->get('musim_produksi');

        // Validate form penerimaan_usaha
        $rules['bulan_tidak_tangkap']     = 'required';
        $rules['total_bulan']             = 'required|numeric';
        $rules['alasan_tidak_melaut']     = 'required';
        $rules['hari_tidak_tangkap']      = 'required';
        $rules['daftar_hari.*']           = 'required';
        $rules['total_hari_tidak_melaut'] = 'required|numeric';


        // Validate input hasil tangkapan
        for ($id_bulan = 1; $id_bulan <= 12; $id_bulan++) { 

            if ($musim_produksi[$id_bulan])
            {
                $rules['total_trip.' . $id_bulan] = 'required|numeric';
            }

            // Validate input detil hasil tangkapan
            for ($id_input = 1; $id_input <= 4 ; $id_input++) {

                if ($jenis_ikan_dominan[$id_bulan][$id_input])             
                {
                    $rules['produksi_sebulan.' . $id_bulan . '.' . $id_input] = 'required|numeric';
                    $rules['harga_ikan.' . $id_bulan . '.' . $id_input]       = 'required|numeric';
                    $rules['nilai_produksi.' . $id_bulan . '.' . $id_input]   = 'required|numeric';
                }

                if($jenis_ikan_dominan[$id_bulan][$id_input] == 32)
                {
                    $rules['jenis_ikan_lain.' . $id_bulan . '.' . $id_input] = 'required';
                }
            }
        }

        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('hasil-tangkapan-ikan/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        $bulan_tidak_tangkap = '';
        foreach ($request->get('bulan_tidak_tangkap') as $key => $value) 
        {
            $bulan_tidak_tangkap .= ($key)? ',' . $value: $value;
        }

        $daftar_hari = '';
        foreach ($request->get('daftar_hari') as $key => $value) 
        {
            $daftar_hari .= ($key)? ',' . $value: $value;
        }

        // Save data penerimaan_usaha
        $penerimaan_usaha = new PenerimaanUsaha;
        $penerimaan_usaha->id_responden            = $request->session()->get('id_responden');
        $penerimaan_usaha->bulan_tidak_tangkap     = $bulan_tidak_tangkap;
        $penerimaan_usaha->total_bulan             = $request->get('total_bulan');
        $penerimaan_usaha->alasan_tidak_melaut     = $request->get('alasan_tidak_melaut');
        $penerimaan_usaha->hari_tidak_tangkap      = $request->get('hari_tidak_tangkap');
        $penerimaan_usaha->daftar_hari             = $daftar_hari;
        $penerimaan_usaha->total_hari_tidak_melaut = $request->get('total_hari_tidak_melaut');

        $penerimaan_usaha->save();

        // Save data hasil tangkapan
        $jenis_ikan_dominan = $request->get('jenis_ikan_dominan');
        for ($id_bulan = 1; $id_bulan <= 12; $id_bulan++) { 
            $hasil_tangkapan               = new HasilTangkapan;
            $hasil_tangkapan->id_bulan     = $id_bulan;
            $hasil_tangkapan->id_responden = $request->session()->get('id_responden');
            $hasil_tangkapan->id_musim     = $musim_produksi[$id_bulan];
            $hasil_tangkapan->total_trip   = $request->get('total_trip')[$id_bulan];

            $hasil_tangkapan->save();

            // Save data detil hasil tangkapan
            for ($id_input = 1; $id_input <= 4 ; $id_input++) { 
                $detil_hasil_tangkapan = new DetilHasilTangkapan;
                $detil_hasil_tangkapan->id_responden            = $request->session()->get('id_responden');
                $detil_hasil_tangkapan->id_master_jenis_ikan    = $jenis_ikan_dominan[$id_bulan][$id_input];

                // If jenis_ikan_dominan Lainnya is chosen
                if($jenis_ikan_dominan[$id_bulan][$id_input] == 32)
                {
                    $detil_hasil_tangkapan->jenis_ikan_lain    = $request->get('jenis_ikan_lain')[$id_bulan][$id_input];
                }

                $detil_hasil_tangkapan->urutan_isian     = $id_input;
                $detil_hasil_tangkapan->produksi_sebulan = $request->get('produksi_sebulan')[$id_bulan][$id_input];
                $detil_hasil_tangkapan->harga_ikan       = $request->get('harga_ikan')[$id_bulan][$id_input];
                $detil_hasil_tangkapan->nilai_produksi   = $request->get('nilai_produksi')[$id_bulan][$id_input];
                $detil_hasil_tangkapan->save();
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
