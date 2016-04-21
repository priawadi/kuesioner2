<?php

use Illuminate\Database\Seeder;

class NilaiNormaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $nilai_norma = [
            [
				'id_nilai_norma'         => 1, 
				'pertanyaan_nilai_norma' => 'Apakah ada aturan lokal/ adat yang mewajibkan bapak sebagai anggota masyarakat untuk ikut serta dalam kegiatan gotong royong untuk kepentingan bersama?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'id_master_opsional'     => 9,
            ],
            [
				'id_nilai_norma'         => 2, 
				'pertanyaan_nilai_norma' => 'Apakah ada sanksi  jika bapak melanggar aturan di atas?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'id_master_opsional'     => 9,
            ],
            [
				'id_nilai_norma'         => 3, 
				'pertanyaan_nilai_norma' => 'Apakah ada aturan lokal/ adat yang mewajibkan bapak sebagai anggota masyarakat untuk membantu orang lain yang sedang kesusahan?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'id_master_opsional'     => 9,
            ],
            [
				'id_nilai_norma'         => 4, 
				'pertanyaan_nilai_norma' => 'Apakah ada sanksi jika bapak melanggar aturan di atas?', 
				'created_at'             => \Carbon\Carbon::now()->toDateTimeString(),
				'id_master_opsional'     => 9,
            ],
        ];
        DB::table('nilai_norma')->insert($nilai_norma);
    }
}
