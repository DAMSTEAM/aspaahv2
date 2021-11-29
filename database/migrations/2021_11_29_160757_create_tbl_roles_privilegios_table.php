<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRolesPrivilegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_roles_privilegios', function (Blueprint $table) {
            $table->integer('ID_ROL_PRIVILEGIO')->primary();
            $table->integer('FK_PRIVILEGIO');
            $table->integer('FK_ROLE');
            
            $table->foreign('FK_PRIVILEGIO', 'tbl_privilegio_tbl_usuario_privilegio_fk')->references('ID_PRIVILEGIO')->on('tbl_privilegios');
            $table->foreign('FK_ROLE', 'tbl_role_tbl_usuario_privilegio_fk')->references('ID_ROL')->on('mae_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_roles_privilegios');
    }
}
