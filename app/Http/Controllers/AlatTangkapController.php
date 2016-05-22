<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MasterJenisAlatTangkap;
use App\AlatTangkap;
use Validator;

class AlatTangkapController extends Controller
{
    var $jenis_alat_tangkap = [
        1 => 'Alat Tangkap Utama',
        2 => 'Alat Tangkap Alternatif 1',
        3 => 'Alat Tangkap Alternatif 2',
        4 => 'Alat Tangkap Alternatif 3',
        4 => 'Alat Tangkap Alternatif 4',
    ];

    var $master_kondisi = [
        1 => 'Baru',
        2 => 'Bekas', 
    ];

    var $master_sumber_modal = [
        1 => 'Modal sendiri',
        2 => 'Kredit formal', 
        3 => 'Kredit informal',
        4 => 'Bantuan pemerintah',
        5 => 'Keluarga',
        6 => 'Campuran',
    ];
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

        $master_jenis_alat_tangkap = [];
        foreach (MasterJenisAlatTangkap::all() as $index => $item) {
            $master_jenis_alat_tangkap[$item->id_master_jenis_alat_tangkap] = $item->jenis_alat_tangkap;
        }
        
        return view('alat_tangkap.form', [
            'subtitle'                  => '702. Jenis alat tangkap yang digunakan',
            'action'                    => 'alat-tangkap/tambah',
            'method'                    => 'post',
            'jenis_alat_tangkap'        => $this->jenis_alat_tangkap,
            'master_kondisi'            => $this->master_kondisi,
            'master_sumber_modal'       => $this->master_sumber_modal,
            'master_jenis_alat_tangkap' => $master_jenis_alat_tangkap,
            'nomor'                     => 1
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

        // Save alat tangkap
        foreach($request->input('nama_alat_tangkap') as $id_jenis_alat_tangkap => $item)
        {
            $jenis_alat_tangkap                      = new AlatTangkap;
            $jenis_alat_tangkap->id_responden        = $request->session()->get('id_responden');
            $jenis_alat_tangkap->jenis_alat_tangkap  = $id_jenis_alat_tangkap;
            $jenis_alat_tangkap->nama_alat_tangkap   = $request->input('nama_alat_tangkap.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_panjang      = $request->input('ukuran_panjang.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_lebar        = $request->input('ukuran_lebar.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_tinggi       = $request->input('ukuran_tinggi.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_mata_pancing = $request->input('ukuran_mata_pancing.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_mata_jaring  = $request->input('ukuran_mata_jaring.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->jumlah              = $request->input('jumlah.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->satuan_jumlah       = $request->input('satuan_jumlah.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->kondisi             = $request->input('kondisi.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->tahun_pembelian     = $request->input('tahun_pembelian.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->harga_beli          = $request->input('harga_beli.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->satuan_harga_beli   = $request->input('satuan_harga_beli.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->umur_teknis         = $request->input('umur_teknis.' . $id_jenis_alat_tangkap, null);
            $jenis_alat_tangkap->sumber_modal        = $request->input('sumber_modal.' . $id_jenis_alat_tangkap, null);

            $jenis_alat_tangkap->save();
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

        $master_jenis_alat_tangkap = [];
        foreach (MasterJenisAlatTangkap::all() as $index => $item) {
            $master_jenis_alat_tangkap[$item->id_master_jenis_alat_tangkap] = $item->jenis_alat_tangkap;
        }
        
        //Prep data
        $alat_tangkap = [];
        foreach (AlatTangkap::where('id_responden', $request->session()->get('id_responden'))->get() as $index => $item) {
            $alat_tangkap[$item->jenis_alat_tangkap] =
            [
                'id_alat_tangkap'     => $item->id_alat_tangkap,
                'nama_alat_tangkap'   => $item->nama_alat_tangkap,
                'ukuran_panjang'      => $item->ukuran_panjang,
                'ukuran_lebar'        => $item->ukuran_lebar,
                'ukuran_tinggi'       => $item->ukuran_tinggi,
                'ukuran_mata_jaring'  => $item->ukuran_mata_jaring,
                'ukuran_mata_pancing' => $item->ukuran_mata_pancing,
                'jumlah'              => $item->jumlah,
                'satuan_jumlah'       => $item->satuan_jumlah,
                'kondisi'             => $item->kondisi,
                'tahun_pembelian'     => $item->tahun_pembelian,
                'harga_beli'          => $item->harga_beli,
                'satuan_harga_beli'   => $item->satuan_harga_beli,
                'umur_teknis'         => $item->umur_teknis,
                'sumber_modal'        => $item->sumber_modal,
            ];
        }

        return view('alat_tangkap.edit', [
            'subtitle'                  => '702. Jenis alat tangkap yang digunakan',
            'action'                    => 'alat-tangkap/edit/' . $request->session()->get('id_responden'),
            'method'                    => 'patch',
            'jenis_alat_tangkap'        => $this->jenis_alat_tangkap,
            'master_kondisi'            => $this->master_kondisi,
            'master_sumber_modal'       => $this->master_sumber_modal,
            'master_jenis_alat_tangkap' => $master_jenis_alat_tangkap,
            'alat_tangkap'              => $alat_tangkap,
            'nomor'                     => 1
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
        // Save alat tangkap
        foreach($request->input('nama_alat_tangkap') as $id_alat_tangkap => $item)
        {
            $jenis_alat_tangkap                      = AlatTangkap::find($id_alat_tangkap);
            $jenis_alat_tangkap->nama_alat_tangkap   = $request->input('nama_alat_tangkap.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_panjang      = $request->input('ukuran_panjang.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_lebar        = $request->input('ukuran_lebar.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_tinggi       = $request->input('ukuran_tinggi.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_mata_pancing = $request->input('ukuran_mata_pancing.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->ukuran_mata_jaring  = $request->input('ukuran_mata_jaring.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->jumlah              = $request->input('jumlah.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->satuan_jumlah       = $request->input('satuan_jumlah.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->kondisi             = $request->input('kondisi.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->tahun_pembelian     = $request->input('tahun_pembelian.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->harga_beli          = $request->input('harga_beli.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->satuan_harga_beli   = $request->input('satuan_harga_beli.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->umur_teknis         = $request->input('umur_teknis.' . $id_alat_tangkap, null);
            $jenis_alat_tangkap->sumber_modal        = $request->input('sumber_modal.' . $id_alat_tangkap, null);

            $jenis_alat_tangkap->save();
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
        AlatTangkap::where('id_responden', $request->session()->get('id_responden'))->delete();
        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
