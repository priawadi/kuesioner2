<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTableJwbPartisipasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jwb_partisipasi', function (Blueprint $table) {
            $table->integer('kateg_partisipasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jwb_partisipasi', function (Blueprint $table) {
            $table->dropColumn('kateg_partisipasi');
        });
    }
}
