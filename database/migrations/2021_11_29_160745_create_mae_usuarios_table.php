<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaeUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mae_usuarios', function (Blueprint $table) {
            $table->integer('PK_ID_SOCIO')->primary();
            $table->string('US_NOMBRE', 20);
            $table->string('DE_EMAIL', 100);
            $table->string('PW_USUARIO', 15);
            
            $table->foreign('PK_ID_SOCIO', 'mae_persona_mae_usuario_fk')->references('PK_ID_SOCIO')->on('mae_personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mae_usuarios');
    }
}
