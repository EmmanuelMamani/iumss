<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulacions', function (Blueprint $table) {
            $table->id();
            $table->date("titulacion_date");
            $table->integer("titulacion_nota");
            $table->string("titulacion_certificado");
            $table->string("titulacion_archivo");
            $table->foreignId("nivel_titulacion_id")->constrained();
            $table->foreignId("carrera_id")->constrained();
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
        Schema::dropIfExists('titulacions');
    }
}
