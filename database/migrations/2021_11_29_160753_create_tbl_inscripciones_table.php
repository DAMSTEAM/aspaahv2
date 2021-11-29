<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_inscripciones', function (Blueprint $table) {
            $table->id('ID_INSCRIPCION');
            $table->char('ES_INS', 1);
            $table->dateTime('FE_INSCRIPCION');
            $table->dateTime('FE_ATENCION')->nullable();
            $table->integer('FK_INGRESO');
            $table->integer('FK_SOLICITADO');
            $table->integer('FK_APROBADO');
            
            $table->foreign('FK_SOLICITADO', 'mae_persona_tbl_inscripcion_fk')->references('PK_ID_SOCIO')->on('mae_personas');
            $table->foreign('FK_APROBADO', 'mae_socios_tbl_inscripciones_fk')->references('PK_ID_SOCIO')->on('mae_socios');
            $table->foreign('FK_INGRESO', 'tbl_ingresos_tbl_inscripcion_fk')->references('ID_INGRESO')->on('tbl_ingresos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_inscripciones');
    }
}
