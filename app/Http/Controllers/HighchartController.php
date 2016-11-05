<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Responden;
use App\KarakteristikRumahTangga;
use App\Enumerator;
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

        $lokasi = 
        //Responden::select(DB::raw("count(lokasi) as jumlah_responden, CASE WHEN lokasi = 1 THEN 'Batam' WHEN lokasi = 2 THEN 'Sibolga' WHEN lokasi = 3 THEN 'Langkat' WHEN lokasi = 4 THEN 'Indramayu' WHEN lokasi = 5 THEN 'Pangkajene Kepulauan' WHEN lokasi = 6 THEN 'Bitung' WHEN lokasi = 7 THEN 'Sorong' WHEN lokasi = 8 THEN 'Merauke' WHEN lokasi = 9 THEN 'Maluku Tengah' WHEN lokasi = 10 THEN 'Cilacap' ELSE 'Tidak ada data' END AS nama_lokasi"))
                Responden::select(DB::raw("count(lokasi) as jumlah_responden, lokasi as nama_lokasi"))
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

        $rata_umur = KarakteristikRumahTangga::select(DB::raw("ROUND(AVG(umur)) as umur_rataan"))
        ->where('status_keluarga', '!=', '0')
        ->get();

        $total_keluarga = KarakteristikRumahTangga::select(DB::raw("count(*) as total_keluarga"))
        ->where('status_keluarga', '!=', '0')
        //->where('jenis_kelamin', '=', '1')
        //->orwhere('jenis_kelamin', '=', '2')
        ->get();

        $total_keluarga_pria = KarakteristikRumahTangga::select(DB::raw("count(*) as jumlah_pria"))
        ->where('jenis_kelamin', '=', '1')
        ->get();

        $total_keluarga_wanita = KarakteristikRumahTangga::select(DB::raw("count(*) as jumlah_wanita"))
        ->where('jenis_kelamin', '=', '2')
        ->get();        

        $total_responden = Responden::select(DB::raw("count(*) as jumlah_responden"))
        ->get();

        $rataan_keluarga = round(($total_keluarga[0]->total_keluarga)/($total_responden[0]->jumlah_responden));


        // print_r($rataan_keluarga);
        // die();

        return view('highchart')
                ->with('suku', json_encode($jenis_suku))
                ->with('value', json_encode($value, JSON_NUMERIC_CHECK))
                ->with('array', $array)
                ->with('umur_rataan', $rata_umur[0]->umur_rataan)
                ->with('total_keluarga', $total_keluarga[0]->total_keluarga)
                ->with('total_keluarga_pria', $total_keluarga_pria[0]->jumlah_pria)
                ->with('total_keluarga_wanita', $total_keluarga_wanita[0]->jumlah_wanita)
                ->with('total_responden', $total_responden[0]->jumlah_responden)
                ->with('rataan_keluarga', $rataan_keluarga);
    }
}
