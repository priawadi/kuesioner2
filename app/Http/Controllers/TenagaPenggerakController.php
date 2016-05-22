<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Mesin;

class TenagaPenggerakController extends Controller
{
    var $jenis_mesin_penggerak = [ 
        1 => 'Perahu tanpa motor', 
        2 => 'Motor tempel',
        3 => 'On board',
    ];

    var $jenis_bahan_bakar = [ 
        1 => 'Bensin', 
        2 => 'Solar',
        3 => 'Minyak tanah',
        4 => 'Campuran',
        5 => 'Lainnya',
    ];

    var $kondisi = [ 
        1 => 'Baru', 
        2 => 'Bekas',
    ];

    var $sumber_modal = [ 
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
        
        return view('tenaga_penggerak.form', [
            'subtitle'              => '703. Mesin penggerak perahu/kapal: ',
            'action'                => 'tenaga-penggerak/tambah',
            'method'                => 'post',
            'jenis_mesin_penggerak' => $this->jenis_mesin_penggerak,
            'jenis_bahan_bakar'     => $this->jenis_bahan_bakar,
            'sumber_modal'          => $this->sumber_modal,
            'kondisi'               => $this->kondisi,
            'nomor'                 => 1
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

        $mesin               = new Mesin;
        $mesin->id_responden = $request->session()->get('id_responden');
        $mesin->jenis        = $request->input('mesin_penggerak.jenis', null);

        if (in_array($request->input('mesin_penggerak.jenis', null), [2, 3]))
        {
            $mesin->merk            = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.merk', null);
            $mesin->bahan_bakar     = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.bahan_bakar', null);
            $mesin->kekuatan        = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.kekuatan', null);
            $mesin->jumlah          = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.jumlah', null);
            $mesin->kondisi         = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.kondisi', null);
            $mesin->tahun_pembelian = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.tahun_pembelian', null);
            $mesin->harga_beli      = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.harga_beli', null);
            $mesin->umur_teknis     = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.umur_teknis', null);
            $mesin->sumber_modal    = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.sumber_modal', null);
        }
        
        $mesin->save();

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
        
        return view('tenaga_penggerak.edit', [
            'subtitle'              => '703. Mesin penggerak perahu/kapal: ',
            'action'                => 'tenaga-penggerak/edit/' . $request->session()->get('id_responden'),
            'method'                => 'patch',
            'jenis_mesin_penggerak' => $this->jenis_mesin_penggerak,
            'jenis_bahan_bakar'     => $this->jenis_bahan_bakar,
            'sumber_modal'          => $this->sumber_modal,
            'kondisi'               => $this->kondisi,
            'nomor'                 => 1,
            
            // Data
            'mesin'                 => Mesin::where('id_responden', $request->session()->get('id_responden'))->first(),
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
        $mesin               = Mesin::where('id_responden', $request->session()->get('id_responden'))->first();
        $mesin->jenis        = $request->input('mesin_penggerak.jenis', null);

        if (in_array($request->input('mesin_penggerak.jenis', null), [2, 3]))
        {
            $mesin->merk            = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.merk', null);
            $mesin->bahan_bakar     = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.bahan_bakar', null);
            $mesin->kekuatan        = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.kekuatan', null);
            $mesin->jumlah          = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.jumlah', null);
            $mesin->kondisi         = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.kondisi', null);
            $mesin->tahun_pembelian = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.tahun_pembelian', null);
            $mesin->harga_beli      = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.harga_beli', null);
            $mesin->umur_teknis     = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.umur_teknis', null);
            $mesin->sumber_modal    = $request->input('mesin_penggerak.' . $request->input('mesin_penggerak.jenis') . '.sumber_modal', null);
        }
        else
        {
            $mesin->merk            = null;
            $mesin->bahan_bakar     = null;
            $mesin->kekuatan        = null;
            $mesin->jumlah          = null;
            $mesin->kondisi         = null;
            $mesin->tahun_pembelian = null;
            $mesin->harga_beli      = null;
            $mesin->umur_teknis     = null;
            $mesin->sumber_modal    = null;   
        }
        
        $mesin->save();

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
        Mesin::where('id_responden', $request->session()->get('id_responden'))->delete();
        return redirect('responden/lihat/' . $request->session()->get('id_responden'));
    }
}
