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
				'jenis_alat_tangkap'           => 'Pukat tarik udang ganda',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 2, 
				'jenis_alat_tangkap'           => 'Pukat tarik udang tunggal',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 3, 
				'jenis_alat_tangkap'           => 'Pukat tarik berbingkai',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 4, 
				'jenis_alat_tangkap'           => 'Pukat tarik ikan',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 5, 
				'jenis_alat_tangkap'           => 'Payang',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 6, 
				'jenis_alat_tangkap'           => 'Dogol',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 7, 
				'jenis_alat_tangkap'           => 'Pukat pantai',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 8, 
				'jenis_alat_tangkap'           => 'Pukat cincin',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 9, 
				'jenis_alat_tangkap'           => 'Jaring insang hanyut',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 10, 
				'jenis_alat_tangkap'           => 'jaring tiga lapis',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 11, 
				'jenis_alat_tangkap'           => 'Bagan perahu/rakit',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 12, 
				'jenis_alat_tangkap'           => 'Bagan tancap',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 13, 
				'jenis_alat_tangkap'           => 'Serok dan songko',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 14, 
				'jenis_alat_tangkap'           => 'Anco',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 15, 
				'jenis_alat_tangkap'           => 'Jaring angkat lainnya',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 16, 
				'jenis_alat_tangkap'           => 'Rawai tuna',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 17, 
				'jenis_alat_tangkap'           => 'Rawai hanyut lain selain rawai tuna',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 18, 
				'jenis_alat_tangkap'           => 'Rawai tetap',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 19, 
				'jenis_alat_tangkap'           => 'Rawai dasar tetap',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 20, 
				'jenis_alat_tangkap'           => 'Huhate',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 21, 
				'jenis_alat_tangkap'           => 'Pancing tonda',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 22, 
				'jenis_alat_tangkap'           => 'Pancing ulur',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 23, 
				'jenis_alat_tangkap'           => 'Pancing tegak',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 24, 
				'jenis_alat_tangkap'           => 'Pancing cumi',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 25, 
				'jenis_alat_tangkap'           => 'Pancing yang lain',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 26, 
				'jenis_alat_tangkap'           => 'Sero',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 27, 
				'jenis_alat_tangkap'           => 'Jermal',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 28, 
				'jenis_alat_tangkap'           => 'Bubu',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 29, 
				'jenis_alat_tangkap'           => 'Perangkap lainnya',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 30, 
				'jenis_alat_tangkap'           => 'Alat pengumpul rumput laut',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 31, 
				'jenis_alat_tangkap'           => 'Alat penangkap kerang',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 32, 
				'jenis_alat_tangkap'           => 'Alat penangkap teripang',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 33, 
				'jenis_alat_tangkap'           => 'Alat penangkap kepiting',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 34, 
				'jenis_alat_tangkap'           => 'Muroami',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 35, 
				'jenis_alat_tangkap'           => 'Jala tebar',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_alat_tangkap' => 36, 
				'jenis_alat_tangkap'           => 'Garpu dan tombak',
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
           
        ];
        DB::table('master_jenis_alat_tangkap')->insert($master_jenis_alat_tangkap);
    }
}
