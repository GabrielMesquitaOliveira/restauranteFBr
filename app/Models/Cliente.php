<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Especifica o nome da tabela associada
    protected $table = 'tb_cliente';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'telefone',
    ];
}
