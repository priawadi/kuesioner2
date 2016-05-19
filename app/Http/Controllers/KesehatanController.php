<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kesehatan;
use Validator;

class KesehatanController extends Controller
{

    var $status_daftar = 
    [
        1 => 'Ya',
        2 => 'Tidak',
    ];

    var $penggunaan_asuransi =
    [
        1 => 'Sering',
        2 => 'Jarang',
        3 => 'Tidak Pernah',
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
        
        return view('kesehatan.form', [
            'subtitle'            => 'Kesehatan',
            'action'              => 'kesehatan/tambah',
            'method'              => 'post',
            'status_daftar'       => $this->status_daftar,
            'penggunaan_asuransi' => $this->penggunaan_asuransi,
            'prev_action'         => 'responden',
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
        // Save data 
        $kesehatan                       = new Kesehatan;
        $kesehatan->id_responden         = $request->session()->get('id_responden');
        $kesehatan->sakit_setahun_ringan = $request->input('kesehatan.sakit_setahun_ringan', null);
        $kesehatan->sakit_setahun_berat  = $request->input('kesehatan.sakit_setahun_berat', null);

        $kesehatan->ringan_dibiarkan   = $request->input('kesehatan.ringan_dibiarkan', null);
        $kesehatan->ringan_beli_obat   = $request->input('kesehatan.ringan_beli_obat', null);
        $kesehatan->ringan_puskesmas   = $request->input('kesehatan.ringan_puskesmas', null);
        $kesehatan->ringan_dokter      = $request->input('kesehatan.ringan_dokter', null);
        $kesehatan->ringan_alternatif  = $request->input('kesehatan.ringan_alternatif', null);
        $kesehatan->ringan_rumah_sakit = $request->input('kesehatan.ringan_rumah_sakit', null);
        $kesehatan->berat_dibiarkan    = $request->input('kesehatan.berat_dibiarkan', null);
        $kesehatan->berat_beli_obat    = $request->input('kesehatan.berat_beli_obat', null);
        $kesehatan->berat_puskesmas    = $request->input('kesehatan.berat_puskesmas', null);
        $kesehatan->berat_dokter       = $request->input('kesehatan.berat_dokter', null);
        $kesehatan->berat_alternatif   = $request->input('kesehatan.berat_alternatif', null);
        $kesehatan->berat_rumah_sakit  = $request->input('kesehatan.berat_rumah_sakit', null);

        $kesehatan->alasan_dibiarkan   = $request->input('kesehatan.alasan_dibiarkan', null);
        $kesehatan->alasan_beli_obat   = $request->input('kesehatan.alasan_beli_obat', null);
        $kesehatan->alasan_puskesmas   = $request->input('kesehatan.alasan_puskesmas', null);
        $kesehatan->alasan_dokter      = $request->input('kesehatan.alasan_dokter', null);
        $kesehatan->alasan_alternatif  = $request->input('kesehatan.alasan_alternatif', null);
        $kesehatan->alasan_rumah_sakit = $request->input('kesehatan.alasan_rumah_sakit', null);

        $kesehatan->jamkesmas      = $request->input('kesehatan.jamkesmas', null);
        $kesehatan->bpjs           = $request->input('kesehatan.bpjs', null);
        $kesehatan->asuransi       = $request->input('kesehatan.asuransi', null);
        $kesehatan->frek_jamkesmas = $request->input('kesehatan.frek_jamkesmas', null);
        $kesehatan->frek_bpjs      = $request->input('kesehatan.frek_bpjs', null);
        $kesehatan->frek_asuransi  = $request->input('kesehatan.frek_asuransi', null);

        $kesehatan->save();

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
        return view('kesehatan.edit', [
            'subtitle'            => 'Kesehatan',
            'action'              => 'kesehatan/edit/' . $request->session()->get('id_responden'),
            'method'              => 'patch',
            'status_daftar'       => $this->status_daftar,
            'penggunaan_asuransi' => $this->penggunaan_asuransi,
            'prev_action'         => 'responden',
            
            // Data
            'kesehatan'           => Kesehatan::where('id_responden', $request->session()->get('id_responden'))->first(),
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
        // Save data 
        $kesehatan                       = Kesehatan::where('id_responden', $request->session()->get('id_responden'))->first();
        $kesehatan->sakit_setahun_ringan = $request->input('kesehatan.sakit_setahun_ringan', null);
        $kesehatan->sakit_setahun_berat  = $request->input('kesehatan.sakit_setahun_berat', null);

        $kesehatan->ringan_dibiarkan   = $request->input('kesehatan.ringan_dibiarkan', null);
        $kesehatan->ringan_beli_obat   = $request->input('kesehatan.ringan_beli_obat', null);
        $kesehatan->ringan_puskesmas   = $request->input('kesehatan.ringan_puskesmas', null);
        $kesehatan->ringan_dokter      = $request->input('kesehatan.ringan_dokter', null);
        $kesehatan->ringan_alternatif  = $request->input('kesehatan.ringan_alternatif', null);
        $kesehatan->ringan_rumah_sakit = $request->input('kesehatan.ringan_rumah_sakit', null);
        $kesehatan->berat_dibiarkan    = $request->input('kesehatan.berat_dibiarkan', null);
        $kesehatan->berat_beli_obat    = $request->input('kesehatan.berat_beli_obat', null);
        $kesehatan->berat_puskesmas    = $request->input('kesehatan.berat_puskesmas', null);
        $kesehatan->berat_dokter       = $request->input('kesehatan.berat_dokter', null);
        $kesehatan->berat_alternatif   = $request->input('kesehatan.berat_alternatif', null);
        $kesehatan->berat_rumah_sakit  = $request->input('kesehatan.berat_rumah_sakit', null);

        $kesehatan->alasan_dibiarkan   = $request->input('kesehatan.alasan_dibiarkan', null);
        $kesehatan->alasan_beli_obat   = $request->input('kesehatan.alasan_beli_obat', null);
        $kesehatan->alasan_puskesmas   = $request->input('kesehatan.alasan_puskesmas', null);
        $kesehatan->alasan_dokter      = $request->input('kesehatan.alasan_dokter', null);
        $kesehatan->alasan_alternatif  = $request->input('kesehatan.alasan_alternatif', null);
        $kesehatan->alasan_rumah_sakit = $request->input('kesehatan.alasan_rumah_sakit', null);

        $kesehatan->jamkesmas      = $request->input('kesehatan.jamkesmas', null);
        $kesehatan->bpjs           = $request->input('kesehatan.bpjs', null);
        $kesehatan->asuransi       = $request->input('kesehatan.asuransi', null);
        $kesehatan->frek_jamkesmas = $request->input('kesehatan.frek_jamkesmas', null);
        $kesehatan->frek_bpjs      = $request->input('kesehatan.frek_bpjs', null);
        $kesehatan->frek_asuransi  = $request->input('kesehatan.frek_asuransi', null);


        $kesehatan->save();

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

        Kesehatan::where('id_responden', $request->session()->get('id_responden'))->delete();
        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
