<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Especifica o nome da tabela associada
    protected $table = 'tb_pedido';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'dt_pedido',
        'valor_total',
        'status_pdd',
        'id_cliente',
        'id_garcom',
    ];
}
