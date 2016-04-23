<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $perahu = Perahu::all();
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
        // $validator = Validator::make($request->all(), [
        //     'nama_responden' => 'required|min:5',
        //     'alamat'         => 'required',
        //     'aktif'          => 'required',
        //     'kategori'       => 'required',
        //     'jenis_kelamin'  => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('responden')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // $responden = new Responden;
        // $responden->nama_responden = $request->nama_responden;
        // $responden->alamat         = $request->alamat;
        // $responden->aktif          = $request->aktif;
        // $responden->kategori       = $request->kategori;
        // $responden->jenis_kelamin  = $request->jenis_kelamin;
        // $responden->save();

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
