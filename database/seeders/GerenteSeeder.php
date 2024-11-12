<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gerente;

class GerenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gerente::factory()->count(5)->create(); // Cria 5 gerentes
    }
}
