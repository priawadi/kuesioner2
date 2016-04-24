<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;

class KarRumahTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('karakteristik_rumah_tangga.form', [
            'subtitle'         => 'Karakteristik Anggota Rumah Tangga dan Pendatapan',
            'action'           => 'karakteristik-rumah-tangga',
            'jenis_kelamin'    => [ 1 => 'Pria', 2 => 'Wanita'],
            'status_keluarga'  => [ 1 => 'Kepala Keluarga', 2 => 'Istri', 3 => 'Anak', 4 => 'Anggota Rumah Tangga Lainnya (Sebutkan)'],
            'pend_formal'      => [ 0 => 'Tidak sekolah/belum tamat SD', 1 => 'SD', 2 => 'SLTP', 3 => 'SLTA', 4 => 'Diploma I/II/III/Akademi', 5 => 'Universitas'],
            'sumber_pelatihan' => [ 1 => 'Program Pemerintah', 2 => 'Program LSM', 3 => 'Biaya Sendiri'],
            'tujuan_pelatihan' => [ 1 => 'Kebutuhan Pekerjaan', 2 => 'Karena Hobi', 3 => 'Lainnya (Sebutkan)'],
            'jml_isian'        => 10
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
        // Get ids of pertanyaan
        $jml_isian = 10;
        $jawaban   = $request->get('status_keluarga');
        $rules     = [];
        for ($i = 1; $i <= $jml_isian; $i++)
        {
            // Validate input if choose other option
            if ($jawaban[$i] == 4)
            {   
                $rules['status_keluarga_lain.' . $i] = 'required|max:500';
            }
        }
        
        // Validate input
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('karakteristik-rumah-tangga')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Save jawaban into database
        $nama                 = $request->get('nama');
        $status_keluarga_lain = $request->get('status_keluarga_lain');
        $jenis_kelamin        = $request->get('jenis_kelamin');
        // var_dump($nama);
        // var_dump($status_keluarga_lain);
        // foreach($pertanyaan as $key => $item)
        // {
        //     $jwb_rasa_percaya = new JwbRasaPercaya;
        //     $jwb_rasa_percaya->id_master_opsional = $jawaban[$item->id_rasa_percaya];
        //     $jwb_rasa_percaya->id_responden       = 1;
        //     $jwb_rasa_percaya->id_rasa_percaya    = $item->id_rasa_percaya;
        //     if ($item->is_reason)
        //     {
        //         $jwb_rasa_percaya->jwb_teks_rasa_percaya = $alasan[$item->id_rasa_percaya];
        //     }
        //     $jwb_rasa_percaya->save();
        // }

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
