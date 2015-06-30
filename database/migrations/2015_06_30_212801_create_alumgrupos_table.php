<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumgruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alugrupos', function(Blueprint $table){

            $table->integer('id_alumno')->references('id')->on('alumnos');
            $table->integer('id_grupo')->references('id')->on('grupos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alugrupos');
    }
}
