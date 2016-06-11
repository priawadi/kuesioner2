<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Responden;
use App\Enumerator;
use Excel;

class ExportKuesionerController extends Controller
{
    /**
     * Export data into excel
     *
     * @return \Illuminate\Http\Response
     */
    public function export_to_excel()
    {
        // Init
        $table   = [];
        $columns = [];
        
        // Set column
        $columns = array_merge($columns, $this->get_column_responden());
        
        $table[] = $columns;

        $count = 0;
        foreach (Responden::all() as $key => $value) {
            $data = [];
            $data = array_merge($data, $this->get_data_responden($value->id_responden));

            $table[] = $data;
        }

        // print_r($table);

        Excel::create('Keramba', function($excel) use($table){
            // Our first sheet
            $excel->sheet('First sheet', function($sheet) use($table){
                
                $sheet->fromArray(
                    $table,
                    null,
                    'A1',
                    false,
                    false
                );


                // Set format of cell
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setFontWeight('bold');

                });
            });

        })->export('xls');
    }

    public function get_column_responden()
    {
        return [
            'ID',
            'Nama Responden',
            'Etnis_Suku',
            'RT_Kampung',
            'RW_Dusun',
            'Desa_Kelurahan',
            'Kecamatan',
            'Kabupaten',
            'Provinsi',
            'Status Responden',
            'Pengalaman Usaha',
            'Nama Enumerator',
            'Tanggal Wawancara',
            'Tanggal Editing',
            'Nama Pemvalidasi',
        ];
    }

    public function get_data_responden($id_responden)
    {
        $status_responden = [
            1 => 'Pemilik',
            2 => 'Nahkoda',
            3 => 'ABK',
        ];

        $responden  = Responden::find($id_responden);
        $enumerator = Enumerator::where('id_responden', $id_responden)->first();
        // print_r($enumerator);die();
        return [
            $responden->id_responden,
            $responden->nama_responden,
            $responden->suku,
            $responden->kampung,
            $responden->dusun,
            $responden->kelurahan,
            $responden->kecamatan,
            $responden->kabupaten,
            $responden->provinsi,
            isset($status_responden[$responden->stat_responden])? $status_responden[$responden->stat_responden]: null,
            $responden->pengalaman_usaha,
            $enumerator['nama_enumerator'],
            $enumerator['tanggal_wawancara'],
            $enumerator['tanggal_editing'],
            $enumerator['nama_pemvalidasi'],
        ];        
    }
}
