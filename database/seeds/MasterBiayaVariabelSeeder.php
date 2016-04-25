<?php

use Illuminate\Database\Seeder;

class MasterBiayaVariabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $biaya_variabel = [
            [
				'id_master_biaya_variabel' => 1, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => 'Liter',
				'biaya_variabel'           => 'Solar',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 2, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => 'Liter',
				'biaya_variabel'           => 'Bensin Murni',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 3, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => 'Liter',
				'biaya_variabel'           => 'Bensin Campur',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 4, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => 'Liter',
				'biaya_variabel'           => 'Oli Campur',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 5, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => 'Liter',
				'biaya_variabel'           => 'Minyak Tanah',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 6, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => 'Buah',
				'biaya_variabel'           => 'Es Balok',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 7, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => 'Kg',
				'biaya_variabel'           => 'Umpan yg Dibeli',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 8, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => '',
				'biaya_variabel'           => 'Lainnya',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 9, 
				'kateg_biaya_variabel'  => 1, 
				'satuan'                   => '',
				'biaya_variabel'           => 'Lainnya',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 10, 
				'kateg_biaya_variabel'  => 2, 
				'satuan'                   => 'Bungkus',
				'biaya_variabel'           => 'Rokok',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 11, 
				'kateg_biaya_variabel'  => 2, 
				'satuan'                   => 'Paket',
				'biaya_variabel'           => 'Minuman (Kopi/Teh/Galon)',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 12, 
				'kateg_biaya_variabel'              => 2, 
				'satuan'                   => 'Paket',
				'biaya_variabel'           => 'Makanan (Nasi Bungkus/Mie)',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 13, 
				'kateg_biaya_variabel'  => 2, 
				'satuan'                   => 'Paket',
				'biaya_variabel'           => 'Makanan Jadi (Kue/Snak)',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 14, 
				'kateg_biaya_variabel'  => 2, 
				'satuan'                   => 'Kg',
				'biaya_variabel'           => 'Gula',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 15, 
				'kateg_biaya_variabel'  => 2, 
				'satuan'                   => '',
				'biaya_variabel'           => 'Lainnya',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_biaya_variabel' => 16, 
				'kateg_biaya_variabel'  => 2, 
				'satuan'                   => '',
				'biaya_variabel'           => 'Lainnya',
				'created_at'               => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        ];
        DB::table('master_biaya_variabel')->insert($biaya_variabel);
    }
}
