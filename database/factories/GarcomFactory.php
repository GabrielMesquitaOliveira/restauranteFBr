<?php

namespace Database\Factories;

use App\Models\Garcom;
use Illuminate\Database\Eloquent\Factories\Factory;

class GarcomFactory extends Factory
{
    protected $model = Garcom::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefone' => $this->faker->numerify('###########'), // Gera um telefone de 11 dígitos
            'data_de_contratacao' => $this->faker->date(),
            'numero_de_pedidos_servidos' => $this->faker->numberBetween(1, 100),
            'id_gerente' => 1,
            'password' => bcrypt('senha_padrao'), // Define uma senha padrão criptografada
        ];
    }
}
