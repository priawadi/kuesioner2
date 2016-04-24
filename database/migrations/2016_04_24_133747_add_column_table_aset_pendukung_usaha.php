<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTableAsetPendukungUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Remove column 
        if (!Schema::hasColumn('aset_pendukung_usaha', 'id_responden'))
        {
            Schema::table('aset_pendukung_usaha', function (Blueprint $table) {
                $table->integer('id_responden');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aset_pendukung_usaha', function (Blueprint $table) {
            $table->dropColumn('id_responden');
        });
    }
}
