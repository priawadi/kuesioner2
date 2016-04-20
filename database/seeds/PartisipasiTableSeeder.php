<?php

use Illuminate\Database\Seeder;

class PartisipasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

    	$partisipasi = [
            [
				'id_partisipasi'         => 1, 
				'pertanyaan_partisipasi' => 'Seberapa sering bertemu dengan anggota keluarga besar  dalam pertemuan keluarga?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 1
            ],
            [
				'id_partisipasi'         => 2, 
				'pertanyaan_partisipasi' => 'Seberapa sering anda bertemu dan berintreaksi dengan tetangga?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 2
            ],
            [
				'id_partisipasi'         => 3, 
				'pertanyaan_partisipasi' => 'Apakah anggota keluarga  inti (nucklear family) terlibat dalam usaha penagkapan?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 3
            ],
            [
				'id_partisipasi'         => 4, 
				'pertanyaan_partisipasi' => 'Seberapa sering anggota keluarga inti terlibat dalam usaha penangkapan?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 2
            ],
            [
				'id_partisipasi'         => 5, 
				'pertanyaan_partisipasi' => 'Apakah  anggota  keluarga besar (extended family) terlibat dalam usaha penangkapan?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 3
            ],
            [
				'id_partisipasi'         => 6, 
				'pertanyaan_partisipasi' => 'Seberapa sering keluarga besar (extended family) terlibat dalam usaha penangkapan?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 2
            ],
            [
				'id_partisipasi'         => 7, 
				'pertanyaan_partisipasi' => 'Ketika anda memerlukan modal usaha penagkapan, seberapa sering  anda meminjam dari anggota keluarga inti?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 4
            ],
            [
				'id_partisipasi'         => 8, 
				'pertanyaan_partisipasi' => 'Seberapa sering  anda mendapatkan modal usaha dari anggota keluarga luas (extended family)?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 4
            ],
            [
				'id_partisipasi'         => 9, 
				'pertanyaan_partisipasi' => 'Seberapa sering anda  meminjamkan uang  untuk modal usaha kepada anggota keluarga inti?', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 4
            ],
            [
				'id_partisipasi'         => 10, 
				'pertanyaan_partisipasi' => 'Seberapa sering anda  meminjamkan uang  untuk modal usaha kepada anggota keluarga luas (extenden family)', 
				'created_at'			 => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_partisipasi'      => 1,
				'id_master_opsional'	=> 4
            ]
        ];
        DB::table('partisipasi')->insert($partisipasi);
    }
}
