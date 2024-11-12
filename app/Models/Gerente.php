<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    use HasFactory;

    // Define o nome da tabela, se não seguir a convenção padrão
    protected $table = 'tb_gerente';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'email',
        'num_func_supervisionados',
        'relatorio_de_vendas',
    ];

    // Define a relação com o modelo Garcom
    public function garcons()
    {
        return $this->hasMany(Garcom::class, 'id_gerente');
    }

    // Define a relação com o modelo Chef
    public function chefs()
    {
        return $this->hasMany(Chef::class, 'id_gerente');
    }

    // Você pode adicionar mais relações conforme necessário
}
