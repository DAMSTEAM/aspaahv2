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
            $table->id('PK_ID_SOCIO');
            $table->char('ES_SOCIO', 1);
            $table->unsignedBigInteger('FK_DIRECCION');
            
            $table->foreign('PK_ID_SOCIO', 'mae_persona_tbl_socio_fk')->references('PK_ID_SOCIO')->on('mae_personas');
            $table->foreign('FK_DIRECCION', 'tbl_direccion_tbl_socio_fk')->references('ID_DIRECCION')->on('tbl_direcciones');
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
