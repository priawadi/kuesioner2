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
use App\Kesehatan;
use App\Perahu;
use App\MasterJenisAlatTangkap;
use App\AlatTangkap;
use App\Mesin;
use App\AsetPendukungUsaha;
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
            $this->get_column_aset_rumah_tangga(),
            $this->get_column_kesehatan(),
            $this->get_column_perahu(),
            $this->get_column_alat_tangkap(),
            $this->get_column_tenaga_penggerak(),
            $this->get_column_aset_pendukung_usaha()
        );
        
        $table[] = $columns;

        // Set data each responden
        foreach (Responden::all() as $key => $value) {
            $row = [];
            $row = array_merge($row, 
                $this->get_data_responden($value->id_responden),
                $this->get_data_karak_rumah_tangga($value->id_responden),
                $this->get_data_pekerjaan_rumah_tangga($value->id_responden),
                $this->get_data_aset_rumah_tangga($value->id_responden),
                $this->get_data_kesehatan($value->id_responden),
                $this->get_data_perahu($value->id_responden),
                $this->get_data_alat_tangkap($value->id_responden),
                $this->get_data_tenaga_penggerak($value->id_responden),
                $this->get_data_aset_pendukung_usaha($value->id_responden)
            );

            $table[] = $row;
        }
        // echo 'kolom: ' . count($table[0]) . '<br>';
        // echo 'data: ' . count($table[1]);
        // print_r($table); 
        // die();

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
            
        for ($i = 1; $i <= 7 ; $i++) { 
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


    public function get_column_kesehatan()
    {
        return [
            'Berapa kali anda dan anggota keluarga anda sakit dalam satu tahun terakhir_601A',
            'Frekuensi (kali/tahun)_601A',
            'Berapa kali anda dan anggota keluarga anda sakit dalam satu tahun terakhir_601B',
            'Frekuensi (kali/tahun)_601B',
            'Kemana anda dan anggota keluarga berobat ketika sakit_602A',
            'Dibiarkan (kali)_602A',
            'Beli obat Warung (kali)_602A',
            'Puskesmas (kali)_602A',
            'Dokter (kali)_602A',
            'Pengobatan Alternatif (kali)_602A',
            'Rumah Sakit (kali)_602A',
            'Kemana anda dan anggota keluarga berobat ketika sakit_602B',
            'Dibiarkan (kali)_602B',
            'Beli obat Warung (kali)_602B',
            'Puskesmas (kali)_602B',
            'Dokter (kali)_602B',
            'Pengobatan Alternatif (kali)_602B',
            'Rumah Sakit (kali)_602B',
            'Alasan memilih dibiarkan ketika sakit_603A',
            'Alasan memilih Beli obat Warung ketika sakit_603B',
            'Alasan memilih Puskesmas ketika sakit_603C',
            'Alasan memilih Dokter ketika sakit_603D',
            'Alasan memilih Pengobatan Alternatif ketika sakit_603E',
            'Alasan memilih Rumah Sakit ketika sakit_603F',
            'Apakah anda terdaftar sebagai peserta jamkesmas_6041',
            'Apakah anda terdaftar sebagai peserta BPJS/Askes_6042',
            'Apakah anda terdaftar sebagai peserta Asuransi swasta_6043',
            'Apakah anda sering menggunakan asuransi jamkesmas_605',
            'Apakah anda sering menggunakan asuransiBPJS/Askes_6052',
            'Apakah anda sering menggunakan asuransi Asuransi swasta_6053'
        ];
    }

    public function get_column_perahu()
    {
       return [
            '701A_Panjang (m)',
            '701A_Lebar (m)',
            '701A_Tinggi (m)',
            '701B (GT)',
            '701C (unit)',
            '701D',
            '701E',
            '701F (/unit)',
            '701G (tahun)',
            '701H',
        ];
    }

    public function get_column_alat_tangkap()
    {
        $column = [];
        for ($i = 1; $i <= 5 ; $i++) { 
            $column = array_merge($column, [
                '702.' . $i . 'A',
                '702.' . $i . 'B_Panjang (m)',
                '702.' . $i . 'B_Lebar (m)',
                '702.' . $i . 'B_Tinggi (m)',
                '702.' . $i . 'B_ukuran mata jaring',
                '702.' . $i . 'B_ukuran mata pancing',
                '702.' . $i . 'C',
                '702.' . $i . 'C',
                '702.' . $i . 'D',
                '702.' . $i . 'E',
                '702.' . $i . 'F (/satuan)',
                '702.' . $i . 'F (/satuan)',
                '702.' . $i . 'G (tahun)',
                '702.' . $i . 'H',
            ]);
        }

        return $column;
    }

    public function get_column_tenaga_penggerak()
    {
        return [
            '703.1',
            '703.2',
            '703.2A',
            '703.2B',
            '703.2C (PK)',
            '703.2D (unit)',
            '703.2E',
            '703.2F',
            '703.2G (/unit)',
            '703.2H',
            '703.2I',
            '703.3',
            '703.3A',
            '703.3B',
            '703.3C (PK)',
            '703.3D (unit)',
            '703.3E',
            '703.3F',
            '703.3G (/unit)',
            '703.3H',
            '703.3I',
        ];
    }

    public function get_column_aset_pendukung_usaha()
    {
        $column = [];
        for ($i = 1; $i <= 19 ; $i++) { 
            $column = array_merge($column, [
                '704.' . $i . '(2)',
                '704.' . $i . '(3) (unit)',
                '704.' . $i . '(4)',
                '704.' . $i . '(5) (tahun)',
                '704.' . $i . '(6)',
                '704.' . $i . '(7)'
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

    public function get_data_kesehatan($id_responden)
    {
        $status_daftar = 
        [
            1 => 'Ya',
            2 => 'Tidak',
        ];

        $penggunaan_asuransi =
        [
            1 => 'Sering',
            2 => 'Jarang',
            3 => 'Tidak Pernah',
        ];

        $kesehatan = Kesehatan::where('id_responden', $id_responden)->first();
        $data = [
            'Sakit ringan (flu, sakit kepala, masuk angin, dsb)',
            $kesehatan['sakit_setahun_ringan'],
            'Sakit berat (tipes, DBD, TBC dsb atau yang harus rawat inap)',
            $kesehatan['sakit_setahun_berat'],
            'Sakit Ringan',
            $kesehatan['ringan_dibiarkan'],
            $kesehatan['ringan_beli_obat'],
            $kesehatan['ringan_puskesmas'],
            $kesehatan['ringan_dokter'],
            $kesehatan['ringan_alternatif'],
            $kesehatan['ringan_rumah_sakit'],
            'Sakit Berat',
            $kesehatan['berat_dibiarkan'],
            $kesehatan['berat_beli_obat'],
            $kesehatan['berat_puskesmas'],
            $kesehatan['berat_dokter'],
            $kesehatan['berat_alternatif'],
            $kesehatan['berat_rumah_sakit'],
            $kesehatan['alasan_dibiarkan'],
            $kesehatan['alasan_beli_obat'],
            $kesehatan['alasan_puskesmas'],
            $kesehatan['alasan_dokter'],
            $kesehatan['alasan_alternatif'],
            $kesehatan['alasan_rumah_sakit'],
            isset($status_daftar[$kesehatan['jamkesmas']])? $status_daftar[$kesehatan['jamkesmas']]: null,
            isset($status_daftar[$kesehatan['bpjs']])? $status_daftar[$kesehatan['bpjs']]: null,
            isset($status_daftar[$kesehatan['asuransi']])? $status_daftar[$kesehatan['asuransi']]: null,
            isset($penggunaan_asuransi[$kesehatan['jamkesmas']])? $penggunaan_asuransi[$kesehatan['jamkesmas']]: null,
            isset($penggunaan_asuransi[$kesehatan['bpjs']])? $penggunaan_asuransi[$kesehatan['bpjs']]: null,
            isset($penggunaan_asuransi[$kesehatan['asuransi']])? $penggunaan_asuransi[$kesehatan['asuransi']]: null,
        ];

        return $data;
    }

    public function get_data_perahu($id_responden)
    {
        $sumber_modal = 
        [
            1 => 'Modal Sendiri', 
            2 => 'Kredit Formal', 
            3 => 'Kredit Informal', 
            4 => 'Bantuan Pemerintah', 
            5 => 'Keluarga', 
            6 => 'Campuran',
        ];

        $kondisi_perahu = 
        [
            1 => 'Baru', 
            2 => 'Bekas',
        ];

        $perahu = Perahu::where('id_responden', $id_responden)->first();
        $data = [
            $perahu['panjang'],
            $perahu['lebar'],
            $perahu['tinggi'],
            $perahu['tonase'],
            $perahu['jumlah'],
            isset($kondisi_perahu[$perahu['kondisi']])? $kondisi_perahu[$perahu['kondisi']]: null,
            $perahu['tahun_pembelian'],
            $perahu['harga_beli'],
            $perahu['umur_teknis'],
            isset($sumber_modal[$perahu['sumber_modal']])? $sumber_modal[$perahu['sumber_modal']]: null,
        ];

        return $data;
    }

    public function get_data_alat_tangkap($id_responden)
    {
        $jenis_alat_tangkap = [
            1 => 'Alat Tangkap Utama',
            2 => 'Alat Tangkap Alternatif 1',
            3 => 'Alat Tangkap Alternatif 2',
            4 => 'Alat Tangkap Alternatif 3',
            5 => 'Alat Tangkap Alternatif 4',
        ];

        $master_kondisi = [
            1 => 'Baru',
            2 => 'Bekas', 
        ];

        $master_sumber_modal = [
            1 => 'Modal sendiri',
            2 => 'Kredit formal', 
            3 => 'Kredit informal',
            4 => 'Bantuan pemerintah',
            5 => 'Keluarga',
            6 => 'Campuran',
        ];

        $master_jenis_alat_tangkap = [];
        foreach (MasterJenisAlatTangkap::all() as $index => $item) {
            $master_jenis_alat_tangkap[$item->id_master_jenis_alat_tangkap] = $item->jenis_alat_tangkap;
        }

        $data = [];
        foreach (AlatTangkap::where('id_responden', $id_responden)->orderBy('jenis_alat_tangkap', 'ASC')->get() as $key => $item) {
            $data = array_merge($data, [
                isset($master_jenis_alat_tangkap[$item['nama_alat_tangkap']])? $master_jenis_alat_tangkap[$item['nama_alat_tangkap']]: null,
                $item['ukuran_panjang'],
                $item['ukuran_lebar'],
                $item['ukuran_tinggi'],
                $item['ukuran_mata_pancing'],
                $item['ukuran_mata_jaring'],
                $item['jumlah'],
                $item['satuan_jumlah'],
                $item['kondisi'],
                $item['tahun_pembelian'],
                $item['harga_beli'],
                $item['satuan_harga_beli'],
                $item['umur_teknis'],
                $item['sumber_modal'],
            ]);
        }

        return $data;
    }

    public function get_data_tenaga_penggerak($id_responden)
    {
        $jenis_mesin_penggerak = [ 
            1 => 'Perahu tanpa motor', 
            2 => 'Motor tempel',
            3 => 'On board',
        ];

        $jenis_bahan_bakar = [ 
            1 => 'Bensin', 
            2 => 'Solar',
            3 => 'Minyak tanah',
            4 => 'Campuran',
            5 => 'Lainnya',
        ];

        $kondisi = [ 
            1 => 'Baru', 
            2 => 'Bekas',
        ];

        $sumber_modal = [ 
            1 => 'Modal sendiri', 
            2 => 'Kredit formal',
            3 => 'Kredit informal',
            4 => 'Bantuan pemerintah',
            5 => 'Keluarga',
            6 => 'Campuran',
        ];

        $mesin = Mesin::where('id_responden', $id_responden)->first();
        return [
            isset($mesin['jenis']) && $mesin['jenis'] == 1? $jenis_mesin_penggerak[$mesin['jenis']]: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2? $jenis_mesin_penggerak[$mesin['jenis']]: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2? $mesin['merk']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2 && isset($jenis_bahan_bakar[$mesin['bahan_bakar']])? $jenis_bahan_bakar[$mesin['bahan_bakar']]: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2? $mesin['kekuatan']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2? $mesin['jumlah']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2 && isset($kondisi[$mesin['kondisi']])? $kondisi[$mesin['kondisi']]: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2? $mesin['tahun_pembelian']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2? $mesin['harga_beli']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2? $mesin['umur_teknis']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 2 && isset($sumber_modal[$mesin['sumber_modal']])? $sumber_modal[$mesin['sumber_modal']]: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3? $jenis_mesin_penggerak[$mesin['jenis']]: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3? $mesin['merk']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3 && isset($jenis_bahan_bakar[$mesin['bahan_bakar']])? $jenis_bahan_bakar[$mesin['bahan_bakar']]: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3? $mesin['kekuatan']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3? $mesin['jumlah']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3 && isset($kondisi[$mesin['kondisi']])? $kondisi[$mesin['kondisi']]: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3? $mesin['tahun_pembelian']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3? $mesin['harga_beli']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3? $mesin['umur_teknis']: null,
            isset($mesin['jenis']) && $mesin['jenis'] == 3 && isset($sumber_modal[$mesin['sumber_modal']])? $sumber_modal[$mesin['sumber_modal']]: null,
        ];
    }

    public function get_data_aset_pendukung_usaha($id_responden)
    {
        $master_status_kepemilikan = [
            1 => 'Sendiri', 
            2 => 'Juragan', 
            3 => 'Kelompok', 
            4 => 'Sewa',
            5 => 'Lainnya'
        ];
        
        $master_kondisi = [
            1 => 'Baru',
            2 => 'Bekas', 
        ];

        $master_sumber_modal = [
            1 => 'Modal sendiri',
            2 => 'Kredit formal', 
            3 => 'Kredit informal',
            4 => 'Bantuan pemerintah',
            5 => 'Keluarga',
            6 => 'Campuran',
        ];

        $data = [];
        foreach (AsetPendukungUsaha::where('id_responden', $id_responden)->orderBy('id_peralatan_tambahan', 'ASC')->get() as $key => $item) {
            $data = array_merge($data, [
                isset($master_status_kepemilikan[$item['status_kepemilikan']])? $master_status_kepemilikan[$item['status_kepemilikan']]: null,
                $item['jumlah'],
                isset($master_kondisi[$item['kondisi']])? $master_kondisi[$item['kondisi']]: null,
                $item['umur_ekonomis'],
                $item['harga_beli'],
                isset($master_sumber_modal[$item['sumber_modal']])? $master_sumber_modal[$item['sumber_modal']]: null,
            ]);
        }

        return $data;
    }
}
