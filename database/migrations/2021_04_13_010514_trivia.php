<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trivia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

 public function up()
    {
        Schema::create('trivias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('desde');
            $table->date('hasta');
            $table->unsignedBigInteger('estado'); 
            $table->timestamps();
        });



        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta');
            $table->unsignedBigInteger('idTrivia');
            $table->unsignedBigInteger('idRespuesta');
            $table->timestamps();
        });

        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->unsignedBigInteger('idTrivia');
            $table->unsignedBigInteger('idPregunta');
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
        Schema::dropIfExists('trivias');
    }

}
