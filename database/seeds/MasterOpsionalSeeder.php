<?php

use Illuminate\Database\Seeder;

class MasterOpsionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

    	$opsional = [
            [
				'id_master_opsional'    => 1, 
				'kateg_master_ops' => 1, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak pernah',
            ],
            [
				'id_master_opsional'    => 2, 
				'kateg_master_ops' => 1, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Jarang / 6 bulan 1 kali',
            ],
            [
				'id_master_opsional'    => 3, 
				'kateg_master_ops' => 1, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sering / paling sedikit seminggu 1 kali',
            ],
            [
				'id_master_opsional'    => 4, 
				'kateg_master_ops' => 1, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sangat sering / setiap hari',
            ],
            [
				'id_master_opsional'    => 5, 
				'kateg_master_ops' => 2, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak pernah',
            ],
            [
				'id_master_opsional'    => 6, 
				'kateg_master_ops' => 2, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Jarang / sebulan 1 kali',
            ],
            [
				'id_master_opsional'    => 7, 
				'kateg_master_ops' => 2, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sering / paling sedikit seminggu 1 kali',
            ],
            [
				'id_master_opsional'    => 8, 
				'kateg_master_ops' => 2, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sangat sering / setiap hari',
            ],
            [
				'id_master_opsional'    => 9, 
				'kateg_master_ops' => 3, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak',
            ],
            [
				'id_master_opsional'    => 10, 
				'kateg_master_ops' => 3, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Ya',
            ],
            [
				'id_master_opsional'    => 11, 
				'kateg_master_ops' => 4, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak pernah',
            ],
            [
				'id_master_opsional'    => 12, 
				'kateg_master_ops' => 4, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Jarang / setahun 1 kali',
            ],
            [
				'id_master_opsional'    => 13, 
				'kateg_master_ops' => 4, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sering / sebulan 1 kali',
            ],
            [
				'id_master_opsional'    => 14, 
				'kateg_master_ops' => 4, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sangat sering / setiap trip penangkapan',
            ],
            [
				'id_master_opsional'    => 15, 
				'kateg_master_ops' => 5, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak pernah',
            ],
            [
				'id_master_opsional'    => 16, 
				'kateg_master_ops' => 5, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Jarang / setahun 1 kali',
            ],
            [
				'id_master_opsional'    => 17, 
				'kateg_master_ops' => 5, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sering / sebulan 1 kali',
            ],
            [
				'id_master_opsional'    => 18, 
				'kateg_master_ops' => 5, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sangat sering / setiap trip penangkapan',
            ],
            [
				'id_master_opsional'    => 19, 
				'kateg_master_ops' 		=> 6, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak pernah',
            ],
            [
				'id_master_opsional'    => 20, 
				'kateg_master_ops' 		=> 6, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Jarang',
            ],
            [
				'id_master_opsional'    => 21, 
				'kateg_master_ops' 		=> 6, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sering',
            ],
            [
				'id_master_opsional'    => 22, 
				'kateg_master_ops' 		=> 6, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sangat Sering',
            ],
            [
				'id_master_opsional'    => 23, 
				'kateg_master_ops' 		=> 7, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak ada',
            ],
            [
				'id_master_opsional'    => 24, 
				'kateg_master_ops' 		=> 7, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sedikit mendapat kemudahan',
            ],
            [
				'id_master_opsional'    => 25, 
				'kateg_master_ops' 		=> 7, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Cukup mendapat kemudahan',
            ],
            [
				'id_master_opsional'    => 26, 
				'kateg_master_ops' 		=> 7, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sangat memberikan kemudahan',
            ],
            [
				'id_master_opsional'    => 27, 
				'kateg_master_ops' 		=> 8, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak pernah',
            ],
            [
				'id_master_opsional'    => 28, 
				'kateg_master_ops' 		=> 8, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Kadang-kadang',
            ],            
            [
				'id_master_opsional'    => 29, 
				'kateg_master_ops' 		=> 8, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sering',
            ],
            [
				'id_master_opsional'    => 30, 
				'kateg_master_ops' 		=> 8, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Selalu',
            ],
            [
				'id_master_opsional'    => 31, 
				'kateg_master_ops' 		=> 9, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak sama sekali',
            ],[
				'id_master_opsional'    => 32, 
				'kateg_master_ops' 		=> 9, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Kurang percaya',
            ],[
				'id_master_opsional'    => 33, 
				'kateg_master_ops' 		=> 9, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Percaya',
            ],[
				'id_master_opsional'    => 34, 
				'kateg_master_ops' 		=> 9, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sangat Percaya',
            ],[
				'id_master_opsional'    => 35, 
				'kateg_master_ops' 		=> 10, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Pertemuan 1 tahun 1 kali',
            ],[
				'id_master_opsional'    => 36, 
				'kateg_master_ops' 		=> 10, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Pertemuan 6 bulan 1 kali',
            ],[
				'id_master_opsional'    => 37, 
				'kateg_master_ops' 		=> 10, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Pertemuan 1 bulan 1 kali',
            ],[
				'id_master_opsional'    => 38, 
				'kateg_master_ops' 		=> 10, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Pertemuan 1 minggu 1 kali',
            ],[
				'id_master_opsional'    => 39, 
				'kateg_master_ops' 		=> 11, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak pernah',
            ],[
				'id_master_opsional'    => 40, 
				'kateg_master_ops' 		=> 11, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Pernah tapi jarang',
            ],[
				'id_master_opsional'    => 41, 
				'kateg_master_ops' 		=> 11, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sering',
            ],[
				'id_master_opsional'    => 42, 
				'kateg_master_ops' 		=> 11, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Ya',
            ],[
				'id_master_opsional'    => 43, 
				'kateg_master_ops' 		=> 12, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Tidak aktif',
            ],[
				'id_master_opsional'    => 44, 
				'kateg_master_ops' 		=> 12, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Kurang aktif',
            ],[
				'id_master_opsional'    => 45, 
				'kateg_master_ops' 		=> 12, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Aktif',
            ],[
				'id_master_opsional'    => 46, 
				'kateg_master_ops' 		=> 12, 
				'created_at'            => \Carbon\Carbon::now()->toDateTimeString(),
				'opsional_master_ops'   => 'Sangat aktif',
            ],

        ];
        DB::table('master_opsional')->insert($opsional);
    }
}
