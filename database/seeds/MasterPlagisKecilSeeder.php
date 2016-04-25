<?php

use Illuminate\Database\Seeder;

class MasterPlagisKecilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_plagis_kecil = [
            [
				'id_master_plagis_kecil'	=> 1, 
				'plagis_kecil'           	=> 'Jaring Purse Seine', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_plagis_kecil'	=> 2, 
				'plagis_kecil'           	=> 'Gill Net', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_master_plagis_kecil'	=> 3, 
				'plagis_kecil'           	=> 'Jaring Lampara', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],                        

            [
				'id_master_plagis_kecil'	=> 4, 
				'plagis_kecil'           	=> 'Jaring Milenium', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],                        

            [
				'id_master_plagis_kecil'	=> 5, 
				'plagis_kecil'           	=> 'Jaring Payang', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],                        

            [
				'id_master_plagis_kecil'	=> 6, 
				'plagis_kecil'           	=> 'Bagan (Lift nets)', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],                        

            [
				'id_master_plagis_kecil'	=> 7, 
				'plagis_kecil'           	=> 'Lainnya...', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],                        

            [
				'id_master_plagis_kecil'	=> 8, 
				'plagis_kecil'           	=> 'Lainnya...', 
				'created_at'                => \Carbon\Carbon::now()->toDateTimeString(),
            ],                        

        ];
        DB::table('master_plagis_kecil')->insert($master_plagis_kecil);
    }
}
