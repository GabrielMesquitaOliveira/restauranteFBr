<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garcom extends Model
{
    use HasFactory;

    // Especifica o nome da tabela associada
    protected $table = 'tb_garcom';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'telefone',
        'data_de_contratacao',
        'numero_de_pedidos_servidos',
        'id_gerente',
        'email',
        'password',
    ];
}
