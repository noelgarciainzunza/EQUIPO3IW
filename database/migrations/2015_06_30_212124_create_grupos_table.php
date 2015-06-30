<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function(Blueprint $table){

            $table->increments('id');
            $table->integer('id_maestro')->references('id')->on('maestros');
            $table->integer('id_materia')->references('id')->on('materias');
            $table->string('aula',6);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grupos');
    }
}
