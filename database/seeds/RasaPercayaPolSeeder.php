<?php

use Illuminate\Database\Seeder;

class RasaPercayaPolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $rasa_percaya_pol = [
            [
				'id_rasa_percaya'         => 27, 
				'pertanyaan_rasa_percaya' => 'Apakah anda memiliki rasa percaya terhadap Pemerintah Daerah?', 
				'created_at'     		  => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 3,
				'id_master_opsional'      => 9,
				'is_reason'               => TRUE
            ],
            [
				'id_rasa_percaya'         => 28, 
				'pertanyaan_rasa_percaya' => 'Apakah anda memiliki rasa percaya terhadap pemerintah Pusat?', 
				'created_at'              => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 3,
				'id_master_opsional'      => 9,
				'is_reason'               => TRUE
            ],
            [
				'id_rasa_percaya'         => 29, 
				'pertanyaan_rasa_percaya' => 'Apakah anda memiliki rasa percaya terhadap DPR & DPRD ?', 
				'created_at'              => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 3,
				'id_master_opsional'      => 9,
				'is_reason'               => TRUE
            ],
        ];
        DB::table('rasa_percaya')->insert($rasa_percaya_pol);
    }
}
