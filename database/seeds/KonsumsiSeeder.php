<?php

use Illuminate\Database\Seeder;

class KonsumsiSeeder extends Seeder
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
				'id_konsumsi'    	=> 1, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 1, 
				'rincian' 			=> 'Padi-Padian',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 2, 
				'id_parentkonsum' 	=> 1, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Beras',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

           [
				'id_konsumsi'    	=> 3, 
				'id_parentkonsum' 	=> 1, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Lainnya',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 4, 
				'id_parentkonsum' 	=> 2, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Umbi-umbian (ubi/sagu/dll)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 5, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Ikan/udang/cumi/kerang',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 6, 
				'id_parentkonsum' 	=> 5, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Segar/basah',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 7, 
				'id_parentkonsum' 	=> 5, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Asin/diawetkan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 8, 
				'id_parentkonsum' 	=> 6, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Daging (ayam/sapi/dll)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 9, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Telur dan susu',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],    

            [
				'id_konsumsi'    	=> 10, 
				'id_parentkonsum' 	=> 9,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Telur ayam/itik/puyuh',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 11, 
				'id_parentkonsum' 	=> 9,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Susu murni, susu kental, susu bubuk, dll.',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 12,
				'id_parentkonsum' 	=> 12, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Sayur-sayuran',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 13,
				'id_parentkonsum' 	=> 13, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Kacang-Kacangan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 14,
				'id_parentkonsum' 	=> 14, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Buah-Buahan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 15,
				'id_parentkonsum' 	=> 15, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Minyak dan lemak',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 16,
				'id_parentkonsum' 	=> 16, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Bahan Minuman (Teh/Kopi/Gula)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 17,
				'id_parentkonsum' 	=> 17, 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Bumbu-bumbuan (bumbu dapur)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 18,
				'id_parentkonsum' 	=> '', 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Konsumsi lainnya',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 19, 
				'id_parentkonsum' 	=> 18,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Mie instan, mie basah, bihun, makaroni/mie kering',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 20, 
				'id_parentkonsum' 	=> 18,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Lainnya',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 21,
				'id_parentkonsum' 	=> '', 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Makanan dan Minuman Jadi',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],                                                                                                                                                                                                                                 

            [
				'id_konsumsi'    	=> 22, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Makanan jadi / makanan ringan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 23, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Minuman non alkohol (soda)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 24, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Minuman mengandung alkohol',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 25,
				'id_parentkonsum' 	=> '', 
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Tembakau dan sirih',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],     

            [
				'id_konsumsi'    	=> 26, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Rokok (selain yang untuk melaut)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 27, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'rincian' 			=> 'Lainnya (pinang dll sesuai lokasi)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 28, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Perumahan dan fasilitas rumah tangga',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 29, 
				'id_parentkonsum' 	=> 28,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Sewa, kontrak, perkiraan sewa rumah (milik sendiri, bebas sewa, dinas), dll',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 30, 
				'id_parentkonsum' 	=> 28,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Pemeliharaan rumah dan perbaikan ringan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 31, 
				'id_parentkonsum' 	=> 28,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Rekening listrik, air, gas, minyak tanah, kayu bakar, dll.',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 32, 
				'id_parentkonsum' 	=> 28,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Rekening telepon rumah, pulsa HP, telepon umum, wartel, benda pos',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 33, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Aneka barang dan jasa',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 34, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Sabun mandi/cuci, kosmetik, perawatan rambut/muka, tissue, dll.',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 35, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Biaya kesehatan (rumah sakit, puskesmas, dokter praktek, dukun, obat-obatan, dll.)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 36, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Biaya kesehatan (rumah sakit, puskesmas, dokter praktek, dukun, obat-obatan, dll.)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 37, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Transportasi, pengangkutan, bensin, solar, minyak pelumas',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 38, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'rincian' 			=> 'Sumbangan(hajatan/tempat ibadah/keluarga besar)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 39, 
				'id_parentkonsum' 	=> 39,
				'id_kateg_konsum'  	=> 3,
				'rincian' 			=> 'Pakaian, alas kaki, dan tutup kepala',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 40, 
				'id_parentkonsum' 	=> 40,
				'id_kateg_konsum'  	=> 3,
				'rincian' 			=> 'Barang tahan lama',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],   

            [
				'id_konsumsi'    	=> 41, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 3,
				'rincian' 			=> 'Pajak, pungutan, dan asuransi',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],    

            [
				'id_konsumsi'    	=> 42, 
				'id_parentkonsum' 	=> 41,
				'id_kateg_konsum'  	=> 3,
				'rincian' 			=> 'Pajak (PBB, Pajak kendaraan)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 43, 
				'id_parentkonsum' 	=> 41,
				'id_kateg_konsum'  	=> 3,
				'rincian' 			=> 'Pungutan/Retribusi',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 44, 
				'id_parentkonsum' 	=> 41,
				'id_kateg_konsum'  	=> 3,
				'rincian' 			=> 'Asuransi kesehatan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 45, 
				'id_parentkonsum' 	=> 41,
				'id_kateg_konsum'  	=> 3,
				'rincian' 			=> 'Lainnya (asuransi jiwa lainnya, asuransi kerugian, PPh, tilang, dll.)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 46, 
				'id_parentkonsum' 	=> 46,
				'id_kateg_konsum'  	=> 3,
				'rincian' 			=> 'Keperluan pesta dan upacara/kenduri',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],                                                                                                                                                                                                                                                                         


           ];
        DB::table('konsumsi')->insert($opsional);        
    }
}
