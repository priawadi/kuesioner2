<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRasaPercaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rasa_percaya', function (Blueprint $table) {
            $table->increments('id_rasa_percaya');

            $table->integer('parent_rasa_percaya');
            $table->string('pertanyaan_rasa_percaya', 500);
            $table->integer('kateg_rasa_percaya');
            $table->integer('id_master_opsional');
            $table->boolean('is_reason')->default(FALSE);
            
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
        Schema::drop('rasa_percaya');
    }
}
