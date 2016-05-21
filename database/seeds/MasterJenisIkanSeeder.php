<?php

use Illuminate\Database\Seeder;

class MasterJenisIkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $master_jenis_ikan = [
            [
				'id_master_jenis_ikan' => 1, 
				'jenis_ikan'            => 'Albakora', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 2, 
				'jenis_ikan'            => 'Alu-alu/ Manggilala/Pucul', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 3, 
				'jenis_ikan'            => 'Banyar', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 4, 
				'jenis_ikan'            => 'Bawal hitam', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 5, 
				'jenis_ikan'            => 'Bawal putih', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 6, 
				'jenis_ikan'            => 'Belanak', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 7, 
				'jenis_ikan'            => 'Beloso/Buntut kerbo', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 8, 
				'jenis_ikan'            => 'Bentong', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 9, 
				'jenis_ikan'            => 'Beronang kuning', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 10, 
				'jenis_ikan'            => 'Beronang lingkis', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 11, 
				'jenis_ikan'            => 'Biji nangka', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 12, 
				'jenis_ikan'            => 'Biji nangka karang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 13, 
				'jenis_ikan'            => 'Cakalang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 14, 
				'jenis_ikan'            => 'Cendro', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 15, 
				'jenis_ikan'            => 'Cucut botol', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 16, 
				'jenis_ikan'            => 'Cucut lanyam', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 17, 
				'jenis_ikan'            => 'Cucut martil, Capingan', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 18, 
				'jenis_ikan'            => 'Cucut tikus, Cucut monyet', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 19, 
				'jenis_ikan'            => 'Daun bambu/Talang-talang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 20, 
				'jenis_ikan'            => 'Ekor kuning/Pisang-pisang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 21, 
				'jenis_ikan'            => 'Gerot-gerot', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 22, 
				'jenis_ikan'            => 'Golok-golok', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 23, 
				'jenis_ikan'            => 'Gulamah/Tigawaja', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 24, 
				'jenis_ikan'            => 'Ikan beronang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 25, 
				'jenis_ikan'            => 'Ikan gaji', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 26, 
				'jenis_ikan'            => 'Ikan gergaji', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 27, 
				'jenis_ikan'            => 'Ikan layaran', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 28, 
				'jenis_ikan'            => 'Ikan lidah', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 29, 
				'jenis_ikan'            => 'Ikan napoleon', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 30, 
				'jenis_ikan'            => 'Ikan nomei/Lomei', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 31, 
				'jenis_ikan'            => 'Ikan pedang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 32, 
				'jenis_ikan'            => 'Ikan sebelah', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 33, 
				'jenis_ikan'            => 'Ikan terbang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 34, 
				'jenis_ikan'            => 'Japuh', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 35, 
				'jenis_ikan'            => 'Julung-julung', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 36, 
				'jenis_ikan'            => 'Kakap merah', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 37, 
				'jenis_ikan'            => 'Kakap putih', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 38, 
				'jenis_ikan'            => 'Kapas-kapas', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 39, 
				'jenis_ikan'            => 'Kembung', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 40, 
				'jenis_ikan'            => 'Kenyar', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 41, 
				'jenis_ikan'            => 'Kerapu balong', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 42, 
				'jenis_ikan'            => 'Kerapu bebek', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 43, 
				'jenis_ikan'            => 'Kerapu karang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 44, 
				'jenis_ikan'            => 'Kerapu lumpur', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 45, 
				'jenis_ikan'            => 'Kerapu sunu', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 46, 
				'jenis_ikan'            => 'Kerong-kerong', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 47, 
				'jenis_ikan'            => 'Kuniran', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 48, 
				'jenis_ikan'            => 'Kurau', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 49, 
				'jenis_ikan'            => 'Kurisi', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 50, 
				'jenis_ikan'            => 'Kuro/Senangin', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 51, 
				'jenis_ikan'            => 'Kuwe', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 52, 
				'jenis_ikan'            => 'Layang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 53, 
				'jenis_ikan'            => 'Layur', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 54, 
				'jenis_ikan'            => 'Lemadang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 55, 
				'jenis_ikan'            => 'Lemuru', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 56, 
				'jenis_ikan'            => 'Lencam', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 57, 
				'jenis_ikan'            => 'Lisong', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 58, 
				'jenis_ikan'            => 'Lolosi biru', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 59, 
				'jenis_ikan'            => 'Madidihang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 60, 
				'jenis_ikan'            => 'Mako', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 61, 
				'jenis_ikan'            => 'Manyung', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 62, 
				'jenis_ikan'            => 'Pari burung', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 63, 
				'jenis_ikan'            => 'Pari hidung sekop', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 64, 
				'jenis_ikan'            => 'Pari kekeh', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 65, 
				'jenis_ikan'            => 'Pari kelelawar', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 66, 
				'jenis_ikan'            => 'Pari kembang, Pari macan', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 67, 
				'jenis_ikan'            => 'Peperek', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 68, 
				'jenis_ikan'            => 'Pinjalo', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 69, 
				'jenis_ikan'            => 'Rejung', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 70, 
				'jenis_ikan'            => 'Selanget', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 71, 
				'jenis_ikan'            => 'Selar', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 72, 
				'jenis_ikan'            => 'Senuk ', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 73, 
				'jenis_ikan'            => 'Serinding tembakau', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 74, 
				'jenis_ikan'            => 'Setuhuk biru', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 75, 
				'jenis_ikan'            => 'Setuhuk hitam', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 76, 
				'jenis_ikan'            => 'Setuhuk loreng', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 77, 
				'jenis_ikan'            => 'Siro', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 78, 
				'jenis_ikan'            => 'Slengseng', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 79, 
				'jenis_ikan'            => 'Sunglir', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 80, 
				'jenis_ikan'            => 'Swanggi/Mata besar', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 81, 
				'jenis_ikan'            => 'Tembang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 82, 
				'jenis_ikan'            => 'Tenggiri ', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 83, 
				'jenis_ikan'            => 'Tenggiri papan', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 84, 
				'jenis_ikan'            => 'Teri', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 85, 
				'jenis_ikan'            => 'Terubuk', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 86, 
				'jenis_ikan'            => 'Tetengkek', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 87, 
				'jenis_ikan'            => 'Tongkol abu-abu', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 88, 
				'jenis_ikan'            => 'Tongkol komo', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 89, 
				'jenis_ikan'            => 'Tongkol krai', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 90, 
				'jenis_ikan'            => 'Tuna mata besar', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 91, 
				'jenis_ikan'            => 'Tuna sirip biru selatan', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 92, 
				'jenis_ikan'            => 'Ikan Lainnya ', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 93, 
				'jenis_ikan'            => 'Kepiting', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 94, 
				'jenis_ikan'            => 'Penyu', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 95, 
				'jenis_ikan'            => 'Rajungan', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 96, 
				'jenis_ikan'            => 'Udang barong', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 97, 
				'jenis_ikan'            => 'Udang dogol', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 98, 
				'jenis_ikan'            => 'Udang krosok', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 99, 
				'jenis_ikan'            => 'Udang lainnya', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 100, 
				'jenis_ikan'            => 'Udang putih', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 101, 
				'jenis_ikan'            => 'Udang ratu/raja', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 102, 
				'jenis_ikan'            => 'Udang windu', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 103, 
				'jenis_ikan'            => 'Binatang berkulit keras lainnya', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 104, 
				'jenis_ikan'            => 'Cumi-cumi', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 105, 
				'jenis_ikan'            => 'Gurita', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 106, 
				'jenis_ikan'            => 'Kerang darah', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 107, 
				'jenis_ikan'            => 'Kerang hijau', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 108, 
				'jenis_ikan'            => 'Kerang mutiara', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 109, 
				'jenis_ikan'            => 'Lola/Susu bundar', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 110, 
				'jenis_ikan'            => 'Remis', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 111, 
				'jenis_ikan'            => 'Simping', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 112, 
				'jenis_ikan'            => 'Sotong', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 113, 
				'jenis_ikan'            => 'Tiram', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 114, 
				'jenis_ikan'            => 'Binatang lunak lainnya', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 115, 
				'jenis_ikan'            => 'Bunga karang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 116, 
				'jenis_ikan'            => 'Teripang', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 117, 
				'jenis_ikan'            => 'Lainnya', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
				'id_master_jenis_ikan' => 118, 
				'jenis_ikan'            => 'Rumput laut', 
				'created_at'           => \Carbon\Carbon::now()->toDateTimeString(),
            ],

        ];

        DB::table('master_jenis_ikan')->insert($master_jenis_ikan);
    }
}
