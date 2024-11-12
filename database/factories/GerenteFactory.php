<?php

namespace Database\Factories;

use App\Models\Gerente;
use Illuminate\Database\Eloquent\Factories\Factory;

class GerenteFactory extends Factory
{
    protected $model = Gerente::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'num_func_supervisionados' => $this->faker->numberBetween(1, 20),
            'relatorio_de_vendas' => $this->faker->text(200), // Texto aleatório para o relatório
            'password' => bcrypt('senha_padrao'), // Define uma senha padrão criptografada
        ];
    }
}
