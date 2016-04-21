<?php

use Illuminate\Database\Seeder;

class PartisipasiPolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

    	$partisipasi_politik = [
            [
				'id_partisipasi'         => 27,
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Seberapa  sering  anda ikut  aktif (partisan) dalam salah satu partai politik?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 3,
				'id_master_opsional'     => 6,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 28, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Seberapa sering  anda aktif (simpatisan) dalam salah satu partai politik?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 3,
				'id_master_opsional'     => 6,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 29, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Seberapa sering  anda menjadi pendukung dalam salah satu partai politik?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 3,
				'id_master_opsional'     => 6,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 30, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Organisani Perikanan', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 3,
				'id_master_opsional'     => 7,
				'is_reason'              => TRUE
            ],
        ];
        DB::table('partisipasi')->insert($partisipasi_politik);
    }
}
