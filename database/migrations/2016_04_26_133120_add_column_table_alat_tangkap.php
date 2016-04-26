<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTableAlatTangkap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alat_tangkap', function (Blueprint $table) {
            $table->integer('id_responden');
            $table->string('jenis_alat_tangkap_lain', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alat_tangkap', function (Blueprint $table) {
            //
        });
    }
}
