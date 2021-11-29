<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsuariosRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuarios_roles', function (Blueprint $table) {
            $table->integer('ID_USUARIO_ROL')->primary();
            $table->integer('FK_ROL');
            $table->integer('FK_SOCIO');
            
            $table->foreign('FK_SOCIO', 'mae_usuario_tbl_usuario_role_fk')->references('PK_ID_SOCIO')->on('mae_usuarios');
            $table->foreign('FK_ROL', 'tbl_role_tbl_usuario_role_fk')->references('ID_ROL')->on('mae_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_usuarios_roles');
    }
}
