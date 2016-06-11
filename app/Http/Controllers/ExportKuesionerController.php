<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Responden;
use App\Enumerator;
use App\KarakteristikRumahTangga;
use App\MasterJenisPekerjaan;
use App\JenisPekerjaanRumahTg;
use App\MasterJenisAset;
use App\AsetRumahTangga;
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
        // print_r(MasterJenisAset::all());die();
        // Set column
        $columns = array_merge($columns, 
            $this->get_column_responden(),
            $this->get_column_karak_rumah_tangga(),
            $this->get_column_pekerjaan_rumah_tangga(),
            $this->get_column_aset_rumah_tangga()
        );
        
        $table[] = $columns;

        // Set data each responden
        foreach (Responden::all() as $key => $value) {
            $row = [];
            $row = array_merge($row, 
                $this->get_data_responden($value->id_responden),
                $this->get_data_karak_rumah_tangga($value->id_responden),
                $this->get_data_pekerjaan_rumah_tangga($value->id_responden),
                $this->get_data_aset_rumah_tangga($value->id_responden)
            );

            $table[] = $row;
        }

        // print_r($table); die();

        Excel::create('Panelkanas_2016', function($excel) use($table){
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

        })->export('xlsx');
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

    public function get_column_pekerjaan_rumah_tangga()
    {
        $column = [];
        for ($i = 1; $i <= 8; $i++) { 
            $column = array_merge($column, [
                'Nama ART yang Bekerja_' . $i,
                'Status Dalam Rumah Tangga ART_' . $i,
                'Pekerjaan 1_' . $i,
                'Jumlah Pendapatan (Rp/Tahun) 1_' . $i,
                'Pekerjaan 2_' . $i,
                'Jumlah Pendapatan (Rp/Tahun) 2_' . $i,
                'Pekerjaan 3_' . $i,
                'Jumlah Pendapatan (Rp/Tahun) 3_' . $i
            ]);
        }

        return $column;
    }


    public function get_column_aset_rumah_tangga()
    {
        $column = [];
            
        for ($i = 1; $i <= 10 ; $i++) { 
            $column = array_merge($column, [
                'Jenis Aset_50' . $i,
                'Volume (unit)_50' . $i,
                'Satuan_50' . $i,
                'Nilai Satuan (Rp.)_50' . $i,
                'Nilai Total (Rp.)_50' . $i,
                'Cara Perolehan_50' . $i,
                'Jenis Aset (P/TP)_50' . $i,
                'Berapakah Pendapatan Dari Aset Produktif Tersebut (Rp/Tahun)_50' . $i,
            ]);

            if ($i == 3)
            {
                for ($j = 2; $j <= 4 ; $j++) { 
                    $column = array_merge($column, [
                        'Jenis Aset_50' . $i . $j,
                        'Volume (unit)_50' . $i . $j,
                        'Satuan_50' . $i . $j,
                        'Nilai Satuan (Rp.)_50' . $i . $j,
                        'Nilai Total (Rp.)_50' . $i . $j,
                        'Cara Perolehan_50' . $i . $j,
                        'Jenis Aset (P/TP)_50' . $i . $j,
                        'Berapakah Pendapatan Dari Aset Produktif Tersebut (Rp/Tahun)_50' . $i . $j,
                    ]);
                }
            }
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

    public function get_data_pekerjaan_rumah_tangga($id_responden)
    {
        $status_keluarga = [
            1 => 'Kepala Keluarga', 
            2 => 'Istri', 
            3 => 'Anak', 
            4 => 'Anggota Rumah Tangga Lainnya'
        ];

        // Master jenis pekerjaan
        $jenis_pekerjaan = [];
        foreach (MasterJenisPekerjaan::all() as $key => $item) {
            $jenis_pekerjaan[$item->id_master_jenis_pekerjaan] = $item->jenis_pekerjaan;
        }

        $data = [];
        foreach (JenisPekerjaanRumahTg::where('id_responden', $id_responden)->get() as $key => $item) {
            $data = array_merge($data, [
                $item['nama'],
                isset($status_keluarga[$item['status_keluarga']])? $status_keluarga[$item['status_keluarga']]: null,
                isset($jenis_pekerjaan[$item['jenis_pekerjaan1']])? $jenis_pekerjaan[$item['jenis_pekerjaan1']]: null,
                $item['pendapatan1'],
                isset($jenis_pekerjaan[$item['jenis_pekerjaan2']])? $jenis_pekerjaan[$item['jenis_pekerjaan2']]: null,
                $item['pendapatan2'],
                isset($jenis_pekerjaan[$item['jenis_pekerjaan3']])? $jenis_pekerjaan[$item['jenis_pekerjaan3']]: null,
                $item['pendapatan3']
            ]);
        }

        return $data;
    }

    public function get_data_aset_rumah_tangga($id_responden)
    {
        $cara_perolehan = [
            1 => 'Beli', 
            2 => 'Warisan', 
            3 => 'Pemberian'
        ];

        $jenis_aset = [
            1 => 'Produktif', 
            2 => 'Tidak Produktif'
        ];

        $master_jenis_aset = [];
        foreach (MasterJenisAset::all() as $index => $item) {
            $master_jenis_aset[$item->id_master_jenis_aset] = [
                'jenis_aset' => $item->jenis_aset,
                'satuan'     => $item->satuan,
            ];
        }

        $data = [];
        foreach (AsetRumahTangga::where('id_responden', $id_responden)->orderBy('id_master_jenis_aset', 'ASC')->get() as $key => $item) {
            $data = array_merge($data, [
                $master_jenis_aset[$item['id_master_jenis_aset']]['jenis_aset'],
                $item['volume'],
                $master_jenis_aset[$item['id_master_jenis_aset']]['satuan'],
                $item['nilai_satuan'],
                $item['nilai_total'],
                isset($cara_perolehan[$item['cara_perolehan']])? $cara_perolehan[$item['cara_perolehan']]: null,
                isset($jenis_aset[$item['jenis_aset']])? $jenis_aset[$item['jenis_aset']]: null,
                $item['pendapatan_produktif']
            ]);
        }

        return $data;
    }
}