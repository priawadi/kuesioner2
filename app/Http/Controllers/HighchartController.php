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

        $array = "";
        $prefix = false;
        $array_assoc = $lokasi;

        for ($i = 0; $i < count($array_assoc); $i++){
            if ($prefix) {
                $array .= "," . "{ name: '" . $array_assoc[$i]['nama_lokasi'] . "', data: [" . $array_assoc[$i]['jumlah_responden'] . "]}"; 
                } else {
                $array .= "{ name: '" . $array_assoc[$i]['nama_lokasi'] . "', data: [" . $array_assoc[$i]['jumlah_responden'] . "]}"; 
                }
            $prefix = true;
        }

        // print_r($array);
        // die();

        return view('highchart')
                ->with('suku', json_encode($jenis_suku))
                ->with('value', json_encode($value, JSON_NUMERIC_CHECK))
                ->with('array', ($array));
    }
}
