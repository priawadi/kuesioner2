<?php

use Illuminate\Database\Seeder;

class PendidikanFormalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $pendidikan_formal = [
            [
				'id_pendidikan_formal' => 1, 
				'pendidikan_formal'    => 'Tidak sekolah/Belum tamat SD', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_pendidikan_formal' => 2, 
				'pendidikan_formal'    => 'SD', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_pendidikan_formal' => 3, 
				'pendidikan_formal'    => 'SLTP', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_pendidikan_formal' => 4, 
				'pendidikan_formal'    => 'SLTA', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_pendidikan_formal' => 5, 
				'pendidikan_formal'    => 'Diploma I/II/III/Akademi', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_pendidikan_formal' => 6, 
				'pendidikan_formal'    => 'Universitas', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        ];
        DB::table('pendidikan_formal')->insert($pendidikan_formal);
    }
}
