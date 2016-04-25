<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTableJwbRasaPercaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jwb_rasa_percaya', function (Blueprint $table) {
            $table->integer('kateg_rasa_percaya');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jwb_rasa_percaya', function (Blueprint $table) {
            $table->dropColumn('kateg_rasa_percaya');
        });
    }
}
