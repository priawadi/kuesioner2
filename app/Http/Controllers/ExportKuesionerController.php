<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Responden;
use App\Enumerator;
use App\KarakteristikRumahTangga;
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
        $columns = array_merge($columns, 
            $this->get_column_responden(),
            $this->get_column_karak_rumah_tangga()
        );
        
        $table[] = $columns;

        $count = 0;
        foreach (Responden::all() as $key => $value) {
            $row = [];
            $row = array_merge($row, 
                $this->get_data_responden($value->id_responden),
                $this->get_data_karak_rumah_tangga($value->id_responden)
            );

            $table[] = $row;
        }

        // print_r($table); die();

        Excel::create('Panelkanas_2016', function($excel) use($table){
            // Our first sheet
            $excel->sheet('Sheet1', function($sheet) use($table){
                
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

    public function get_column_karak_rumah_tangga()
    {
        $column = [];
            
        for ($i = 1; $i <= 10 ; $i++) { 
            $column = array_merge($column, [
                'Nama_' . $i,
                'Status Dalam Rumah Tangga_' . $i,
                'Jenis Kelamin_' . $i,
                'Umur_' . $i,
                'Formal_' . $i,
                'Non Formal_' . $i,
                'Waktu Pelaksanaan Pelatihan(hari)_' . $i,
                'Sumber Dana Mengikuti Pelatihan_' . $i,
                'Tujuan Mengikuti Pelatihan_' . $i,
                'Sebutkan tujuan_' . $i,
            ]);
        }

        return $column;
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

    public function get_data_karak_rumah_tangga($id_responden)
    {
        $jenis_kelamin = [ 
            1 => 'Pria', 
            2 => 'Wanita'
        ];

        $status_keluarga = [ 
            1 => 'Kepala Keluarga', 
            2 => 'Istri', 
            3 => 'Anak', 
            4 => 'Anggota Rumah Tangga Lainnya'
        ];

        $sumber_pelatihan = [
            1 => 'Program Pemerintah', 
            2 => 'Program LSM', 
            3 => 'Biaya Sendiri'
        ];

        $tujuan_pelatihan = [ 
            1 => 'Kebutuhan Pekerjaan', 
            2 => 'Materi Menarik', 
            3 => 'Lainnya'
        ];

        $data = [];
        foreach (KarakteristikRumahTangga::where('id_responden', $id_responden)->get() as $key => $item) {
            $data = array_merge($data, [
                $item['nama'],
                isset($status_keluarga[$item['status_keluarga']])? $status_keluarga[$item['status_keluarga']]: null,
                isset($jenis_kelamin[$item['jenis_kelamin']])? $jenis_kelamin[$item['jenis_kelamin']]: null,
                $item['umur'],
                $item['lama_pendidikan_formal'],
                $item['jenis_pelatihan'],
                $item['waktu_pelaksanaan'],
                isset($sumber_pelatihan[$item['sumber_dana']])? $sumber_pelatihan[$item['sumber_dana']]: null,
                isset($tujuan_pelatihan[$item['tujuan_pelatihan']])? $tujuan_pelatihan[$item['tujuan_pelatihan']]: null,
                $item['tujuan_pelatihan_lain']
            ]);
        }

        return $data;
    }
}
