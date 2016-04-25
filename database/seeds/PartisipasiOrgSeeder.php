<?php

use Illuminate\Database\Seeder;

class PartisipasiOrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

    	$partisipasi_organisasi = [
            [
				'id_partisipasi'         => 11,
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Apakah anda ikut serta dalam aktivitas organisasi?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 12, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Apakah anda pernah ikut serta sebagai relawan (volunteer) pada organisasi:', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => '',
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 13, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Karang Taruna / kepemudaan', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 14, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Organisani Perikanan', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 15, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Organisasi pendidikan', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 16, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Posyandu/Puskesmas /kesehatan', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 17, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Olahraga', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 18, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Organisasi budaya', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 19, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Organisasi Masjid / Keagamaan lainnya', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 20, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Organisasi kenelayanan', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 21, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Organisasi  Politik', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 22, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Arisan RT', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 23, 
				'parent_partisipasi'     => 12, 
				'pertanyaan_partisipasi' => 'Pengajian', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 24, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Apakah anda masuk ke dalam struktur organisasi tersebut?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 25, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Apakah anda terlibat dalam pengambilan keputusan dalam organisasi tersebut?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 3,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 26, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Seberapa sering  organisasi tersebut melakukan pertemuan rutin?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 2,
				'id_master_opsional'     => 5,
				'is_reason'              => FALSE
            ],

        ];
        DB::table('partisipasi')->insert($partisipasi_organisasi);
    }
}
