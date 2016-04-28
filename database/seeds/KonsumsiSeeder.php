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
				'nomor_sub'		  	=> 1, 
				'rincian' 			=> 'Padi-Padian',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 2, 
				'id_parentkonsum' 	=> 1, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 1.1,
				'rincian' 			=> 'Beras',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

           [
				'id_konsumsi'    	=> 3, 
				'id_parentkonsum' 	=> 1, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 1.2,
				'rincian' 			=> 'Lainnya',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 4, 
				'id_parentkonsum' 	=> 2, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 2,
				'rincian' 			=> 'Umbi-umbian (ubi/sagu/dll)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 5, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 3,
				'rincian' 			=> 'Ikan/udang/cumi/kerang',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 6, 
				'id_parentkonsum' 	=> 5, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 3.1,
				'rincian' 			=> 'Segar/basah',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 7, 
				'id_parentkonsum' 	=> 5, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 3.2,
				'rincian' 			=> 'Asin/diawetkan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 8, 
				'id_parentkonsum' 	=> 6, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 4,
				'rincian' 			=> 'Daging (ayam/sapi/dll)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 9, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 5,
				'rincian' 			=> 'Telur dan susu',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],    

            [
				'id_konsumsi'    	=> 10, 
				'id_parentkonsum' 	=> 9,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 5.1,
				'rincian' 			=> 'Telur ayam/itik/puyuh',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 11, 
				'id_parentkonsum' 	=> 9,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 5.2,
				'rincian' 			=> 'Susu murni, susu kental, susu bubuk, dll.',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 12,
				'id_parentkonsum' 	=> 12, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 6,
				'rincian' 			=> 'Sayur-sayuran',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 13,
				'id_parentkonsum' 	=> 13, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 7,
				'rincian' 			=> 'Kacang-Kacangan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 14,
				'id_parentkonsum' 	=> 14, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 8,
				'rincian' 			=> 'Buah-Buahan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 15,
				'id_parentkonsum' 	=> 15, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 9,
				'rincian' 			=> 'Minyak dan lemak',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 16,
				'id_parentkonsum' 	=> 16, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 10,
				'rincian' 			=> 'Bahan Minuman (Teh/Kopi/Gula)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 17,
				'id_parentkonsum' 	=> 17, 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 11,
				'rincian' 			=> 'Bumbu-bumbuan (bumbu dapur)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 18,
				'id_parentkonsum' 	=> '', 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 12,
				'rincian' 			=> 'Konsumsi lainnya',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 19, 
				'id_parentkonsum' 	=> 18,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 12.1,
				'rincian' 			=> 'Mie instan, mie basah, bihun, makaroni/mie kering',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 20, 
				'id_parentkonsum' 	=> 18,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 12.2,
				'rincian' 			=> 'Lainnya',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 21,
				'id_parentkonsum' 	=> '', 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 13,
				'rincian' 			=> 'Makanan dan Minuman Jadi',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],                                                                                                                                                                                                                                 

            [
				'id_konsumsi'    	=> 22, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 13.1,
				'rincian' 			=> 'Makanan jadi / makanan ringan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 23, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 13.2,
				'rincian' 			=> 'Minuman non alkohol (soda)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 24, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 13.3,
				'rincian' 			=> 'Minuman mengandung alkohol',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 25,
				'id_parentkonsum' 	=> '', 
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 14,
				'rincian' 			=> 'Tembakau dan sirih',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],     

            [
				'id_konsumsi'    	=> 26, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 14.1,
				'rincian' 			=> 'Rokok (selain yang untuk melaut)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 27, 
				'id_parentkonsum' 	=> 21,
				'id_kateg_konsum'  	=> 1,
				'nomor_sub'		  	=> 14.2,
				'rincian' 			=> 'Lainnya (pinang dll sesuai lokasi)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 28, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 1,
				'rincian' 			=> 'Perumahan dan fasilitas rumah tangga',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 29, 
				'id_parentkonsum' 	=> 28,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 1.1,
				'rincian' 			=> 'Sewa, kontrak, perkiraan sewa rumah (milik sendiri, bebas sewa, dinas), dll',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 30, 
				'id_parentkonsum' 	=> 28,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 1.2,
				'rincian' 			=> 'Pemeliharaan rumah dan perbaikan ringan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 31, 
				'id_parentkonsum' 	=> 28,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 1.3,
				'rincian' 			=> 'Rekening listrik, air, gas, minyak tanah, kayu bakar, dll.',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 32, 
				'id_parentkonsum' 	=> 28,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 1.4,
				'rincian' 			=> 'Rekening telepon rumah, pulsa HP, telepon umum, wartel, benda pos',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 33, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 2,
				'rincian' 			=> 'Aneka barang dan jasa',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 34, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 2.1,
				'rincian' 			=> 'Sabun mandi/cuci, kosmetik, perawatan rambut/muka, tissue, dll.',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 35, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 2.2,
				'rincian' 			=> 'Biaya kesehatan (rumah sakit, puskesmas, dokter praktek, dukun, obat-obatan, dll.)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 36, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 2.3,
				'rincian' 			=> 'Biaya kesehatan (rumah sakit, puskesmas, dokter praktek, dukun, obat-obatan, dll.)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 37, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 2.4,
				'rincian' 			=> 'Transportasi, pengangkutan, bensin, solar, minyak pelumas',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 38, 
				'id_parentkonsum' 	=> 33,
				'id_kateg_konsum'  	=> 2,
				'nomor_sub'		  	=> 2.5,
				'rincian' 			=> 'Sumbangan(hajatan/tempat ibadah/keluarga besar)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 39, 
				'id_parentkonsum' 	=> 39,
				'id_kateg_konsum'  	=> 3,
				'nomor_sub'		  	=> 3,
				'rincian' 			=> 'Pakaian, alas kaki, dan tutup kepala',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 40, 
				'id_parentkonsum' 	=> 40,
				'id_kateg_konsum'  	=> 3,
				'nomor_sub'		  	=> 4,
				'rincian' 			=> 'Barang tahan lama',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],   

            [
				'id_konsumsi'    	=> 41, 
				'id_parentkonsum' 	=> '',
				'id_kateg_konsum'  	=> 3,
				'nomor_sub'		  	=> 5,
				'rincian' 			=> 'Pajak, pungutan, dan asuransi',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],    

            [
				'id_konsumsi'    	=> 42, 
				'id_parentkonsum' 	=> 41,
				'id_kateg_konsum'  	=> 3,
				'nomor_sub'		  	=> 5.1,
				'rincian' 			=> 'Pajak (PBB, Pajak kendaraan)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 43, 
				'id_parentkonsum' 	=> 41,
				'id_kateg_konsum'  	=> 3,
				'nomor_sub'		  	=> 5.2,
				'rincian' 			=> 'Pungutan/Retribusi',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],

            [
				'id_konsumsi'    	=> 44, 
				'id_parentkonsum' 	=> 41,
				'id_kateg_konsum'  	=> 3,
				'nomor_sub'		  	=> 5.3,
				'rincian' 			=> 'Asuransi kesehatan',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],  

            [
				'id_konsumsi'    	=> 45, 
				'id_parentkonsum' 	=> 41,
				'id_kateg_konsum'  	=> 3,
				'nomor_sub'		  	=> 5.4,
				'rincian' 			=> 'Lainnya (asuransi jiwa lainnya, asuransi kerugian, PPh, tilang, dll.)',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ], 

            [
				'id_konsumsi'    	=> 46, 
				'id_parentkonsum' 	=> 46,
				'id_kateg_konsum'  	=> 3,
				'nomor_sub'		  	=> 6,
				'rincian' 			=> 'Keperluan pesta dan upacara/kenduri',
				'created_at'		=> \Carbon\Carbon::now()->toDateTimeString(),
            ],                                                                                                                                                                                                                                                                         

           ];
        DB::table('konsumsi')->insert($opsional);
    }
}
