<?php

namespace Database\Seeders;

use App\Models\sys\Comunidad;
use App\Models\sys\Persona;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        \App\Models\sys\Persona::factory(10)->create();
        \App\Models\sys\Departamento::factory(10)->create();
        \App\Models\sys\Provincia::factory(10)->create();
        \App\Models\sys\Distrito::factory(10)->create();
        \App\Models\sys\Comunidad::factory(10)->create();

        $PK_ID_SOCIO = Persona::all()->random()->PK_ID_SOCIO;

        \App\Models\User::create([
            'id' => $PK_ID_SOCIO,
            'name' => 'Saul Ytucayasi',
            'email' => 'saul.ytucayasi@upeu.edu.pe',
            'password' => bcrypt('saul12345')
        ]);

        \App\Models\sys\Socio::create([
            'PK_ID_SOCIO' => $PK_ID_SOCIO,
            'ES_SOCIO' => '1',
            'TI_SOCIO' => '0',
            'FK_COMUNIDAD' => Comunidad::all()->random()->ID_COMUNIDAD
        ]);
    }
}
