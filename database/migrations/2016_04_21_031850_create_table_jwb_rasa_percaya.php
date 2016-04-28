<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJwbRasaPercaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jwb_rasa_percaya', function (Blueprint $table) {
            $table->increments('id_jwb_rasa_percaya');
            $table->integer('id_master_opsional')->nullable();
            $table->integer('id_responden');
            $table->integer('id_rasa_percaya');
            $table->text('jwb_teks_rasa_percaya')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jwb_rasa_percaya');
    }
}
