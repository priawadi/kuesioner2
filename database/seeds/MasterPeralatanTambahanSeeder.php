<?php

use Illuminate\Database\Seeder;

class MasterPeralatanTambahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_peralatan_tambahan = [
            [
				'id_master_peralatan_tambahan' => 1, 
				'peralatan_tambahan'           => 'Generator', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 2, 
				'peralatan_tambahan'           => 'Accu', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 3, 
				'peralatan_tambahan'           => 'Lampu', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 4, 
				'peralatan_tambahan'           => 'Peralatan Memasak', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 5, 
				'peralatan_tambahan'           => 'Mesin Penarik Jaring', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 6, 
				'peralatan_tambahan'           => 'GPS', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 7, 
				'peralatan_tambahan'           => 'Fish Finder', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 8, 
				'peralatan_tambahan'           => 'Peralatan Komunikasi (HT)', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 9, 
				'peralatan_tambahan'           => 'Rumpon', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_peralatan_tambahan' => 10, 
				'peralatan_tambahan'           => 'Kompresor', 
				'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 11, 
                'peralatan_tambahan'           => 'Pelampung', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 12, 
                'peralatan_tambahan'           => 'Rumah Bagan', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 13, 
                'peralatan_tambahan'           => 'Alat selam', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 14, 
                'peralatan_tambahan'           => 'Alat Snorkling', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 15, 
                'peralatan_tambahan'           => 'Ganco', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 16, 
                'peralatan_tambahan'           => 'Layang-layang', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 17, 
                'peralatan_tambahan'           => 'Box pendingin (coolbox)', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 18, 
                'peralatan_tambahan'           => 'Layar', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'id_master_peralatan_tambahan' => 19, 
                'peralatan_tambahan'           => 'Lainnya', 
                'created_at'                   => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        ];
        DB::table('master_peralatan_tambahan')->insert($master_peralatan_tambahan);
    }
}
