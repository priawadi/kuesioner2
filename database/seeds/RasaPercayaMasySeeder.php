<?php

use Illuminate\Database\Seeder;

class RasaPercayaMasySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
        $rasa_percaya_masy = [
            [
				'id_rasa_percaya'         => 1, 
				'pertanyaan_rasa_percaya' => 'Dalam setahun terakhir, seberapa sering anda anda biasa menjual hasil tangkapan ikan?', 
				'created_at'     		  => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'      => '',
				'parent_rasa_percaya'     => '',
				'is_reason'               => TRUE
            ],
            [
				'id_rasa_percaya'         => 2, 
				'pertanyaan_rasa_percaya' => 'a. Kepada Pemilik kapal', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 1,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 3, 
				'pertanyaan_rasa_percaya' => 'b. Kepada Pemilik modal operasional', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 1,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 4, 
				'pertanyaan_rasa_percaya' => 'c. Kepada Bakul/Pedagang/Pengepul', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 1,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 5, 
				'pertanyaan_rasa_percaya' => 'Setahun terakhir, seberapa sering  anda meminjam modal untuk modal usaha', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => '',
				'parent_rasa_percaya'     => '',
				'is_reason'              => TRUE
            ],
            [
				'id_rasa_percaya'         => 6, 
				'pertanyaan_rasa_percaya' => 'a. Kepada Pemilik kapal', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 5,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 7, 
				'pertanyaan_rasa_percaya' => 'b. Kepada Pemilik modal operasional', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 5,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 8, 
				'pertanyaan_rasa_percaya' => 'c. Kepada Bakul/Pedagang/Pengepul', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 5,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 9, 
				'pertanyaan_rasa_percaya' => 'Setahun terakhir, seberapa sering  anda mendapat pinjaman untuk pendidikan/sakit/social lainnya', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => '',
				'parent_rasa_percaya'     => '',
				'is_reason'              => TRUE
            ],
            [
				'id_rasa_percaya'         => 10, 
				'pertanyaan_rasa_percaya' => 'a. Kepada Pemilik kapal', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 9,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 11, 
				'pertanyaan_rasa_percaya' => 'b. Kepada Pemilik modal operasional', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 9,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 12, 
				'pertanyaan_rasa_percaya' => 'c. Kepada Bakul/ Pedagang/ Pengepul', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 9,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 13, 
				'pertanyaan_rasa_percaya' => 'Setahun terakhir, seberapa sering  anda mendapat bantuan  untuk pendidikan/sakit/social lainnya', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => '',
				'parent_rasa_percaya'     => '',
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 14, 
				'pertanyaan_rasa_percaya' => 'a. Kepada Pemilik kapal', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 13,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 15, 
				'pertanyaan_rasa_percaya' => 'b. Kepada Pemilik modal operasional', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 13,
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 16, 
				'pertanyaan_rasa_percaya' => 'c. Kepada Bakul/ Pedagang/ Pengepul', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => 14,
				'is_reason'              => FALSE
            ],            
            [
				'id_rasa_percaya'         => 17, 
				'pertanyaan_rasa_percaya' => 'Apakah anda mendapat bingkisan/ bonus tahunan /THR/Bingkisan hari raya dari juragan?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 8,
				'parent_rasa_percaya'     => '',
				'is_reason'              => FALSE
            ],
            [
				'id_rasa_percaya'         => 18, 
				'pertanyaan_rasa_percaya' => 'Apakah anda memiliki ikatan mengharuskan anda menjual ikan?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => '',
				'parent_rasa_percaya'     => '',
				'is_reason'              => FALSE
            ],  
            [
				'id_rasa_percaya'         => 19, 
				'pertanyaan_rasa_percaya' => 'a. Pemilik kapal?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 3,
				'parent_rasa_percaya'     => 18,
				'is_reason'              => FALSE
            ],  
            [
				'id_rasa_percaya'         => 20, 
				'pertanyaan_rasa_percaya' => 'b. Pemilik modal?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 3,
				'parent_rasa_percaya'     => 18,
				'is_reason'              => FALSE
            ],  
            [
				'id_rasa_percaya'         => 21, 
				'pertanyaan_rasa_percaya' => 'c. Bakul/pedagang?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 1,
				'id_master_opsional'     => 3,
				'parent_rasa_percaya'     => 18,
				'is_reason'              => FALSE
            ],                                                
        ];
        DB::table('rasa_percaya')->insert($rasa_percaya_masy);
    }
}
