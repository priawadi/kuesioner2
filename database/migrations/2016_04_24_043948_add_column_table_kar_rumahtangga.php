<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTableKarRumahtangga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Remove column 
        if (Schema::hasColumn('kar_rumahtangga', 'status_rumah_tangga'))
        {
                $table->dropColumn('status_rumah_tangga');
        }

        Schema::table('kar_rumahtangga', function (Blueprint $table) {
            $table->string('nama', 150);
            $table->smallInteger('status_keluarga');
            $table->string('status_keluarga_lain', 100);
            $table->integer('id_pendidikan_formal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kar_rumahtangga', function (Blueprint $table) {
            $table->dropColumn('nama', 'status_keluarga', 'status_keluarga_lain', 'id_pendidikan_formal');
        });
    }
}
