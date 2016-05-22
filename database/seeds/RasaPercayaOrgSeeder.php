<?php

use Illuminate\Database\Seeder;

class RasaPercayaOrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $rasa_percaya_org = [
            [
				'id_rasa_percaya'         => 22, 
				'pertanyaan_rasa_percaya' => 'Apakah anda pernah meminjam/ mendapatkan bantuan lewat KUB tersebut?', 
				'created_at'     		  => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 2,
				'id_master_opsional'      => 8,
				'is_reason'               => TRUE
            ],
            [
				'id_rasa_percaya'         => 23, 
				'pertanyaan_rasa_percaya' => 'Apakah anda memiliki rasa percaya terhadap organisasi HNSI? (rasa percaya dalam penyampaian aspirasi dan keuangan)', 
				'created_at'              => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 2,
				'id_master_opsional'      => 9,
				'is_reason'               => TRUE
            ],
            [
				'id_rasa_percaya'         => 24, 
				'pertanyaan_rasa_percaya' => 'Apakah anda memiliki rasa percaya terhadap Syahbandar?', 
				'created_at'              => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 2,
				'id_master_opsional'      => 9,
				'is_reason'               => TRUE
            ],
            [
				'id_rasa_percaya'         => 25, 
				'pertanyaan_rasa_percaya' => 'Apakah anda memiliki rasa percaya terhadap Polairud?', 
				'created_at'              => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 2,
				'id_master_opsional'      => 9,
				'is_reason'               => TRUE
            ],
            [
				'id_rasa_percaya'         => 26, 
				'pertanyaan_rasa_percaya' => 'Apakah anda memiliki rasa percaya terhadap Lembaga adat?', 
				'created_at'              => \Carbon\Carbon::now()->toDateTimeString(),
				'kateg_rasa_percaya'      => 2,
				'id_master_opsional'      => 9,
				'is_reason'               => TRUE
            ],
        ];
        DB::table('rasa_percaya')->insert($rasa_percaya_org);
    }
}
