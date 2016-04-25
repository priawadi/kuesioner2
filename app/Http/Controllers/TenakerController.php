<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perahu;
use App\Mesin;
use App\MasterPlagisKecil;
use App\MasterPlagisBesar;
use App\MasterDemersal;
use App\AlatTangkap;
use App\Http\Requests;

class TenakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perahu         = Perahu::all();
        $plagis_kecil   = MasterPlagisKecil::all();
        $plagis_besar   = MasterPlagisBesar::all();
        $demersal       = MasterDemersal::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenaker.form', [
            /**perahu**/
            'armada_dimiliki'               => ['1' => 'Perahu 1', '2' => 'Perahu 2', '3' => 'Perahu 3', '4' => 'Perahu 4'],
            'jenis_armada'                  => [1 => 'Tanpa Motor', 2 => 'Motor Tempel', 3 => 'Perahu Motor'],
            'status_kepemilikan'            => [1 => 'Sendiri', 2 => 'Juragan', 3 => 'Kelompok', 4 => 'Sewa'],
            'kondisi'                       => [1 => 'Baru', 2 => 'Bekas'],
            'sumber_modal'                  => [1 => 'Modal Sendiri', 2 => 'Kredit Formal', 3 => 'Kredit Informal', 4 => 'Bantuan Pemerintah', 5 => 'Keluarga', 6 => 'Campuran'],

            /**mesin**/
            'mesin'                         => ['1' => 'Mesin 1', '2' => 'Mesin 2', '3' => 'Mesin 3', '4' => 'Mesin 4'],
            'merek_mesin'                   => [1 => 'Donfeng', 2 => 'Yanmar', 3 => 'Honda', 4 => 'Kubota', 5 => 'Yamaha', 6 => 'Hino', 7 => 'Mitsubishi', 8 => 'Sanghyang', 9 => 'Lainnya'],
            // 'status_kepemilikan_mesin'      => [1 => 'Sendiri', 2 => 'Juragan', 3 => 'Kelompok', 4 => 'Sewa'],
            'jenis_bbm_mesin'               => [1 => 'Bensin', 2 => 'Solar', 3 => 'Minyak Tanah', 4 => 'Campuran', 5 => 'Bio Diesel', 6 => 'Lainnya'],
            // 'kondisi_mesin'                 => [1 => 'Baru', 2 => 'Bekas'],
            // 'sumber_modal_mesin'            => [1 => 'Modal Sendiri', 2 => 'Kredit Formal', 3 => 'Kredit Informal', 4 => 'Bantuan Pemerintah', 5 => 'Keluarga', 6 => 'Campuran'],
            'perahu'                        => Perahu::all(),
            'plagis_kecil'                  => MasterPlagisKecil::all(),
            'plagis_besar'                  => MasterPlagisBesar::all(),
            'demersal'                      => MasterDemersal::all(),

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

        $armada_dimiliki = ['1' => 'Perahu 1', '2' => 'Perahu 2', '3' => 'Perahu 3', '4' => 'Perahu 4'];
        foreach ($armada_dimiliki as $id_perahu => $perahu) {
            $perahu = new Perahu;
            // $perahu->id_responden            = $request->session()->get('id_responden');
            $perahu->armada_dimiliki         = $id_perahu;
            $perahu->jenis_armada            = $request->get('jenis_armada')[$id_perahu];
            $perahu->ukuran_tonase           = $request->get('ukuran_tonase')[$id_perahu];
            $perahu->status_kepemilikan      = $request->get('status_kepemilikan')[$id_perahu];
            $perahu->tahun_pembelian         = $request->get('tahun_pembelian')[$id_perahu];
            $perahu->kondisi                 = $request->get('kondisi')[$id_perahu];
            $perahu->harga_beli              = $request->get('harga_beli')[$id_perahu];
            $perahu->umur_ekonomis           = $request->get('umur_ekonomis')[$id_perahu];
            $perahu->sumber_modal            = $request->get('sumber_modal')[$id_perahu];
            
            // $perahu->save();
        }

        $mesin = ['1' => 'Mesin 1', '2' => 'Mesin 2', '3' => 'Mesin 3', '4' => 'Mesin 4'];
        foreach ($mesin as $key => $value) {
            $mesin = new Mesin;
            // $mesin->id_responden            = $request->session()->get('id_responden');
            $mesin->mesin = $key;
            $mesin->merek_mesin = $request->get('merek_mesin')[$key];
            $mesin->ukuran_mesin = $request->get('ukuran_mesin')[$key];
            $mesin->status_kepemilikan_mesin = $request->get('status_kepemilikan_mesin')[$key];
            $mesin->jenis_bbm_mesin = $request->get('jenis_bbm_mesin')[$key];
            $mesin->tahun_pembelian_mesin = $request->get('tahun_pembelian_mesin')[$key];
            $mesin->kondisi_mesin = $request->get('kondisi_mesin')[$key];
            $mesin->harga_beli_mesin = $request->get('harga_beli_mesin')[$key];
            $mesin->umur_ekonomis_mesin = $request->get('umur_ekonomis_mesin')[$key];
            $mesin->sumber_modal_mesin = $request->get('sumber_modal_mesin')[$key];
            
            // $mesin->save();
        }

        $plagis_kecil = MasterPlagisKecil::all();
        foreach ($plagis_kecil as $id_master_plagis_kecil => $item) {
            $plagiskecil = new AlatTangkap;
            // $plagiskecil->id_responden            = $request->session()->get('id_responden');
            $plagiskecil->jumlah_alat_tangkap = $request->get('jumlah_alat_tangkap')[$item ->id_master_plagis_kecil];
            $plagiskecil->jenis_alat_tangkap = 'Plagis Kecil';
            $plagiskecil->waktu_penggunaan_alat = $request->get('waktu_penggunaan_alat')[$item ->id_master_plagis_kecil];
            $plagiskecil->status_kepemilikan_alat = $request->get('status_kepemilikan')[$item ->id_master_plagis_kecil];
            $plagiskecil->spesifikasi_alat = $request->get('spesifikasi_alat')[$item ->id_master_plagis_kecil];
            $plagiskecil->kondisi_alat = $request->get('kondisi')[$item ->id_master_plagis_kecil];
            $plagiskecil->harga_beli_alat = $request->get('harga_beli_alat')[$item ->id_master_plagis_kecil];
            $plagiskecil->umur_ekonomis_alat = $request->get('umur_ekonomis_alat')[$item ->id_master_plagis_kecil];
            $plagiskecil->sumber_modal_alat = $request->get('sumber_modal')[$item ->id_master_plagis_kecil];

            $plagiskecil->save();

        }

        $plagis_besar = MasterPlagisBesar::all();
        foreach ($plagis_besar as $id_master_plagis_besar => $item) {
            $plagisbesar = new AlatTangkap;
            // $plagisbesar->id_responden            = $request->session()->get('id_responden');
            $plagisbesar->jumlah_alat_tangkap = $request->get('jumlah_alat_tangkap')[$item ->id_master_plagis_besar];
            $plagisbesar->jenis_alat_tangkap = 'Plagis Besar';
            $plagisbesar->status_kepemilikan_alat = $request->get('status_kepemilikan')[$item ->id_master_plagis_besar];
            $plagisbesar->spesifikasi_alat = $request->get('spesifikasi_alat')[$item ->id_master_plagis_besar];
            $plagisbesar->kondisi_alat = $request->get('kondisi')[$item ->id_master_plagis_besar];
            $plagisbesar->harga_beli_alat = $request->get('harga_beli_alat')[$item ->id_master_plagis_besar];
            $plagisbesar->umur_ekonomis_alat = $request->get('umur_ekonomis_alat')[$item ->id_master_plagis_besar];
            $plagisbesar->sumber_modal_alat = $request->get('sumber_modal')[$item ->id_master_plagis_besar];

            $plagisbesar->save();
        }

        $demersal = MasterDemersal::all();
        foreach ($demersal as $id_master_demersal => $item) {
            $demersal = new AlatTangkap;
            // $demersal->id_responden            = $request->session()->get('id_responden');
            $demersal->jumlah_alat_tangkap = $request->get('jumlah_alat_tangkap')[$item ->id_master_demersal];
            $demersal->jenis_alat_tangkap = 'Demersal';
            $demersal->status_kepemilikan_alat = $request->get('status_kepemilikan')[$item ->id_master_demersal];
            $demersal->spesifikasi_alat = $request->get('spesifikasi_alat')[$item ->id_master_demersal];
            $demersal->kondisi_alat = $request->get('kondisi')[$item ->id_master_demersal];
            $demersal->harga_beli_alat = $request->get('harga_beli_alat')[$item ->id_master_demersal];
            $demersal->umur_ekonomis_alat = $request->get('umur_ekonomis_alat')[$item ->id_master_demersal];
            $demersal->sumber_modal_alat = $request->get('sumber_modal')[$item ->id_master_demersal];

            $demersal->save();
        }        

        // return view('home');
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
