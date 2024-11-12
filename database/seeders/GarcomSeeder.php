<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Garcom;

class GarcomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Garcom::factory()->count(10)->create(); // Cria 10 garçons
    }
}
