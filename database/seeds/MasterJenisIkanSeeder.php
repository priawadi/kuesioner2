<?php

use Illuminate\Database\Seeder;

class MasterJenisIkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_jenis_ikan = [
            [
				'id_master_jenis_ikan' => 1, 
				'jenis_ikan'            => 'Tuna', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 2, 
				'jenis_ikan'            => 'Tongkol', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 3, 
				'jenis_ikan'            => 'Cakalang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 4, 
				'jenis_ikan'            => 'Kembung', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 5, 
				'jenis_ikan'            => 'Layang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 6, 
				'jenis_ikan'            => 'Tembang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 7, 
				'jenis_ikan'            => 'Tenggiri', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 8, 
				'jenis_ikan'            => 'Cucut', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 9, 
				'jenis_ikan'            => 'Udang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 10, 
				'jenis_ikan'            => 'Ekor Kuning', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 11, 
				'jenis_ikan'            => 'Kakap', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 12, 
				'jenis_ikan'            => 'Rajungan', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 13, 
				'jenis_ikan'            => 'Lemuru', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 14, 
				'jenis_ikan'            => 'Bawal', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 15, 
				'jenis_ikan'            => 'Gerok', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 16, 
				'jenis_ikan'            => 'Cumi', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 17, 
				'jenis_ikan'            => 'Baracuda', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 18, 
				'jenis_ikan'            => 'Kuro/Subal', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 19, 
				'jenis_ikan'            => 'Talang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 20, 
				'jenis_ikan'            => 'Teri', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 21, 
				'jenis_ikan'            => 'Remang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 22, 
				'jenis_ikan'            => 'Pari', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 23, 
				'jenis_ikan'            => 'Kerapu', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 24, 
				'jenis_ikan'            => 'Kwe', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 25, 
				'jenis_ikan'            => 'Layur', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 26, 
				'jenis_ikan'            => 'Belanak', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 27, 
				'jenis_ikan'            => 'Tunang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 28, 
				'jenis_ikan'            => 'Belosok', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 29, 
				'jenis_ikan'            => 'Peperek', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 30, 
				'jenis_ikan'            => 'Kuniran', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 31, 
				'jenis_ikan'            => 'Selar', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 32, 
				'jenis_ikan'            => 'Lainnya', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        ];

        DB::table('master_jenis_ikan')->insert($master_jenis_ikan);
    }
}
