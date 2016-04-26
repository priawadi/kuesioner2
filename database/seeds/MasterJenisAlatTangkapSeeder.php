<?php

use Illuminate\Database\Seeder;

class MasterJenisAlatTangkapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_jenis_alat_tangkap = [
            [
				'id_master_jenis_alat_tangkap' => 1, 
				'kateg_jenis_alat_tangkap'     => 1,
				'jenis_alat_tangkap'           => 'Jaring Purse Seine',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 2, 
				'kateg_jenis_alat_tangkap'     => 1,
				'jenis_alat_tangkap'           => 'Gill Net',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 3, 
				'kateg_jenis_alat_tangkap'     => 1,
				'jenis_alat_tangkap'           => 'Jaring Lampara',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 4, 
				'kateg_jenis_alat_tangkap'     => 1,
				'jenis_alat_tangkap'           => 'Jaring Milenium',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 5, 
				'kateg_jenis_alat_tangkap'     => 1,
				'jenis_alat_tangkap'           => 'Jaring Payang',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 6, 
				'kateg_jenis_alat_tangkap'     => 1,
				'jenis_alat_tangkap'           => 'Bagan (lift nets)',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 7, 
				'kateg_jenis_alat_tangkap'     => 1,
				'jenis_alat_tangkap'           => 'Lainnya',
				'is_freetext'                  => TRUE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 8, 
				'kateg_jenis_alat_tangkap'     => 1,
				'jenis_alat_tangkap'           => 'Lainnya',
				'is_freetext'                  => TRUE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 9, 
				'kateg_jenis_alat_tangkap'     => 2,
				'jenis_alat_tangkap'           => 'Pancing Ulur',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 10, 
				'kateg_jenis_alat_tangkap'     => 2,
				'jenis_alat_tangkap'           => 'Rawai (long line)',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 11, 
				'kateg_jenis_alat_tangkap'     => 2,
				'jenis_alat_tangkap'           => 'Tonda (troll line)',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 12, 
				'kateg_jenis_alat_tangkap'     => 2,
				'jenis_alat_tangkap'           => 'Huhate (pole & line)',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 13, 
				'kateg_jenis_alat_tangkap'     => 2,
				'jenis_alat_tangkap'           => 'Lainnya',
				'is_freetext'                  => TRUE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 14, 
				'kateg_jenis_alat_tangkap'     => 2,
				'jenis_alat_tangkap'           => 'Lainnya',
				'is_freetext'                  => TRUE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 15, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Trammel Net',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 16, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Dogol / Arad',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 17, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Cantrang',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 18, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Jaring Klitik (Jaring Udang)',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 19, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Tuguk / Jermal (stow nets)',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 20, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Bubu',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 21, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Rajungan (Kejer)',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 22, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Jaring Rampus',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 23, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Jaring Kopet',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 24, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Jaring Wewe',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 25, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Jaring Landung',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 26, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Jaring Rampus',
				'is_freetext'                  => FALSE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 27, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Lainnya',
				'is_freetext'                  => TRUE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 28, 
				'kateg_jenis_alat_tangkap'     => 3,
				'jenis_alat_tangkap'           => 'Lainnya',
				'is_freetext'                  => TRUE,
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        ];
        DB::table('master_jenis_alat_tangkap')->insert($master_jenis_alat_tangkap);
    }
}
