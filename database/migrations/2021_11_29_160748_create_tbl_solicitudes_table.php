<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solicitudes', function (Blueprint $table) {
            $table->integer('ID_SOLICITUD')->primary();
            $table->string('NO_SOLICITUD', 100);
            $table->string('DE_ASUNTO', 100);
            $table->integer('CO_SOLICITUD');
            $table->integer('NU_SOLICITUD');
            $table->char('ES_SOLICITUD', 1);
            $table->integer('FK_TIPO_SOLICITUD');
            $table->integer('FK_SOCIO');
            
            $table->foreign('FK_SOCIO', 'tbl_socio_tbl_solicitud_fk')->references('PK_ID_SOCIO')->on('mae_socios');
            $table->foreign('FK_TIPO_SOLICITUD', 'tbl_tipo_solicitud_tbl_solicitud_fk')->references('PK_ID_TIPO_SOLICITUD')->on('tbl_tipos_solicitudes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_solicitudes');
    }
}
