<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_asistencias', function (Blueprint $table) {
            $table->integer('ID_ASISTENCIA')->primary();
            $table->char('ES_SOCIO', 1);
            $table->date('FE_LLEGADA_SOCIO');
            $table->integer('FK_EVENTO');
            $table->integer('FK_SOCIO');
            
            $table->foreign('FK_EVENTO', 'tbl_evento_tbl_asistencia_fk')->references('ID_EVENTO')->on('tbl_eventos');
            $table->foreign('FK_SOCIO', 'tbl_socio_tbl_asistencia_fk')->references('PK_ID_SOCIO')->on('mae_socios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_asistencias');
    }
}
