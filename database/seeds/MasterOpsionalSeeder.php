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
        ];
        DB::table('master_opsional')->insert($opsional);
    }
}
