<?php

use Illuminate\Database\Seeder;

class MasterDemersalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_demersal = [
            [
				'id_master_demersal'	=> 1, 
				'demersal'           	=> 'Trammel Net', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],            

            [
				'id_master_demersal'	=> 2, 
				'demersal'           	=> 'Dogol / arad', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 3, 
				'demersal'           	=> 'Cantrang', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 4, 
				'demersal'           	=> 'Jaring Klitik (Jaring udang)', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 5, 
				'demersal'           	=> 'Tuguk/Jermal (stow nets)', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 6, 
				'demersal'           	=> 'Bubu', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 7, 
				'demersal'           	=> 'Rajungan (Kejer)', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 8, 
				'demersal'           	=> 'Jaring Rampus', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 9, 
				'demersal'           	=> 'Jaring Kopet', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 10, 
				'demersal'           	=> 'Jaring Wewe', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 11, 
				'demersal'           	=> 'Jaring Landung', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 12, 
				'demersal'           	=> 'Jaring Rampus', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 13, 
				'demersal'           	=> 'Lainnya...', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_master_demersal'	=> 14, 
				'demersal'           	=> 'Lainnya...', 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
            ],      

        ];
        DB::table('master_demersal')->insert($master_demersal);
    }
}
