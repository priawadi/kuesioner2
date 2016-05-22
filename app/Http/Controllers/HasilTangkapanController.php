<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MasterJenisIkan;
use App\HasilTangkapan;
use App\DetilHasilTangkapan;
use App\PenerimaanUsaha;
use App\MasterJenisAlatTangkap;
use App\Http\Requests;
use Validator;

class HasilTangkapanController extends Controller
{
    var $master_bulan = [
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
    ];
                
    var $master_musim = [
        1 => 'Tinggi',
        2 => 'Sedang', 
        3 => 'Rendah'
    ];
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

        $master_jenis_alat_tangkap = [];
        foreach (MasterJenisAlatTangkap::all() as $index => $item) {
            $master_jenis_alat_tangkap[$item->id_master_jenis_alat_tangkap] = $item->jenis_alat_tangkap;
        }

        return view('hasil_tangkapan.form', [
            'subtitle'                  => 'X. Penerimaan Usaha Berdasarkan Musim',
            'action'                    => 'hasil-tangkapan-ikan/tambah',
            'method'                    => 'post',
            'master_jenis_ikan'         => $master_jenis_ikan,
            'master_jenis_alat_tangkap' => $master_jenis_alat_tangkap,
            'jml_isian'                 => 5,
            'master_hari'               => [
                1 => 'Senin',
                2 => 'Selasa', 
                3 => 'Rabu',
                4 => 'Kamis',
                5 => 'Jumat',
                6 => 'Sabtu',
                7 => 'Minggu'
            ],
            'master_bulan' => $this->master_bulan,
            'master_musim' => $this->master_musim,
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

        $bulan_tidak_tangkap = '';
        if ($request->input('bulan_tidak_tangkap', null)) {
            foreach ($request->input('bulan_tidak_tangkap', null) as $key => $value) 
            {
                $bulan_tidak_tangkap .= ($key)? ',' . $value: $value;
            }
        }

        $daftar_hari = '';
        if ($request->input('daftar_hari', null)) {
            foreach ($request->input('daftar_hari', null) as $key => $value) 
            {
                $daftar_hari .= ($key)? ',' . $value: $value;
            }        
        }

        // Save data penerimaan_usaha
        $penerimaan_usaha = new PenerimaanUsaha;
        $penerimaan_usaha->id_responden            = $request->session()->get('id_responden');
        $penerimaan_usaha->bulan_tidak_tangkap     = $bulan_tidak_tangkap;
        $penerimaan_usaha->alasan_tidak_melaut     = $request->input('alasan_tidak_melaut', null);
        $penerimaan_usaha->hari_tidak_tangkap      = $request->input('hari_tidak_tangkap', null);
        $penerimaan_usaha->daftar_hari             = $daftar_hari;
        $penerimaan_usaha->total_hari_tidak_melaut = $request->input('total_hari_tidak_melaut', null);

        $penerimaan_usaha->save();

        // Save data hasil tangkapan
        $jenis_ikan_dominan = $request->input('jenis_ikan_dominan');
        for ($id_bulan = 1; $id_bulan <= 12; $id_bulan++) { 
            $hasil_tangkapan                        = new HasilTangkapan;
            $hasil_tangkapan->id_bulan              = $id_bulan;
            $hasil_tangkapan->id_responden          = $request->session()->get('id_responden');
            $hasil_tangkapan->id_musim              = $request->input('musim_produksi.' . $id_bulan, null);
            $hasil_tangkapan->id_jenis_alat_tangkap = $request->input('jenis_alat_tangkap.' . $id_bulan, null);
            $hasil_tangkapan->total_trip            = $request->input('total_trip.' . $id_bulan, null);

            $hasil_tangkapan->save();

            // Save data detil hasil tangkapan
            for ($id_input = 1; $id_input <= 5 ; $id_input++) { 
                $detil_hasil_tangkapan                   = new DetilHasilTangkapan;
                $detil_hasil_tangkapan->id_responden     = $request->session()->get('id_responden');
                $detil_hasil_tangkapan->id_bulan         = $id_bulan;
                $detil_hasil_tangkapan->id_jenis_ikan    = $jenis_ikan_dominan[$id_bulan][$id_input];
                $detil_hasil_tangkapan->urutan_isian     = $id_input;
                $detil_hasil_tangkapan->produksi_sebulan = $request->input('produksi_sebulan.' . $id_bulan . '.' . $id_input, null);
                $detil_hasil_tangkapan->harga_ikan       = $request->input('harga_ikan.' . $id_bulan . '.' . $id_input, null);
                $detil_hasil_tangkapan->nilai_produksi   = $request->input('nilai_produksi.' . $id_bulan . '.' . $id_input, null);
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
    public function edit($id, Request $request)
    {
        // Redirect to list of responden if id_responden
        if (!$request->session()->get('id_responden')) return redirect('responden');

        $penerimaan_usaha = PenerimaanUsaha::where('id_responden', $request->session()->get('id_responden'))->first();
        $bulan_tidak_tangkap = [];
        foreach (explode(',', $penerimaan_usaha->bulan_tidak_tangkap) as $index => $value) {
            $bulan_tidak_tangkap[] = $value;
        }

        $daftar_hari = [];
        foreach (explode(',', $penerimaan_usaha->daftar_hari) as $index => $value) {
            $daftar_hari[] = $value;
        }
        
        $master_jenis_ikans = [];
        foreach (MasterJenisIkan::all() as $item) {
            $master_jenis_ikan[$item->id_master_jenis_ikan] = $item->jenis_ikan;
        }

        $master_jenis_alat_tangkap = [];
        foreach (MasterJenisAlatTangkap::all() as $index => $item) {
            $master_jenis_alat_tangkap[$item->id_master_jenis_alat_tangkap] = $item->jenis_alat_tangkap;
        }

        $hasil_tangkapan = [];
        foreach (HasilTangkapan::where('id_responden', $request->session()->get('id_responden'))->get() as $index => $item) {
            $hasil_tangkapan[$item->id_bulan] = [
                'id_hasil_tangkapan'    => $item->id_hasil_tangkapan,
                'id_musim'              => $item->id_musim,
                'id_jenis_alat_tangkap' => $item->id_jenis_alat_tangkap,
                'total_trip'            => $item->total_trip,
            ];
        }

        $detil_hasil_tangkapan = [];
        foreach (DetilHasilTangkapan::where('id_responden', $request->session()->get('id_responden'))->get() as $index => $item) {
            $detil_hasil_tangkapan[$item->id_bulan][$item->urutan_isian] =[
                'id_detil_hasil_tangkapan' => $item->id_detil_hasil_tangkapan,
                'id_jenis_ikan'            => $item->id_jenis_ikan,
                'produksi_sebulan'         => $item->produksi_sebulan,
                'harga_ikan'               => $item->harga_ikan,
                'nilai_produksi'           => $item->nilai_produksi,
            ];
        }

        return view('hasil_tangkapan.edit', [
            'subtitle'                  => 'X. Penerimaan Usaha Berdasarkan Musim',
            'action'                    => 'hasil-tangkapan-ikan/edit/' . $id,
            'method'                    => 'patch',
            'master_jenis_ikan'         => $master_jenis_ikan,
            'master_jenis_alat_tangkap' => $master_jenis_alat_tangkap,
            'jml_isian'                 => 5,
            'master_hari'               => [
                1 => 'Senin',
                2 => 'Selasa', 
                3 => 'Rabu',
                4 => 'Kamis',
                5 => 'Jumat',
                6 => 'Sabtu',
                7 => 'Minggu'
            ],
            'master_bulan'          => $this->master_bulan,
            'master_musim'          => $this->master_musim,
            'nomor'                 => 1,
            
            // Data
            'penerimaan_usaha'      => $penerimaan_usaha,
            'bulan_tidak_tangkap'   => $bulan_tidak_tangkap,
            'daftar_hari'           => $daftar_hari,
            'hasil_tangkapan'       => $hasil_tangkapan,
            'detil_hasil_tangkapan' => $detil_hasil_tangkapan,
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
         $bulan_tidak_tangkap = '';
        if ($request->input('bulan_tidak_tangkap', null)) {
            foreach ($request->input('bulan_tidak_tangkap', null) as $key => $value) 
            {
                $bulan_tidak_tangkap .= ($key)? ',' . $value: $value;
            }
        }

        $daftar_hari = '';
        if ($request->input('daftar_hari', null)) {
            foreach ($request->input('daftar_hari', null) as $key => $value) 
            {
                $daftar_hari .= ($key)? ',' . $value: $value;
            }        
        }

        // Save data penerimaan_usaha
        $penerimaan_usaha = PenerimaanUsaha::where('id_responden', $request->session()->get('id_responden'))->first();
        $penerimaan_usaha->bulan_tidak_tangkap     = $bulan_tidak_tangkap;
        $penerimaan_usaha->alasan_tidak_melaut     = $request->input('alasan_tidak_melaut', null);
        $penerimaan_usaha->hari_tidak_tangkap      = $request->input('hari_tidak_tangkap', null);
        $penerimaan_usaha->daftar_hari             = $daftar_hari;
        $penerimaan_usaha->total_hari_tidak_melaut = $request->input('total_hari_tidak_melaut', null);

        $penerimaan_usaha->save();

        // Save data hasil tangkapan
        foreach ($request->input('musim_produksi' ) as $id_hasil_tangkapan => $value) {
            $hasil_tangkapan                        = HasilTangkapan::find($id_hasil_tangkapan);
            $hasil_tangkapan->id_musim              = $request->input('musim_produksi.' . $id_hasil_tangkapan, null);
            $hasil_tangkapan->id_jenis_alat_tangkap = $request->input('jenis_alat_tangkap.' . $id_hasil_tangkapan, null);
            $hasil_tangkapan->total_trip            = $request->input('total_trip.' . $id_hasil_tangkapan, null);

            $hasil_tangkapan->save();
        }

        // Save data detil hasil tangkapan
        foreach ($request->input('jenis_ikan_dominan') as $id_detil_hasil_tangkapan => $value) {
            $detil_hasil_tangkapan                   = DetilHasilTangkapan::find($id_detil_hasil_tangkapan);
            $detil_hasil_tangkapan->id_jenis_ikan    = $request->input('jenis_ikan_dominan.' . $id_detil_hasil_tangkapan, null);
            $detil_hasil_tangkapan->produksi_sebulan = $request->input('produksi_sebulan.' . $id_detil_hasil_tangkapan, null);
            $detil_hasil_tangkapan->harga_ikan       = $request->input('harga_ikan.' . $id_detil_hasil_tangkapan, null);
            $detil_hasil_tangkapan->nilai_produksi   = $request->input('nilai_produksi.' . $id_detil_hasil_tangkapan, null);
            $detil_hasil_tangkapan->save();
        }

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        HasilTangkapan::where('id_responden', $request->session()->get('id_responden'))->delete();
        DetilHasilTangkapan::where('id_responden', $request->session()->get('id_responden'))->delete();
        PenerimaanUsaha::where('id_responden', $request->session()->get('id_responden'))->delete();

        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
