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
				'pertanyaan_partisipasi' => 'Apakah anda menjadi anggota aktif dalam salah satu partai politik?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 3,
				'id_master_opsional'     => 12,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 28, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Apakah anda menjadi pengurus dari  salah satu partai politik?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 3,
				'id_master_opsional'     => 11,
				'is_reason'              => FALSE
            ],
            [
				'id_partisipasi'         => 29, 
				'parent_partisipasi'     => '', 
				'pertanyaan_partisipasi' => 'Apakah keterlibatan anda dalam partai politik memberikan kemudahan-kemudahan dalam menjalankan usaha?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 3,
				'id_master_opsional'     => 7,
				'is_reason'              => FALSE
            ],
        ];
        DB::table('partisipasi')->insert($partisipasi_politik);
    }
}
