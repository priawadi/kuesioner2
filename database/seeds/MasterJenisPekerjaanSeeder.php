<?php

use Illuminate\Database\Seeder;

class MasterJenisPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_jenis_pekerjaan = [
            [
				'id_master_jenis_pekerjaan' => 1, 
				'jenis_pekerjaan'           => 'Nelayan Pemilik', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 2, 
				'jenis_pekerjaan'           => 'Nahkoda / ABK', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 3, 
				'jenis_pekerjaan'           => 'Pembudidaya', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 4, 
				'jenis_pekerjaan'           => 'Buruh Pembudidaya', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 5, 
				'jenis_pekerjaan'           => 'Penggarap Garam', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 6, 
				'jenis_pekerjaan'           => 'Buruh Garam', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 7, 
				'jenis_pekerjaan'           => 'Pedagang Perikanan', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 8, 
				'jenis_pekerjaan'           => 'Pengolah Ikan', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 9, 
				'jenis_pekerjaan'           => 'Penyedia Jasa Bahari', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 10, 
				'jenis_pekerjaan'           => 'Buruh Usaha Perikanan', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 11, 
				'jenis_pekerjaan'           => 'PNS', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 12, 
				'jenis_pekerjaan'           => 'TNI / POLRI', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 13, 
				'jenis_pekerjaan'           => 'Buruh Tani', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 14, 
				'jenis_pekerjaan'           => 'Buruh Industri', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 15, 
				'jenis_pekerjaan'           => 'Wiraswasta', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 16, 
				'jenis_pekerjaan'           => 'TKI', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_pekerjaan' => 17, 
				'jenis_pekerjaan'           => 'Lainnya (sebutkan)', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        ];
        DB::table('master_jenis_pekerjaan')->insert($master_jenis_pekerjaan);
    }
}
