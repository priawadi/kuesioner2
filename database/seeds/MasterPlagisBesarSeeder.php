<?php

use Illuminate\Database\Seeder;

class MasterPlagisBesarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_plagis_besar = [
            [
				'id_master_plagis_besar'	=> 1, 
				'plagis_besar'           	=> 'Pancing ulur', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],

              
            [
				'id_master_plagis_besar'	=> 2, 
				'plagis_besar'           	=> 'Rawai (long line)', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],

              
            [
				'id_master_plagis_besar'	=> 3, 
				'plagis_besar'           	=> 'Tonda (troll line)', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],

              
            [
				'id_master_plagis_besar'	=> 4, 
				'plagis_besar'           	=> 'Huhate (pole & line)', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],

              
            [
				'id_master_plagis_besar'	=> 5, 
				'plagis_besar'           	=> 'Lainnya...	', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],

              
            [
				'id_master_plagis_besar'	=> 6, 
				'plagis_besar'           	=> 'Lainnya...	', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],

                  

        ];
        DB::table('master_plagis_besar')->insert($master_plagis_besar);
    }
}
