<?php

namespace Database\Seeders;

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
        /* \App\Models\User::factory(1)->create(); */
        \App\Models\User::create([
            'id' => Persona::all()->random()->PK_ID_SOCIO,
            'name' => 'Saul Ytucayasi',
            'email' => 'saul.ytucayasi@upeu.edu.pe',
            'password' => bcrypt('saul12345')
        ]);
    }
}
