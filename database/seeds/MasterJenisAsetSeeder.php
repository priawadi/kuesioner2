<?php

use Illuminate\Database\Seeder;

class MasterJenisAsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_jenis_aset = [
            [
				'id_master_jenis_aset'     => 1, 
				'jenis_aset'               => 'Rumah', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => '',
				'parent'                   => '',
				'satuan'                   => 'unit',
            ],
            [
				'id_master_jenis_aset'     => 2, 
				'jenis_aset'               => 'Lahan / Tanah', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => '',
				'parent'                   => '',
				'satuan'                   => 'meter persegi',
            ],
            [
				'id_master_jenis_aset'     => 3, 
				'jenis_aset'               => 'Alat Transportasi', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => '',
				'parent'                   => TRUE,
				'satuan'                   => '',
            ],
            [
				'id_master_jenis_aset'     => 4, 
				'jenis_aset'               => 'Mobil', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => 3,
				'parent'                   => '',
				'satuan'                   => 'unit',
            ],
            [
				'id_master_jenis_aset'     => 5, 
				'jenis_aset'               => 'Sepeda Motor', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => 3,
				'parent'                   => '',
				'satuan'                   => 'unit',
            ],
            [
				'id_master_jenis_aset'     => 6, 
				'jenis_aset'               => 'Sepeda', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => 3,
				'parent'                   => '',
				'satuan'                   => 'unit',
            ],
            [
				'id_master_jenis_aset'     => 7, 
				'jenis_aset'               => 'Perahu', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => 3,
				'parent'                   => '',
				'satuan'                   => 'unit',
            ],
            [
				'id_master_jenis_aset'     => 8, 
				'jenis_aset'               => 'Perhiasan / Emas', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => '',
				'parent'                   => '',
				'satuan'                   => 'gram',
            ],
            [
				'id_master_jenis_aset'     => 9, 
				'jenis_aset'               => 'Hewan Ternak', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => '',
				'parent'                   => '',
				'satuan'                   => 'ekor',
            ],
            [
				'id_master_jenis_aset'     => 10, 
				'jenis_aset'               => 'Perlengkapan Elektronik', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => '',
				'parent'                   => '',
				'satuan'                   => 'unit',
            ],
            [
				'id_master_jenis_aset'     => 11, 
				'jenis_aset'               => 'Tabungan', 
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
				'parent_master_jenis_aset' => '',
				'parent'                   => '',
				'satuan'                   => 'rupiah',
            ],
        ];
        DB::table('master_jenis_aset')->insert($master_jenis_aset);
    }
}
