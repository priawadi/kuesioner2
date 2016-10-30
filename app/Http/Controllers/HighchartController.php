<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Responden;
use DB;

class HighchartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suku = Responden::select(DB::raw("suku as jenis_suku, count(suku) as value"))
                ->groupBy(DB::raw("suku"))
                ->get()->toArray();
        $jenis_suku   = array_column($suku, 'jenis_suku');
        $value        = array_column($suku, 'value');

        $lokasi = Responden::select(DB::raw("count(lokasi) as jumlah_responden, CASE WHEN lokasi = 1 THEN 'Batam' WHEN lokasi = 2 THEN 'Sibolga' WHEN lokasi = 3 THEN 'Langkat' WHEN lokasi = 4 THEN 'Indramayu' WHEN lokasi = 5 THEN 'Pangkajene Kepulauan' WHEN lokasi = 6 THEN 'Bitung' WHEN lokasi = 7 THEN 'Sorong' WHEN lokasi = 8 THEN 'Merauke' WHEN lokasi = 9 THEN 'Maluku Tengah' WHEN lokasi = 10 THEN 'Cilacap' ELSE 'Tidak ada data' END AS nama_lokasi"))
                ->groupBy(DB::raw("lokasi"))
                ->get()->toArray();
        $jumlah_responden   = array_column($lokasi, 'jumlah_responden');
        $nama_lokasi        = array_column($lokasi, 'nama_lokasi');
        // print_r($nama_lokasi);
        // die();

        return view('highchart')
                ->with('suku', json_encode($jenis_suku))
                ->with('value', json_encode($value, JSON_NUMERIC_CHECK))
                ->with('jumlah_responden', json_encode($jumlah_responden, JSON_NUMERIC_CHECK))
                ->with('nama_lokasi', json_encode($nama_lokasi));
    }
}
