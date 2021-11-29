<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTiposSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tipos_solicitudes', function (Blueprint $table) {
            $table->integer('PK_ID_TIPO_SOLICITUD')->primary();
            $table->string('NO_SOLICITUD', 50);
            $table->char('DE_ABREVIACION', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tipos_solicitudes');
    }
}
