<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaeSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mae_socios', function (Blueprint $table) {
            $table->unsignedBigInteger('PK_ID_SOCIO', false)->primary();
            $table->char('ES_SOCIO', 1);
            $table->unsignedBigInteger('FK_COMUNIDAD');
            
            $table->foreign('PK_ID_SOCIO', 'mae_persona_tbl_socio_fk')->references('PK_ID_SOCIO')->on('mae_personas');
            $table->foreign('FK_COMUNIDAD', 'tbl_comunidad_tbl_socio_fk')->references('ID_COMUNIDAD')->on('tbl_comunidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mae_socios');
    }
}
