<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(KonsumsiSeeder::class);
        $this->call(MasterJenisAsetSeeder::class);
        $this->call(MasterJenisIkanSeeder::class);
        $this->call(MasterJenisPekerjaanSeeder::class);
        $this->call(MasterOpsionalSeeder::class);
        $this->call(MasterPeralatanTambahanSeeder::class);
        $this->call(MasterPlagisKecilSeeder::class);
        $this->call(NilaiNormaSeeder::class);
        $this->call(PartisipasiOrgSeeder::class);
        $this->call(PartisipasiPolSeeder::class);
        $this->call(PartisipasiTableSeeder::class);
        $this->call(RasaPercayaMasySeeder::class);
        $this->call(RasaPercayaOrgSeeder::class);
        $this->call(RasaPercayaPolSeeder::class);
        $this->call(MasterPlagisKecilSeeder::class);
        $this->call(PendidikanFormalSeeder::class);
    }
}
